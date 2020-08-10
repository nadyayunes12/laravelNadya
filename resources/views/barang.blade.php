@extends('layout/main')
@section('title', 'barang')
@section('container')
<div class="container"> <!-- container ini berfungsi membuat tampilan header lebih rapi da berada di tengah -->
	<div class="row">  
	<div class="col-10">
    <h1 class="mt-3">DATA BARANG</h1> <!--mt-3 disini berfungsi sebagai margin atas. mt = margin top, sebanya 3 cm. BEGITU-->
    <a href="/barang/create" class="btn btn-primary my-3 ml-20"> Tambah </a>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id barang</th>
      <th scope="col">nama barang</th>
      <th scope="col">harga barang</th>
      <th scope="col">stok barang</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $barang as $brg)
  <tr>
      <td scope>{{ $brg->id_barang}}</td>
      <td scope>{{ $brg->nama_barang}}</td>
      <td scope>{{ $brg->harga_barang}}</td>
      <td scope>{{ $brg->stok_barang}}</td>
      <td>
        <a href="/barang/edit/{{ $brg->id_barang }}" class="badge badge-success"> edit </a>
        <a href="/barang/destroy/{{ $brg->id_barang }}" class="badge badge-danger"> delete </a>
      </td>
      </tr>
      @endforeach
      </tbody>
	</div>
	</div>
	</div>
@endsection