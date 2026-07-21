<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function admin()
    {
        $galeris = Galeri::latest()->get();

        return view('admin.Galeri.index', compact('galeris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image'
        ]);

        $foto = time().'.'.$request->foto->extension();

        $request->foto->move(public_path('galeri'), $foto);

        Galeri::create([
            'judul' => $request->judul,
            'foto' => $foto
        ]);

        return back()->with('success','Foto berhasil ditambahkan');
    }

    public function delete($id)
    {
        $galeri = Galeri::findOrFail($id);

        if(file_exists(public_path('galeri/'.$galeri->foto))){
            unlink(public_path('galeri/'.$galeri->foto));
        }

        $galeri->delete();

        return back()->with('success','Foto berhasil dihapus');
    }

    public function publik()
    {
        $galeris = Galeri::latest()->get();

        return view('galeri', compact('galeris'));
    }
}
