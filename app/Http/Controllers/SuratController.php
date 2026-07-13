<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Illuminate\Support\Str;
use App\Models\Pesan;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\TrackingHistory;
use App\Models\AhliWarisDetail;
use App\Models\NomorSuratSetting;


class SuratController extends Controller
{

    public function layanan()
    {
        return view('layanan');
    }
    public function tracking()
    {
        return view('tracking');
    }

        public function store(Request $request)
    {


        $tracking = strtoupper(Str::random(8));

        $surat = new Surat();

        $surat->kode_tracking = $tracking;
        $surat->nama = $request->nama;
        $surat->nik = $request->nik;
        $surat->tempat_lahir = $request->tempat_lahir;
        $surat->tanggal_lahir = $request->tanggal_lahir;
        $surat->jenis_kelamin = $request->jenis_kelamin;
        $surat->agama = $request->agama;
        $surat->pekerjaan = $request->pekerjaan;
        $surat->alamat = $request->alamat;

        $surat->nama_orangtua = $request->nama_orangtua;
        $surat->tempat_lahir_orangtua = $request->tempat_lahir_orangtua;
        $surat->tanggal_lahir_orangtua = $request->tanggal_lahir_orangtua;
        $surat->jenis_kelamin_orangtua = $request->jenis_kelamin_orangtua;
        $surat->alamat_orangtua = $request->alamat_orangtua;
        $surat->pekerjaan_orangtua = $request->pekerjaan_orangtua;
        $surat->no_hp_orangtua = $request->no_hp_orangtua;
        $surat->penghasilan_bulanan = $request->penghasilan_bulanan;
        $surat->jumlah_tanggungan = $request->jumlah_tanggungan;
        $surat->nama_anak = $request->nama_anak;
        $surat->tempat_lahir_anak = $request->tempat_lahir_anak;
        $surat->tanggal_lahir_anak = $request->tanggal_lahir_anak;
        $surat->jenis_kelamin_anak = $request->jenis_kelamin_anak;
        $surat->universitas = $request->universitas;
        $surat->fakultas_jurusan = $request->fakultas_jurusan;
        $surat->nim = $request->nim;
        $surat->alamat_anak = $request->alamat_anak;

        $surat->no_hp = $request->no_hp;
        $surat->jenis_upacara = $request->jenis_upacara;
        $surat->hari_pelaksanaan = $request->hari_pelaksanaan;
        $surat->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $surat->tempat_pelaksanaan = $request->tempat_pelaksanaan;
        $surat->agama_upacara = $request->agama_upacara;

        $surat->tujuan_perjalanan = $request->tujuan_perjalanan;
        $surat->jabatan_penandatangan = $request->jabatan_penandatangan;


        $surat->jenis_surat = $request->jenis_surat;
        $surat->jenis_usaha = $request->jenis_usaha;
        $surat->alamat_usaha = $request->alamat_usaha;

        $surat->keperluan = $request->keperluan;

        $surat->keperluan_kelakuan = $request->keperluan_kelakuan;
        
        $surat->nama_meninggal = $request->nama_meninggal;
        $surat->jk_meninggal = $request->jk_meninggal;
        $surat->tempat_lahir_meninggal = $request->tempat_lahir_meninggal;
        $surat->tanggal_lahir_meninggal = $request->tanggal_lahir_meninggal;
        $surat->alamat_meninggal = $request->alamat_meninggal;

        $surat->nama_pewaris = $request->nama_pewaris;
        $surat->status_pewaris = $request->status_pewaris;

        $surat->tanggal_kematian = $request->tanggal_kematian;
        $surat->penyebab_kematian = $request->penyebab_kematian;
        $surat->tempat_kematian = $request->tempat_kematian;

        $surat->nama_pelapor = $request->nama_pelapor;
        $surat->jk_pelapor = $request->jk_pelapor;
        $surat->ttl_pelapor = $request->ttl_pelapor;
        $surat->alamat_pelapor = $request->alamat_pelapor;
        $surat->hubungan_keluarga = $request->hubungan_keluarga;
        $surat->saksi1 = $request->saksi1;
        $surat->saksi2 = $request->saksi2;

        $surat->status = 'Menunggu';


        $surat->save();
       
        if($request->jenis_surat == 'Surat Ahli Waris'){

    if($request->ahli_nama){

        foreach($request->ahli_nama as $i => $nama){

            AhliWarisDetail::create([

                'surat_id' => $surat->id,

                'nama' => $nama,

                'nik' => $request->ahli_nik[$i],

                'tanggal_lahir' => $request->ahli_tanggal_lahir[$i],

                'hubungan' => $request->ahli_hubungan[$i]

            ]);

        }

    }

}
        
        TrackingHistory::create([
        'surat_id' => $surat->id,
        'status' => 'Diajukan',
        'keterangan' => 'Surat berhasil diajukan'
         ]);

        return back()->with(
            'success',
            $tracking
        );

    }

    public function cekTracking(Request $request)
{
    $surat = Surat::where(
        'kode_tracking',
        trim($request->kode_tracking)
    )
    ->with('histories')
    ->first();

    if (!$surat) {

        return redirect('/tracking')
            ->with('error', 'Kode tracking yang Anda masukkan tidak ditemukan.');

    }

    return view('tracking', compact('surat'));
}

    /* =========================
       ADMIN SURAT
    ========================== */

  public function adminSurat()
{

    $pesans = Pesan::latest()->get();

    return view(
        'admin.surat.index',
        compact('pesans')
    );

}

