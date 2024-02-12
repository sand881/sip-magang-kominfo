<!-- resources/views/pengukuran/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Form Pengukuran Ibu Hamil</h2>
        <form method="POST" action="{{ route('pengukuran.store') }}">
            @csrf
            <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan (cm):</label>
                <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan">
            </div>
            <div class="form-group">
                <label for="berat_badan">Berat Badan (kg):</label>
                <input type="number" class="form-control" id="berat_badan" name="berat_badan">
            </div>
            <div class="form-group">
                <label for="lila">LILA (cm):</label>
                <input type="number" class="form-control" id="lila" name="lila">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
