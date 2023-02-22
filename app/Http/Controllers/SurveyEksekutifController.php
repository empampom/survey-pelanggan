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
        return view('tulip/index');
    }

    public function action(Request $request){
        $data = $request->all();
        unset($data['_token']);
        $status = DB::table('survey_pelanggan')->insert($data);
        // dd($request);
        return Redirect::back()->with(['success' => 'Data Berhasil Di Perbarui!']);
    }
}
