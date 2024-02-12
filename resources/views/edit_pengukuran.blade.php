@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pengukuran Ibu Hamil</h1>

        <form action="{{ route('pengukuran.update', $pengukuran->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="usia_kandungan">Usia Kandungan</label>
                <input type="number" class="form-control" id="usia_kandungan" name="usia_kandungan" value="{{ $pengukuran->usia_kandungan }}">
            </div>

            <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan</label>
                <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" value="{{ $pengukuran->tinggi_badan }}">
            </div>
            <div class="form-group">
                <label for="berat_badan">Berat Badan</label>
                <input type="number" class="form-control" id="berat_badan" name="berat_badan" value="{{ $pengukuran->berat_badan }}">
            </div>
            <div class="form-group">
                <label for="status_gizi">Status Gizi</label>
                <input type="text" class="form-control" id="status_gizi" name="status_gizi" value="{{ $pengukuran->status_gizi }}">
            </div>
            <div class="form-group">
                <label for="catatan">Catatan</label>
                <input type="text" class="form-control" id="catatan" name="catatan" value="{{ $pengukuran->catatan }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
