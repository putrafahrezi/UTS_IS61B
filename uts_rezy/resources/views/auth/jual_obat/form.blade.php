@extends('layouts.master')
@section('title','Tambah Data obat')
@section('judul','Tambah Data obat')
@section('bc')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/jual_obat/store/">
                @csrf
                <div class="form-group">
                    <label for="kd_obt">Kode obat:</label>
                    <input type="text" class="form-control" id="kd_obt" name="kd_obt">
                </div>
                <div class="form-group">
                    <label for="nm_obt">nama obat:</label>
                    <input type="text" class="form-control" id="nm_obt" name="nm_obt">
                </div>
                <div class="form-group">
                    <label for="jum_sesi">Jumlah obat:</label>
                    <textarea class="form-control" id="jml_obt" name="jml_obt" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
