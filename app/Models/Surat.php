<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AhliWarisDetail;

class Surat extends Model
{

    protected $fillable = [

        'kode_tracking',

        'nama',

        'nik',

        'tempat_lahir',

        'tanggal_lahir',

        'jenis_kelamin',

        'agama',

        'pekerjaan',

        'alamat',

        'no_hp',

        'tujuan_perjalanan',

        'jabatan_penandatangan',

        'jenis_upacara',

        'hari_pelaksanaan',

        'tanggal_pelaksanaan',

        'tempat_pelaksanaan',

        'agama_upacara',

        'nama_pewaris',

        'status_pewaris',

        'jenis_surat',

        'jenis_usaha',

        'alamat_usaha',

        'tanggal_kematian',

        'penyebab_kematian',
        
        'tempat_kematian',

        'nama_pelapor',
        
        'jk_pelapor',
        
        'ttl_pelapor',
        
        'alamat_pelapor',
        
        'hubungan_keluarga',

        'nama_meninggal',
        
        'jk_meninggal',
        
        'tempat_lahir_meninggal',
        
        'tanggal_lahir_meninggal',
        
        'alamat_meninggal',

        'keperluan',

        'status',
       
        'saksi1',

        'saksi2',

        'nama_orangtua',

        'tempat_lahir_orangtua',

        'tanggal_lahir_orangtua',

        'jenis_kelamin_orangtua',

        'alamat_orangtua',

        'pekerjaan_orangtua',

        'no_hp_orangtua',

        'penghasilan_bulanan',

        'jumlah_tanggungan',

        'nama_anak',

        'tempat_lahir_anak',

        'tanggal_lahir_anak',

        'jenis_kelamin_anak',

        'universitas',

        'fakultas_jurusan',

        'nim',

        'alamat_anak',

        'keperluan_kelakuan',

    ];
        public function histories()
    {
        return $this->hasMany(
            TrackingHistory::class
        );
    }

    public function ahliWaris()
{
    return $this->hasMany(AhliWarisDetail::class);
}
}