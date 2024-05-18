@extends('layouts.master')

@section('title', 'Edit obat')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Penjualan Obat

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/jual/{{$obt->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" readonly value="{{$obt->name}}" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" readonly value="{{$obt->description}}" class="form-control" name="description">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" readonly value="{{$obt->price}}" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="text" readonly value="{{$obt->stock}}" class="form-control" name="stock">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
