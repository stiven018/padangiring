<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | TAMPILKAN DATA BERITA ADMIN
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        $berita = Berita::latest()->get();

        return view(
            'admin.berita.index',
            compact('berita')
        );

    }

    /*
    |--------------------------------------------------------------------------
    | FORM TAMBAH BERITA
    |--------------------------------------------------------------------------
    */

    public function create()
    {

        return view('admin.berita.create');

    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN BERITA
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {

        $namaGambar = null;

        if($request->hasFile('gambar')){

            $gambar = $request->file('gambar');

            $namaGambar =
                time().'.'.$gambar->getClientOriginalExtension();

            $gambar->move(
                public_path('uploads'),
                $namaGambar
            );

        }

        Berita::create([

            'judul'  => $request->judul,

            'isi'    => $request->isi,

            'gambar' => $namaGambar

        ]);

        return redirect('/admin/berita');

    }

    /*
    |--------------------------------------------------------------------------
    | FORM EDIT BERITA
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {

        $berita = Berita::findOrFail($id);

        return view(
            'admin.berita.edit',
            compact('berita')
        );

    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE BERITA
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {

        $berita = Berita::findOrFail($id);

        /*
        | UPDATE GAMBAR
        */

        if($request->hasFile('gambar')){

            $gambar = $request->file('gambar');

            $namaGambar =
                time().'.'.$gambar->getClientOriginalExtension();

            $gambar->move(
                public_path('uploads'),
                $namaGambar
            );

            $berita->gambar = $namaGambar;

        }

        /*
        | UPDATE DATA
        */

        $berita->judul = $request->judul;

        $berita->isi = $request->isi;

        $berita->save();

        return redirect('/admin/berita');

    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS BERITA
    |--------------------------------------------------------------------------
    */

    public function delete($id)
    {

        $berita = Berita::findOrFail($id);

        $berita->delete();

        return redirect('/admin/berita');

    }

    /*
    |--------------------------------------------------------------------------
    | HALAMAN BERITA PUBLIK
    |--------------------------------------------------------------------------
    */

    public function publik()
    {

        $berita = Berita::latest()->get();

        return view(
            'berita',
            compact('berita')
        );

    }

}