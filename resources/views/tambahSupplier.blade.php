@extends('layout/main')
@section('title', 'Form Tambah Supplier')
@section('container')
<div class="container"> <!-- container ini berfungsi membuat tampilan header lebih rapi da berada di tengah -->
	<div class="row">  
	<div class="col-10">
    <h1 class="mt-3">FORM TAMBAH SUPPLIER</h1> <!--mt-3 disini berfungsi sebagai margin atas. mt = margin top, sebanya 3 cm. BEGITU-->
    <form method="post" action="/supplier">
    @csrf
  
  <div class="form-group">
    <label for="nama supplier">Nama supplier</label>
    <input type="text" class="form-control" id="nama_supplier" placeholder="Masukkan Nama supplier" name="nama_supplier">
  </div>
  <div class="form-group">
    <label for="nama supplier">Nama Barang</label>
    <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama barang" name="nama_barang">
  </div>
  <div class="form-group">
    <label for="harga barang">Harga barang</label>
    <input type="text" class="form-control" id="harga_barang" placeholder="Masukkan harga barang" name="harga_barang">
  </div>
  <div class="form-group">
    <label for="jumlah jual">jumlah jual</label>
    <input type="text" class="form-control" id="jumlah_jual" placeholder="Masukkan jumlah jual" name="jumlah_jual">
  </div>
  <button type="submit" class="btn btn-primary"> Tambahkan</button>
</form>
	</div>
	</div>
	</div>
@endsection