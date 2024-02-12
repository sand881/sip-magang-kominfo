@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Detail Pengukuran Ibu Hamil
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $pengukuran->id }}</p>
                <p><strong>Nama:</strong> {{ $pengukuran->nama }}</p>
                <p><strong>Umur:</strong> {{ $pengukuran->umur }}</p>
                <p><strong>Usia Kandungan:</strong> {{ $pengukuran->usia_kandungan }}</p>
                <p><strong>Tinggi Badan:</strong> {{ $pengukuran->tinggi_badan }}</p>
                <p><strong>Berat Badan:</strong> {{ $pengukuran->berat_badan }}</p>
                <p><strong>LILA:</strong> {{ $pengukuran->lila }}</p>
                <p><strong>Status Gizi:</strong> {{ $pengukuran->status_gizi }}</p>
                <p><strong>Catatan:</strong> {{ $pengukuran->catatan }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('edit_pengukuran', $pengukuran->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('delete_pengukuran', $pengukuran->id) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
@endsection
