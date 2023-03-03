<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function tulip()
    {
        return view('report/tulip');
    }

    public function tulipResult(Request $request)
    {
        $tgl_awal = $request->tgl_awal;
        $tgl_akhir = $request->tgl_akhir;

        $list_laporan = DB::table('jawaban')
            ->whereRaw('CAST(tgl_jam AS DATE) BETWEEN ? AND ?', [$tgl_awal, $tgl_akhir])
            ->get();

        return view('report/tulip_result', compact('list_laporan', 'tgl_awal', 'tgl_akhir'));
    }
}