    /* EDIT */

    public function edit($id)
    {

        $surat = Surat::findOrFail($id);

        return view(
            'admin.surat.edit',
            compact('surat')
        );

    }

    public function update(Request $request, $id)
    {

        $surat = Surat::findOrFail($id);

        $surat->update([

            'status' => $request->status

        ]);

        return redirect('/admin/surat');

    }

    /* HAPUS */

    public function delete($id)
    {

        $surat = Surat::findOrFail($id);

        $surat->delete();

        return redirect('/admin/surat');

    }

    /* PROGRESS */

    public function progress($id)
    {

        $surat = Surat::findOrFail($id);

        return view(
            'admin.surat.progress',
            compact('surat')
        );

    }

    public function progressUpdate(Request $request, $id)
    {
        $surat = Surat::findOrFail($id);

        $surat->update([
            'status' => $request->status
        ]);

        TrackingHistory::create([

            'surat_id' => $surat->id,

            'status' => $request->status,

            'keterangan' => 'Status surat diubah menjadi '.$request->status

        ]);

        return redirect('/admin/tracking')
            ->with('success', 'Progress surat berhasil diperbarui');
    }

       public function adminTracking(Request $request)
{
    $keyword = $request->keyword;

    $surats = Surat::when($keyword, function ($query) use ($keyword) {

        $query->where('kode_tracking', 'like', "%{$keyword}%")
              ->orWhere('jenis_surat', 'like', "%{$keyword}%")
              ->orWhere('nama', 'like', "%{$keyword}%");

    })->latest()->get();

    $setting = NomorSuratSetting::first();

    if (!$setting) {

        $setting = NomorSuratSetting::create([
            'nomor_terakhir' => 0,
            'kode_surat' => '470',
            'kode_kelurahan' => 'KLPD'
        ]);

    }

    return view(
        'admin.tracking.index',
        compact(
            'surats',
            'keyword',
            'setting'
        )
    );
}

        public function deleteTracking($id)
    {
        $surat = Surat::findOrFail($id);

        $surat->delete();

        return redirect('/admin/tracking')
            ->with('success', 'Data surat berhasil dihapus');
    }

        public function cetakPdf($id)
        
            {
                $surat = Surat::findOrFail($id);

    

                switch ($surat->jenis_surat) {

                    case 'Surat Keterangan Usaha':
                        $view = 'admin.surat.usaha';
                        break;

                    case 'Surat Domisili':
                        $view = 'admin.surat.domisili';
                        break;

                    case 'Surat Belum Menikah':
                        $view = 'admin.surat.belum-menikah';
                        break;

                    case 'Surat Tidak Mampu':
                        $view = 'admin.surat.tidak-mampu';
                        break;

                    case 'Surat Kematian':
                        $view = 'admin.surat.kematian';
                        break;

                    case 'Surat Ahli Waris':
                        $view = 'admin.surat.ahli-waris';
                        break;

                    case 'Surat Izin Keramaian':
                        $view = 'admin.surat.izin-keramaian';
                        break;

                    case 'Surat Izin Perjalanan':
                        $view = 'admin.surat.izin-perjalanan';
                        break;

                    case 'Surat Penghasilan Orang Tua':
                        $view = 'admin.surat.penghasilan-orang-tua';
                        break;

                    case 'Surat Kelakuan Baik':
                        $view = 'admin.surat.kelakuan-baik';
                        break;

                    default:
                        $view = 'admin.surat.usaha';
                        break;
                }

                // Jika surat belum memiliki nomor surat
if (!$surat->nomor_surat) {

    $setting = NomorSuratSetting::first();

    $nomorBaru = $setting->nomor_terakhir + 1;

    $bulanRomawi = [
        1=>'I',
        2=>'II',
        3=>'III',
        4=>'IV',
        5=>'V',
        6=>'VI',
        7=>'VII',
        8=>'VIII',
        9=>'IX',
        10=>'X',
        11=>'XI',
        12=>'XII'
    ];

    $surat->nomor_surat =
        $setting->kode_surat.'/'
        .str_pad($nomorBaru,3,'0',STR_PAD_LEFT).'/'
        .$setting->kode_kelurahan.'/'
        .$bulanRomawi[date('n')].'/'
        .date('Y');

    $surat->save();

    $setting->nomor_terakhir = $nomorBaru;

    $setting->save();
}

$pdf = Pdf::loadView($view, compact('surat'));

return $pdf->stream('Surat-'.$surat->kode_tracking.'.pdf');
            }

/* =========================
   PENGATURAN NOMOR SURAT
========================= */

public function updateNomorSurat(Request $request)
{
    $request->validate([
        'nomor_terakhir' => 'required|integer|min:0',
        'kode_surat' => 'required',
        'kode_kelurahan' => 'required',
    ]);

    $setting = NomorSuratSetting::first();

    if (!$setting) {

        $setting = new NomorSuratSetting();

    }

    $setting->nomor_terakhir = $request->nomor_terakhir;
    $setting->kode_surat = $request->kode_surat;
    $setting->kode_kelurahan = $request->kode_kelurahan;

    $setting->save();

    return redirect('/admin/tracking')
        ->with('success', 'Nomor surat berhasil diperbarui.');
}


public function resetNomorSurat()
{
    $setting = NomorSuratSetting::first();

    if ($setting) {

        $setting->nomor_terakhir = 0;

        $setting->save();

    }

    return redirect('/admin/tracking')
        ->with('success', 'Nomor surat berhasil direset.');
}

}