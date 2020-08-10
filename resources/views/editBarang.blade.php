@extends('layout/main')
@section('title', 'Form Update Barang')
@section('container')
<div class="container"> <!-- container ini berfungsi membuat tampilan header lebih rapi da berada di tengah -->
	<div class="row">  
	<div class="col-10">
    <h1 class="mt-3">FORM UPDATE BARANG</h1> <!--mt-3 disini berfungsi sebagai margin atas. mt = margin top, sebanya 3 cm. BEGITU-->
    @foreach($barang as $brg)
    <form method="post" action="/barang/update">
    {{csrf_field()}}
   
    <div class="form-group">
      <label for="nama barang">Nama Barang</label>
      <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang" name="nama_barang" value="{{$brg->nama_barang}}">
    </div>
    <div class="form-group">
      <label for="harga barang">Harga Barang</label>
      <input type="text" class="form-control" id="harga_barang" placeholder="Masukkan harga Barang" name="harga_barang" value="{{$brg->harga_barang}}">
    </div>
    <div class="form-group">
      <label for="stok barang">Stok Barang</label>
      <input type="text" class="form-control" id="stok_barang" placeholder="Masukkan stok Barang" name="stok_barang" value="{{$brg->stok_barang}}">
    </div>
    <button type="submit" class="btn btn-primary"> Update</button>
  </form>
    @endforeach
  	</div>
  	</div>
  	</div>
@endsection