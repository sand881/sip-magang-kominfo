<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataIbu;

class DataIbuController extends Controller
{
    public function tambahDataIbu(Request $request)
    {
        $data = new DataIbu();
        $data->nama = $request->input('nama');
        $data->nik = $request->input('nik');
        $data->alamat = $request->input('alamat');
        $data->provinsi_id = $request->input('provinsi_id');
        $data->kota_id = $request->input('kota_id');
        $data->kecamatan_id = $request->input('kecamatan_id');
        $data->desa_id = $request->input('desa_id');
        $data->posyandu_id = $request->input('posyandu_id');
        $data->save();

        return redirect()->route('halaman_tertentu'); // Redirect ke halaman tertentu setelah data berhasil ditambahkan
    }
}
