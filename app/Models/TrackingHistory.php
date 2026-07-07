<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingHistory extends Model
{
    protected $fillable = [
        'surat_id',
        'status',
        'keterangan'
    ];

    public function surat()
    {
        return $this->belongsTo(Surat::class);
    }
}