<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungLuasController extends Controller
{
    public function hitung(Request $request)
    {
        $alas = $request->alas;
        $tinggi = $request->tinggi;

        $hitung = $alas * $tinggi;

        return view('quiz' , ['hitung' => $hitung]);
    }
}