<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PengukuranModel;
use Illuminate\Http\Request;

class PengukuranController extends Controller
{
    public function inputPengukuran(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'usia_kandungan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'lila' => 'required|numeric',
            'status_gizi' => 'required',
            'catatan' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data pengukuran ke dalam database
        $pengukuran = new PengukuranModel();
        $pengukuran->nama = $request->nama;
        $pengukuran->umur = $request->umur;
        $pengukuran->usia_kandungan = $request->usia_kandungan;
        $pengukuran->tinggi_badan = $request->tinggi_badan;
        $pengukuran->berat_badan = $request->berat_badan;
        $pengukuran->lila = $request->lila;
        // tambahkan atribut lainnya sesuai kebutuhan
        $pengukuran->save();

        // Redirect atau berikan respon sesuai kebutuhan
        return redirect()->back()->with('success', 'Data pengukuran berhasil disimpan.');
    }
}
