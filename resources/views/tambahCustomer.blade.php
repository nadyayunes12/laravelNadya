@extends('layout/main')
@section('title', 'Form Tambah Customer')
@section('container')
<div class="container"> <!-- container ini berfungsi membuat tampilan header lebih rapi da berada di tengah -->
	<div class="row">  
	<div class="col-10">
    <h1 class="mt-3">FORM TAMBAH CUSTOMER</h1> <!--mt-3 disini berfungsi sebagai margin atas. mt = margin top, sebanya 3 cm. BEGITU-->
    <form method="post" action="/customer">
    @csrf
  
  <div class="form-group">
    <label for="nama customer">Nama Customer</label>
    <input type="text" class="form-control" id="nama_customer" placeholder="Masukkan Nama customer" name="nama_customer">
  </div>
  <div class="form-group">
    <label for="nama customer">Nama Barang</label>
    <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama barang" name="nama_barang">
  </div>
  <div class="form-group">
    <label for="harga barang">Harga barang</label>
    <input type="text" class="form-control" id="harga_barang" placeholder="Masukkan harga barang" name="harga_barang">
  </div>
  <div class="form-group">
    <label for="jumlah beli">jumlah beli</label>
    <input type="text" class="form-control" id="jumlah_beli" placeholder="Masukkan jumlah beli" name="jumlah_beli">
  </div>
  <button type="submit" class="btn btn-primary"> Tambahkan</button>
</form>
	</div>
	</div>
	</div>
@endsection