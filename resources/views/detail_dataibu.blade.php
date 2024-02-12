@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Detail Data Ibu Hamil
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $dataibu->id }}</p>
                <p><strong>Nama:</strong> {{ $dataibu->nama }}</p>
                <p><strong>NIK:</strong> {{ $dataibu->nik }}</p>
                <p><strong>Alamat:</strong> {{ $dataibu->alamat }}</p>
                <p><strong>Provinsi_id:</strong> {{ $dataibu->provinsi_id }}</p>
                <p><strong>Kota_id:</strong> {{ $dataibu->kota_id }}</p>
                <p><strong>Kecamatan_id:</strong> {{ $dataibu->kecamatan_id }}</p>
                <p><strong>Desa_id:</strong> {{ $dataibu->desa_id }}</p>
                <p><strong>Posyandu_id:</strong> {{ $dataibu->posyandu_id }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('edit_data_ibu', $dataibu->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('delete_data_ibu', $dataibu->id) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
@endsection
