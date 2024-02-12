@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Data Ibu Hamil
            </div>
            <div class="card-body">
                <form action="{{ route('update_data_ibu', $dataibu->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $dataibu->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="{{ $dataibu->nik }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dataibu->alamat }}">
                    </div>
                    <div class="form-group">
                        <label for="provinsi_id">Provinsi_id</label>
                        <input type="text" class="form-control" id="provinsi_id" name="provinsi_id" value="{{ $dataibu->provinsi_id }}">
                    </div>
                    <div class="form-group">
                        <label for="kota_id">Kota_id</label>
                        <input type="text" class="form-control" id="kota_id" name="kota_id" value="{{ $dataibu->kota_id }}">
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
        </div>
    </div>
@endsection
