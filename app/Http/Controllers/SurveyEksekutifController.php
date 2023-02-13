<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyEksekutifController extends Controller
{
    public function form()
    {
        return view('tulip/index');
    }
}
