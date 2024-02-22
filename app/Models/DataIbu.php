<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'provinsi_id',
        'kota_id',
        'kecamatan_id',
        'desa_id',
        'posyandu_id',
    ];
}
