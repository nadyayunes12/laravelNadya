@extends('layout/main')
@section('title', 'customer')
@section('container')
<div class="container"> <!-- container ini berfungsi membuat tampilan header lebih rapi da berada di tengah -->
	<div class="row">  
	<div class="col-10">
    <h1 class="mt-3">DATA CUSTOMER</h1> <!--mt-3 disini berfungsi sebagai margin atas. mt = margin top, sebanya 3 cm. BEGITU-->
    <a href="/customer/create" class="btn btn-primary my-3"> Tambah </a>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">nama customer</th>
      <th scope="col">nama barang</th>
      <th scope="col">harga barang</th>
      <th scope="col">jumlah beli</th>
      <th scope="col">AKSI</th>

    </tr>
  </thead>
  <tbody>
  @foreach( $customer as $cst)
  <tr>
      <td scope>{{ $cst->nama_customer}}</td>
      <td scope>{{ $cst->nama_barang}}</td>
      <td scope>{{ $cst->harga_barang}}</td>
      <td scope>{{ $cst->jumlah_beli}}</td>
      <td>
        <a href="/customer/edit/{{ $cst->id_customer }}" class="badge badge-success"> edit </a>
        <a href="/customer/destroy/{{ $cst->id_customer }}" class="badge badge-danger"> delete </a>
      </td>
      </tr>
      @endforeach
      </tbody>
</table>
	</div>
	</div>
	</div>
@endsection