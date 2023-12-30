@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Data</h1>
    <hr />
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{ $product->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" placeholder="nim" value="{{ $product->nim }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="jurusan" value="{{ $product->jurusan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi (Isi jalur masuk. ex: SNMPTN)'</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" >{{ $product->deskripsi }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection