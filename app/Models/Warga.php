<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
   protected $fillable = [

    'nik',
    'nama',
    'jenis_kelamin',
    'tempat_lahir',
    'tanggal_lahir',
    'agama',
    'pekerjaan',
    'alamat',

    'no_kk',
    'pendidikan',
    'status_hubungan',
    'nama_ayah',
    'nama_ibu',
    'rt',
    'rw',
    'dusun'

];
}