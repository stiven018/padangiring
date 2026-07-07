<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AhliWarisDetail extends Model
{
    protected $fillable = [

        'surat_id',

        'nama',

        'nik',

        'tanggal_lahir',

        'hubungan'

    ];

    public function surat()
    {
        return $this->belongsTo(Surat::class);
    }
}