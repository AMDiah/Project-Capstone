@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Tambah Data</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="nama">
            </div>
            <div class="col">
                <input type="text" name="nim" class="form-control" placeholder="nim">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jurusan" class="form-control" placeholder="jurusan">
            </div>
            <div class="col">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi (Jalur Masuk. ex: SNMPTN)"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection