<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NomorSuratSetting extends Model
{
    protected $fillable = [
        'nomor_terakhir',
        'kode_surat',
        'kode_kelurahan',
    ];
}