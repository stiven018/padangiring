<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

use App\Models\Berita;
use App\Models\Surat;
use App\Models\Warga;
use App\Models\Visitor;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\WargaController;
// use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $totalSurat = Surat::count();

    $suratSelesai = Surat::where('status', 'Selesai')->count();

    $ip = request()->ip();

    $hariIni = now()->toDateString();

    $cek = Visitor::where('ip_address', $ip)
        ->where('visit_date', $hariIni)
        ->first();

    if (!$cek) {

        Visitor::create([
            'ip_address' => $ip,
            'visit_date' => $hariIni
        ]);

    }

    $totalPengunjung = Visitor::count();

    $pengunjungHariIni = Visitor::where(
        'visit_date',
        $hariIni
    )->count();

    $totalWarga = Warga::count();

    $totalKK = Warga::distinct('no_kk')
        ->count('no_kk');

    $lakiLaki = Warga::where(
        'jenis_kelamin',
        'Laki-laki'
    )->count();

    $perempuan = Warga::where(
        'jenis_kelamin',
        'Perempuan'
    )->count();


    // ===============================
// Berita Terbaru (maksimal 6)
// ===============================

$beritas = Berita::latest()
    ->take(6)
    ->get();

// ===============================
// Statistik Surat
// ===============================

    return view('home', compact(
    'totalWarga',
    'totalKK',
    'lakiLaki',
    'perempuan',
    'totalPengunjung',
    'pengunjungHariIni',
    'totalSurat',
    'suratSelesai',
    'beritas',
));

});

Route::get('/home', function () {

    $ip = request()->ip();

    $hariIni = now()->toDateString();

    $cek = Visitor::where('ip_address', $ip)
        ->where('visit_date', $hariIni)
        ->first();

    if (!$cek) {

        Visitor::create([
            'ip_address' => $ip,
            'visit_date' => $hariIni
        ]);

    }

    $totalPengunjung = Visitor::count();

    $pengunjungHariIni = Visitor::where(
        'visit_date',
        $hariIni
    )->count();

    $totalWarga = Warga::count();

    $totalKK = Warga::distinct('no_kk')->count('no_kk');

    $lakiLaki = Warga::where(
        'jenis_kelamin',
        'Laki-laki'
    )->count();

    $perempuan = Warga::where(
        'jenis_kelamin',
        'Perempuan'
    )->count();

    $totalSurat = Surat::count();

    $suratSelesai = Surat::where(
        'status',
        'Selesai'
    )->count();

    $beritas = Berita::latest()
    ->take(6)
    ->get();

    return view('home', compact(
        'totalWarga',
        'totalKK',
        'lakiLaki',
        'perempuan',
        'totalPengunjung',
        'pengunjungHariIni',
        'totalSurat',
        'suratSelesai',
        'beritas',
    ));

});

Route::get('/beranda', function () {
    return view('home');
});

Route::get('/profil', function () {

    $totalWarga = Warga::count();

    $totalSurat = Surat::count();

    $hariIni = now()->toDateString();

    $pengunjungHariIni = Visitor::where(
        'visit_date',
        $hariIni
    )->count();

    return view('profil', compact(
        'totalWarga',
        'totalSurat',
        'pengunjungHariIni'
    ));

});

Route::get('/kontak', function () {
    return view('kontak');
});


Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'proses']);

Route::get('/logout', [LoginController::class, 'logout']);
/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

Route::get('/dashboard', function () {

    $totalBerita = Berita::count();

    $suratDiproses = Surat::where(
        'status',
        'Diproses'
    )->count();

    $totalTracking = Surat::count();

    $totalWarga = Warga::count();

    $lakiLaki = Warga::where(
        'jenis_kelamin',
        'Laki-laki'
    )->count();

    $perempuan = Warga::where(
        'jenis_kelamin',
        'Perempuan'
    )->count();

    $bulan = [];
    $jumlahSurat = [];

    for ($i = 5; $i >= 0; $i--) {

        $tanggal = Carbon::now()->subMonths($i);

        $bulan[] = $tanggal->translatedFormat('M Y');

        $jumlahSurat[] = Surat::whereYear(
            'created_at',
            $tanggal->year
        )->whereMonth(
            'created_at',
            $tanggal->month
        )->count();
    }

    $agamaLabels = Warga::select('agama')
        ->groupBy('agama')
        ->pluck('agama');

    $agamaData = Warga::selectRaw('count(*) as total, agama')
        ->groupBy('agama')
        ->pluck('total');

    return view('dashboard', compact(
        'totalBerita',
        'suratDiproses',
        'totalTracking',
        'totalWarga',
        'bulan',
        'jumlahSurat',
        'lakiLaki',
        'perempuan',
        'agamaLabels',
        'agamaData',
    ));

});

