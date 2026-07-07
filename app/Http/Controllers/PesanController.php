<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{

    /* =========================
       SIMPAN PESAN DARI KONTAK
    ========================== */

    public function store(Request $request)
    {

        Pesan::create([

            'nama'  => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan

        ]);

        return back()->with(
            'success',
            'Pesan berhasil dikirim'
        );

    }

    /* =========================
       ADMIN LIHAT PESAN
    ========================== */

    public function index()
    {

        $pesans = Pesan::latest()->get();

        return view(
    'admin.pesan.index',
    compact('pesans')
);

    }

    /* =========================
       HAPUS PESAN
    ========================== */

    public function delete($id)
    {

        $pesan = Pesan::findOrFail($id);

        $pesan->delete();

        return redirect('/admin/pesan')
       ->with('success', 'Pesan berhasil dihapus.');

    }

}