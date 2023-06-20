<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SurveyEksekutifController extends Controller
{
    public function form()
    {
        $list_pertanyaan = DB::table('pertanyaan')->where('urutan', 1)->get();
        return view('tulip/index', compact('list_pertanyaan'));
    }
    public function ranap()
    {
        $list_pertanyaan = DB::table('pertanyaan')->where('urutan', 2)->get();
        return view('rajal/index', compact('list_pertanyaan'));
    }
    public function rajal()
    {
        $list_pertanyaan = DB::table('pertanyaan')->where('urutan', 3)->get();
        return view('rajal/index', compact('list_pertanyaan'));
    }

    public function action(Request $request)
    {
        $user_id = DB::table('jawaban')->max('user_id');
        $user_id += 1;
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
            'pertanyaan_id' => 0,
            'jawaban' => $request->saran,
        ];
        DB::table('jawaban')->insert($data);
        return Redirect::back()->with(['success' => 'Data Berhasil Di Perbarui!']);
    }
}
