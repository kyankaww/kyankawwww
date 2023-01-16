@extends('page.login.layout')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Book</h1>
</div>
<form action="/tambah-buku" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Judul</label>
    <input type="text" name="judul" id="" class="form-control">
    <label for="">Jumlah Halaman</label>
    <input type="number" name="jumlah_halaman" id="" class="form-control">
    <label for="">Penerbit</label>
    <input type="text" name="penerbit" id="" class="form-control">
    <label for="">Penulis</label>
    <input type="text" name="penulis" id="" class="form-control">
    <label for="">Ulasan</label>
    <textarea name="ulasan" id="" cols="30" rows="10" class="form-control"></textarea>
    <label for="">Buku</label>
    <input type="file" name="buku" id="" class="form-control">
    <button type="submit" class="btn btn-success">Tambah</button>
</form>
@endsection