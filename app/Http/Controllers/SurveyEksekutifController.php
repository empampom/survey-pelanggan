<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SurveyEksekutifController extends Controller
{
    public function form()
    {
        // dd('sini');
        $list_pertanyaan = DB::table('pertanyaan')->get();
        return view('tulip/index', compact('list_pertanyaan'));
    }

    public function action(Request $request){
        $user_id = DB::table('jawaban')->max('user_id');
        $user_id += 1;
        for ($i=1; $i <= 25; $i++) { 
            $jawaban_point = "jawaban".$i;
            $pertanyaan = "pertanyaan".$i;
            $data = [
                'user_id' => $user_id,
                'pertanyaan_id' => $request->$pertanyaan,
                'jawaban' => $request->$jawaban_point,
            ];
            DB::table('jawaban')->insert($data);
        }
        return Redirect::back()->with(['success' => 'Data Berhasil Di Perbarui!']);
    }
}
