<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Imports\WargaImport;
use Maatwebsite\Excel\Facades\Excel;


class WargaController extends Controller
{

        public function index(Request $request)
{
    $keyword = $request->keyword;

    $wargas = Warga::latest();

    if ($keyword) {

        $wargas->where(function ($query) use ($keyword) {

            $query->where(
                'nama',
                'like',
                '%' . $keyword . '%'
            )
            ->orWhere(
                'nik',
                'like',
                '%' . $keyword . '%'
            );

        });

    }

    $wargas = $wargas->get();

    return view(
        'admin.warga.index',
        compact(
            'wargas',
            'keyword'
        )
    );
}




    public function store(Request $request)
    {
    
    $request->validate([

    'nik' => [
        'required',
        'numeric',
        'digits:16',
        'unique:wargas,nik'
    ],

    'no_kk' => [
        'required',
        'numeric',
        'digits:16'
    ],

    'nama' => 'required',

    'jenis_kelamin' => 'required',

], [

    'nik.required' => 'NIK wajib diisi.',
    'nik.numeric' => 'NIK hanya boleh angka.',
    'nik.digits' => 'NIK harus 16 digit.',
    'nik.unique' => 'NIK sudah terdaftar.',

    'no_kk.required' => 'Nomor KK wajib diisi.',
    'no_kk.numeric' => 'Nomor KK hanya boleh angka.',
    'no_kk.digits' => 'Nomor KK harus 16 digit.',

    'nama.required' => 'Nama wajib diisi.',
    'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.'

]);

        Warga::create([

            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,

            'no_kk' => $request->no_kk,
            'pendidikan' => $request->pendidikan,
            'status_hubungan' => $request->status_hubungan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'dusun' => $request->dusun,

        ]);

        return back()->with(
            'success',
            'Data warga berhasil ditambahkan.'
        );
    }

    public function edit($id)
    {
        $warga = Warga::findOrFail($id);

        return view(
            'admin.warga.edit',
            compact('warga')
        );
    }

    public function update(Request $request, $id)
    {
        $warga = Warga::findOrFail($id);

        $request->validate([

    'nik' => 'required|digits:16',

    'no_kk' => 'required|digits:16',

    'nama' => 'required'

], [

    'nik.digits' => 'NIK harus 16 digit.',

    'no_kk.digits' => 'Nomor KK harus 16 digit.'

]);

        $warga->update([
            

            'nik' => $request->nik,

            'nama' => $request->nama,

            'jenis_kelamin' => $request->jenis_kelamin,

            'tempat_lahir' => $request->tempat_lahir,

            'tanggal_lahir' => $request->tanggal_lahir,

            'agama' => $request->agama,

            'pekerjaan' => $request->pekerjaan,

            'alamat' => $request->alamat,

            'no_kk' => $request->no_kk,

            'pendidikan' => $request->pendidikan,

            'status_hubungan' => $request->status_hubungan,

            'nama_ayah' => $request->nama_ayah,

            'nama_ibu' => $request->nama_ibu,

            'rt' => $request->rt,

            'rw' => $request->rw,

            'dusun' => $request->dusun,

        ]);

        return redirect('/admin/warga')
            ->with(
                'success',
                'Data warga berhasil diperbarui'
            );
    }

        public function detail($id)
    {
        $warga = Warga::findOrFail($id);

        return view(
            'admin.warga.detail',
            compact('warga')
        );
    }

        public function pdf()
    {
        $wargas = Warga::all();

        $pdf = Pdf::loadView(
            'admin.warga.pdf',
            compact('wargas')
        );

        return $pdf->stream('data-warga.pdf');
    }

            public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        try {

            Excel::import(
                new WargaImport,
                $request->file('file')
            );

            return back()->with(
                'success',
                'Data warga berhasil diimport.'
            );

        } 
            catch (\Exception $e) {

            dd($e->getMessage());

        }
    }

    public function delete($id)
    {
        Warga::findOrFail($id)->delete();

        return back()
            ->with(
                'success',
                'Data warga berhasil dihapus'
            );
    }
    
    public function hapusSemua()
{
    \App\Models\Warga::truncate();

    return back()->with(
        'success',
        'Semua data warga berhasil dihapus.'
    );
}
}
