<!-- resources/views/data_ibu/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Ibu Hamil</h2>
        <a href="{{ route('data-ibu.create') }}" class="btn btn-primary">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Provinsi_id</th>
                    <th>Kota_id</th>
                    <th>Kecamatan_id</th>
                    <th>Desa_id</th>
                    <th>Posyandu_id</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataibu as $dataibu)
                    <tr>
                        <td>{{ $dataibu->id }}</td>
                        <td>{{ $dataibu->nama }}</td>
                        <td>{{ $dataibu->nik }}</td>
                        <td>{{ $dataibu->alamat }}</td>
                        <td>{{ $dataibu->provinsi_id }}</td>
                        <td>{{ $dataibu->kota_id }}</td>
                        <td>{{ $dataibu->kecamatan_id }}</td>
                        <td>{{ $dataibu->desa_id }}</td>
                        <td>{{ $dataibu->posyandu_id }}</td>
                        <td>{{ $dataibu->aksi }}</td>
                        <td>
                            <a href="{{ route('data-ibu.edit', $dataibu->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('data-ibu.edit', $dataibu->id) }}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
