<!-- resources/views/dataibu/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Form Data Ibu Hamil</h2>
        <form method="POST" action="{{ route('dataibu.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama">ID</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="provinsi_id">Provinsi_id</label>
                <input type="text" class="form-control" id="provinsi_id" name="provinsi_id">
            </div>
            <div class="form-group">
                <label for="kota_id">Kota_id</label>
                <input type="text" class="form-control" id="kota_id" name="kota_id">
            </div>
            <div class="form-group">
                <label for="kecamatan_id">Kecamatan_id</label>
                <input type="text" class="form-control" id="kecamatan_id" name="kecamatan_id" value="{{ $dataibu->kecamatan_id }}">
            </div>
            <div class="form-group">
                <label for="desa_id">Desa_id</label>
                <input type="text" class="form-control" id="desa_id" name="desa_id" value="{{ $dataibu->desa_id }}">
            </div>
            <div class="form-group">
                <label for="posyandu_id">Posyandu_id</label>
                <input type="text" class="form-control" id="posyandu_id" name="posyandu_id" value="{{ $dataibu->posyandu_id }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
