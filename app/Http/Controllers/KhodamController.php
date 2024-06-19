<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khodam;

class KhodamController extends Controller
{
    public function cekKhodam(Request $request)
    {
        $nama_user = $request->input('nama_user');
        $khodam = Khodam::inRandomOrder()->first();

        // Cek apakah ada data khodam
        if ($khodam) {
            $nama_khodam = $khodam->nama_khodam;
        } else {
            $nama_khodam = "Khodam tidak ditemukan.";
        }

        return view('cek-khodam', compact('nama_user', 'nama_khodam'));
    }
}
