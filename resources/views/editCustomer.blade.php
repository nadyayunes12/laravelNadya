@extends('layout/main')
@section('title', 'Form Update Customer')
@section('container')
<div class="container"> <!-- container ini berfungsi membuat tampilan header lebih rapi da berada di tengah -->
	<div class="row">  
	<div class="col-10">
    <h1 class="mt-3">FORM UPDATE CUSTOMER</h1> <!--mt-3 disini berfungsi sebagai margin atas. mt = margin top, sebanya 3 cm. BEGITU-->
    @foreach($customer as $cst)
    <form method="post" action="/customer/update">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nama customer">Nama customer</label>
      <input type="text" class="form-control" id="nama_customer" placeholder="Masukkan Nama customer" name="nama_customer" value="{{$cst->nama_customer}}">
    </div>
    <div class="form-group">
      <label for="nama barang">Nama barang</label>
      <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama barang" name="nama_barang" value="{{$cst->nama_barang}}">
    </div>
    <div class="form-group">
      <label for="harga barang">Harga barang</label>
      <input type="text" class="form-control" id="harga_barang" placeholder="Masukkan harga barang" name="harga_barang" value="{{$cst->harga_barang}}">
    </div>
    <div class="form-group">
      <label for="jumlah_beli">jumlah_beli</label>
      <input type="text" class="form-control" id="jumlah_beli" placeholder="Masukkan jumlah_beli" name="jumlah_beli" value="{{$cst->jumlah_beli}}">
    </div>
    <button type="submit" class="btn btn-primary"> Update</button>
  </form>
    @endforeach
  	</div>
  	</div>
  	</div>
@endsection