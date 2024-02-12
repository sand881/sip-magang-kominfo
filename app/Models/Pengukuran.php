<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengukuran extends Model
{
    use HasFactory;

    protected $table = 'pengukuran';

    protected $fillable = [
        'nama',
        'umur',
        'usia_kandungan',
        'tinggi_badan',
        'berat_badan',
        'lila',
        'status_gizi',
        'catatan',
    ];

    public function pengukuran()
    {
        return $this->belongsTo(Pengukuran::class, 'pengukuran');
    }
}
