<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class KategoriKuisController extends Controller
{
    public function index()
    {
        $data = DB::table('kategori_kuis')->whereNull('kategori_kuis.deleted_at')->get();
        return view('admin.kategori_kuis.index', compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'nama_kategori_kuis' => ['required', 'string'],
            'url' => ['required', 'string'],
        ]);
        $data = [
            'created_by' => Auth::user()->id,
            'created_at' => now(),
            'nama_kategori_kuis' => $request->nama_kategori_kuis,
            'url' => $request->url,
        ];
        DB::table('kategori_kuis')->insert($data);

        return Redirect::back()->with(['success' => 'Data Berhasil Di Simpan!']);
    }

    public function edit($id)
    {
        // $id = Crypt::decrypt($id);
        // dd($data);
        $text = "Data tidak ditemukan";
        if($data = DB::select("SELECT * FROM kategori_kuis WHERE kategori_kuis_id='$id'")){

            $text = '<div class="row">'.
            '<div class="col mb-3">'.
                '<label for="exampleFormControlReadOnlyInput1" class="form-label">Nama Kategori Kuis</label>'.
                '<input type="text" class="form-control" value="'.$data[0]->nama_kategori_kuis.'" id="nama_kategori_kuis" name="nama_kategori_kuis" required placeholder="Ketik Disini">'.
            '</div>'.
            '</div>'.
            '<div class="row">'.
            '<div class="col mb-3">'.
                '<label for="exampleFormControlReadOnlyInput1" class="form-label">Akronim</label>'.
                '<input type="text" class="form-control" value="'.$data[0]->url.'" id="url" name="url" required placeholder="Ketik Disini">'.
            '</div>'.
            '</div>'.
                '<input type="hidden" class="form-control" id="kategori_kuis_id" name="kategori_kuis_id" value="'.Crypt::encrypt($data[0]->kategori_kuis_id) .'" required>';
        }
        return $text;
        // return view('admin.kategori_kuis.edit');
    }

    public function update(Request $request){
        $request->validate([
            'nama_kategori_kuis' => ['required', 'string'],
            'url' => ['required', 'string'],
        ]);
        $data = [
            'updated_by' => Auth::user()->id,
            'updated_at' => now(),
            'nama_kategori_kuis' => $request->nama_kategori_kuis,
            'url' => $request->url,
        ];
        $kategori_kuis_id = Crypt::decrypt($request->kategori_kuis_id);
        $status_pendidikan = "Aktif";
        DB::table('kategori_kuis')->where(['kategori_kuis_id' => $kategori_kuis_id])->update($data);
        return Redirect::back()->with(['success' => 'Data Berhasil Di Ubah!']);
    }
    public function delete($id){
        $id = Crypt::decrypt($id);
        $data = [
            'deleted_by' => Auth::user()->id,
            'deleted_at' => now(),
        ];
        DB::table('kategori_kuis')->where(['kategori_kuis_id' => $id])->update($data);
        return Redirect::back()->with(['success' => 'Data Berhasil Di Hapus!']);
    }
    
}
