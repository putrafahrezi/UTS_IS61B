@extends('layouts.master')
@section('title','Tambah Data obat')
@section('judul','Tambah Data obat')
@section('nama','Apotek Shafiqa Farma')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/jual/store/">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Obat:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Descrition:</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="price">Harga:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <textarea class="form-control" id="stock" name="stock" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
