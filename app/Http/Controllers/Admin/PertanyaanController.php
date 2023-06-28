<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PertanyaanController extends Controller
{
    public function index()
    {
        $id = '';
        $data = DB::table('pertanyaan')->get();
        $kategori_kuis = DB::table('kategori_kuis')->whereNull('deleted_by')->get();
        return view('admin.pertanyaan.index', compact('data','kategori_kuis','id'));
    }
    public function detail(Request $request)
    {
        $id = $request->kategori_kuis_id;
        $data = DB::table('pertanyaan')->where('urutan',$request->kategori_kuis_id)->get();
        $kategori_kuis = DB::table('kategori_kuis')->whereNull('deleted_by')->get();
        return view('admin.pertanyaan.index', compact('data','kategori_kuis','id'));
    }
    public function modul_akses($id)
    {
        $id = Crypt::decrypt($id);
        $data_pertanyaan = DB::select("SELECT * FROM pertanyaan WHERE pertanyaan_id='$id'");
        $menu = [];
        $data = DB::table('menu')->where(['parent_id' => 0])->whereNull('deleted_at')->get();
        // dd($data);
        foreach($data as $key => $item)
        {
            array_push($menu, [
                'menu_id' => $item->menu_id,
                'nama_menu' => $item->nama_menu,
                'url_menu' => $item->url_menu,
                'icon_menu' => $item->icon_menu,
                'parent_id' => $item->parent_id,
                'submenu' => []
            ]);
            $menu_id = $item->menu_id;
            $submenu = DB::table('menu')->where(['parent_id' => $menu_id])->whereNull('deleted_at')->get();
            // dd($submenu);
            foreach($submenu as $sub)
            {
                array_push($menu[$key]["submenu"], [
                    "menu_id" => $sub->menu_id,
                    "nama_menu" => $sub->nama_menu,
                    "url_menu" => $sub->url_menu,
                    "icon_menu" => $sub->icon_menu,
                ]);
                // dd($menu['submenu']);
            }
        }
        return view('admin.pertanyaan.modul_akses', compact('data_pertanyaan','menu'));
    }
    public function modul_akses_store(Request $request){
        $menu_id = '';
        $pertanyaan_id = $request->pertanyaan_id;
        foreach($request->menu_id as $item){
            $menu_id .= $item."|";
        }
        // dd($menu_id);
        DB::table('pertanyaan')->where('pertanyaan_id', $pertanyaan_id)->update(['menu_id' => $menu_id]);
        return redirect('pertanyaan')->with(['success' => 'Data Berhasil Di Simpan!']);
    }

    public function store(Request $request){
        $request->validate([
            'pertanyaan' => ['required', 'string'],
            'jenis_jawaban' => ['required', 'string'],
        ]);
        $data = [
            'pertanyaan' => $request->pertanyaan,
            'jenis_jawaban' => $request->jenis_jawaban,
            'jawaban1' => $request->jawaban1,
            'jawaban2' => $request->jawaban2,
            'jawaban3' => $request->jawaban3,
            'jawaban4' => $request->jawaban4,
            'jawaban5' => $request->jawaban5,
            'urutan_soal' => $request->urutan_soal,
            'urutan' => $request->urutan,
        ];
        DB::table('pertanyaan')->insert($data);

        return Redirect::back()->with(['success' => 'Data Berhasil Di Simpan!']);
    }

    public function edit($id)
    {
        // $id = Crypt::decrypt($id);
        // dd($data);
        $text = "Data tidak ditemukan";
        if($data = DB::table('pertanyaan')->where(['pertanyaan_id' => $id])->get()){
            // dd($data);
            $text = '<div class="mb-3 row">'.
                    '<label for="staticEmail" class="col-sm-2 col-form-label">Hak Akses</label>'.
                    '<div class="col-sm-10">'.
                    '<input type="text" class="form-control" id="nama_pertanyaan" name="nama_pertanyaan" value="'.$data[0]->nama_pertanyaan.'" required>'.
                    '</div>'.
                '</div>'.
                '<input type="hidden" class="form-control" id="pertanyaan_id" name="pertanyaan_id" value="'.Crypt::encrypt($data[0]->pertanyaan_id) .'" required>';
        }
        return $text;
        // return view('admin.admin.pertanyaan.edit');
    }

    public function update(Request $request){
        $request->validate([
            'nama_pertanyaan' => ['required', 'string'],
        ]);
        $pertanyaan_id = Crypt::decrypt($request->pertanyaan_id);
        $data = [
            'nama_pertanyaan' => $request->nama_pertanyaan,
            'updated_by' => Auth::user()->id,
            'updated_at' => now(),
        ];
        DB::table('pertanyaan')->where(['pertanyaan_id' => $pertanyaan_id])->update($data);
        return Redirect::back()->with(['success' => 'Data Berhasil Di Update!']);
    }

    public function delete($id){
        $id = Crypt::decrypt($id);
        // if($data = DB::select("SELECT * FROM pertanyaan WHERE pertanyaan_id='$id'")){
        //     DB::select("DELETE FROM pertanyaan WHERE pertanyaan_id='$id'");
        // }
        $data = [
            'deleted_by' => Auth::user()->id,
            'deleted_at' => now(),
        ];
        DB::table('pertanyaan')->where(['pertanyaan_id' => $id])->update($data);
        
        return Redirect::back()->with(['success' => 'Data Berhasil Di Hapus!']);
    }
    
}
