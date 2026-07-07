<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Surat;

class ProfilController extends Controller
{
    public function index()
    {
        $totalWarga = class_exists(Penduduk::class) ? Penduduk::count() : 0;
        $totalSurat = class_exists(Surat::class) ? Surat::count() : 0;

        // Sementara
        $pengunjungHariIni = 0;

        return view('profil', compact(
            'totalWarga',
            'totalSurat',
            'pengunjungHariIni'
        ));
    }
}