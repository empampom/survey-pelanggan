<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SurveyEksekutifController extends Controller
{
    public function form()
    {
        $urutan = 1;
        $list_pertanyaan = DB::table('pertanyaan')->where('urutan', 1)->get();
        return view('tulip/index', compact('list_pertanyaan','urutan'));
    }
    public function kuis($jenis,$user_id)
    {
        $kategori_kuis = DB::table('kategori_kuis')->where('url', $jenis)->first();
        if(empty($kategori_kuis)){
            return view('404');
        }
        $list_pertanyaan = DB::table('pertanyaan')->where('urutan', 2)->get();
        return view('form/index', compact('list_pertanyaan','user_id','urutan'));
    }
    public function ranap($user_id)
    {
        $urutan = 2;
        $list_pertanyaan = DB::table('pertanyaan')->where('urutan', 2)->get();
        return view('form/index', compact('list_pertanyaan','user_id','urutan'));
    }
    public function rajal($user_id)
    {
        $urutan = 3;
        $list_pertanyaan = DB::table('pertanyaan')->where('urutan', 3)->get();
        return view('form/index', compact('list_pertanyaan','user_id','urutan'));
    }
    public function action(Request $request)
    {
        // $user_id = DB::table('jawaban')->max('user_id');
        // $user_id += 1;
        $user_id = $request->user_id;
        for ($i = 1; $i <= 25; $i++) {
            $jawaban_point = "jawaban" . $i;
            $pertanyaan = "pertanyaan" . $i;
            $data = [
                'user_id' => $user_id,
                'pertanyaan_id' => $request->$pertanyaan,
                'jawaban' => $request->$jawaban_point,
            ];
            DB::table('jawaban')->insert($data);
        }
        $data = [
            'user_id' => $user_id,
            'pertanyaan_id' => $request->saran_id,
            'jawaban' => $request->saran,
        ];
        DB::table('jawaban')->insert($data);
        return Redirect::back()->with(['success' => 'Data Berhasil Di Perbarui!']);
    }
}
