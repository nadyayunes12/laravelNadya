@extends('layout/main')
@section('title', 'Form Tambah Barang')
@section('container')
<div class="container"> <!-- container ini berfungsi membuat tampilan header lebih rapi da berada di tengah -->
	<div class="row">  
	<div class="col-10">
    <h1 class="mt-3">FORM TAMBAH BARANG</h1> <!--mt-3 disini berfungsi sebagai margin atas. mt = margin top, sebanya 3 cm. BEGITU-->
    <form method="post" action="/barang">
    @csrf
  
  <div class="form-group">
    <label for="nama barang">Nama Barang</label>
    <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang" name="nama_barang">
  </div>
  <div class="form-group">
    <label for="harga barang">Harga Barang</label>
    <input type="text" class="form-control" id="harga_barang" placeholder="Masukkan harga Barang" name="harga_barang">
  </div>
  <div class="form-group">
    <label for="stok barang">Stok Barang</label>
    <input type="text" class="form-control" id="stok_barang" placeholder="Masukkan stok Barang" name="stok_barang">
  </div>
  <button type="submit" class="btn btn-primary"> Tambahkan</button>
</form>
	</div>
	</div>
	</div>
@endsection