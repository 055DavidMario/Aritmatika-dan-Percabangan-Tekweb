<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index(request $request){
        $angka_1=0;
        $angka_2=0;
        $hasil=0;
        return view('kalkulator', compact('hasil'));
    }
    public function hitung(request $request){
        $angka_1 = $request->input('angka1');
        $angka_2 = $request->input('angka2');
        $operation = $request->input('operasi');
        switch ($operation){
        case'tambah':
        $hasil = $angka_1 + $angka_2;
        break;
        case'Pengurangan':
        $hasil = $angka_1 - $angka_2;
        break;
        case'Perkalian':
        $hasil = $angka_1 * $angka_2;
        break;
        case'Pembagian':
        $hasil = $angka_1 / $angka_2;
        break;
        case'Modulus':
            $hasil = $angka_1 % $angka_2;
            break;
        }
       
        return view('kalkulator', compact('angka_1','angka_2','operation','hasil'));
    }
}