/*
|--------------------------------------------------------------------------
| BERITA
|--------------------------------------------------------------------------
*/

Route::get('/berita', [BeritaController::class, 'publik']);

Route::get('/admin/berita', [BeritaController::class, 'index']);

Route::get('/admin/berita/create', [BeritaController::class, 'create']);

Route::post('/admin/berita/store', [BeritaController::class, 'store']);

Route::get('/admin/berita/edit/{id}', [BeritaController::class, 'edit']);

Route::post('/admin/berita/update/{id}', [BeritaController::class, 'update']);

Route::get('/admin/berita/delete/{id}', [BeritaController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| LAYANAN SURAT
|--------------------------------------------------------------------------
*/

Route::get('/layanan', [SuratController::class, 'layanan']);

Route::post('/layanan', [SuratController::class, 'store']);

Route::get('/tracking', [SuratController::class, 'tracking']);

Route::post('/tracking', [SuratController::class, 'cekTracking']);

/*
|--------------------------------------------------------------------------
| SURAT ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/surat', [SuratController::class, 'adminSurat']);

Route::get('/admin/surat/edit/{id}', [SuratController::class, 'edit']);

Route::post('/admin/surat/update/{id}', [SuratController::class, 'update']);

Route::get('/admin/surat/delete/{id}', [SuratController::class, 'delete']);

Route::get('/admin/surat/progress/{id}', [SuratController::class, 'progress']);

Route::post('/admin/surat/progress-update/{id}', [SuratController::class, 'progressUpdate']);

Route::get('/admin/surat/cetak/{id}', [SuratController::class, 'cetakPdf']);

/*
|--------------------------------------------------------------------------
| TRACKING ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/tracking', [SuratController::class, 'adminTracking']);

Route::get('/admin/tracking/delete/{id}', [SuratController::class, 'deleteTracking']);

Route::get('/tes-tracking', function () {
    return 'Tracking OK';
});

/*
|--------------------------------------------------------------------------
| PESAN MASYARAKAT
|--------------------------------------------------------------------------
*/

Route::post('/kontak/kirim', [PesanController::class, 'store']);

Route::post('/kirim-pesan', [PesanController::class, 'store']);

Route::get('/admin/pesan', [PesanController::class, 'index']);

Route::get('/admin/pesan/delete/{id}', [PesanController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| DATA WARGA
|--------------------------------------------------------------------------
*/

Route::get('/admin/warga', [WargaController::class, 'index']);

Route::post('/admin/warga/store', [WargaController::class, 'store']);

Route::post('/admin/warga/import', [WargaController::class, 'import']);

Route::get('/admin/warga/edit/{id}',[WargaController::class,'edit']);

Route::post('/admin/warga/update/{id}',[WargaController::class,'update']);

Route::get('/admin/warga/delete/{id}', [WargaController::class, 'delete']);

Route::get('/admin/warga/detail/{id}',[WargaController::class,'detail']);

Route::get('/admin/warga/pdf',[WargaController::class,'pdf']);

Route::delete('/admin/warga/hapus-semua',[WargaController::class, 'hapusSemua']);

/*
|--------------------------------------------------------------------------
| GALERI
|--------------------------------------------------------------------------
*/

Route::get('/galeri', [GaleriController::class, 'publik']);

Route::get('/admin/galeri', [GaleriController::class, 'admin']);

Route::post('/admin/galeri/store', [GaleriController::class, 'store']);

Route::get('/admin/galeri/delete/{id}', [GaleriController::class, 'delete']);

/*
|--------------------------------------------------------------------------
| LAINNYA
|--------------------------------------------------------------------------
*/

Route::get('/admin/pengaduan', function () {
    return view('admin.pengaduan');
});

});