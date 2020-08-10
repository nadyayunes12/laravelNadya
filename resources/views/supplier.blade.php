@extends('layout/main')
@section('title', 'supplier')
@section('container')
	<div class="container"> <!-- container ini berfungsi membuat tampilan header lebih rapi da berada di tengah -->
	<div class="row">  
	<div class="col-10">
    <h1 class="mt-3">DATA SUPPLIER</h1> <!--mt-3 disini berfungsi sebagai margin atas. mt = margin top, sebanya 3 cm. BEGITU-->
    <a href="/supplier/create" class="btn btn-primary my-3"> Tambah </a>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">nama supplier</th>
      <th scope="col">nama barang</th>
      <th scope="col">harga barang</th>
      <th scope="col">jumlah jual</th>
      <th scope="col">AKSI</th>

    </tr>
  </thead>
  <tbody>
  @foreach( $supplier as $supp)
  <tr>
      <td scope>{{ $supp->nama_supplier}}</td>
      <td scope>{{ $supp->nama_barang}}</td>
      <td scope>{{ $supp->harga_barang}}</td>
      <td scope>{{ $supp->jumlah_jual}}</td>
      <td>
        <a href="/supplier/edit/{{ $supp->id_supplier }}" class="badge badge-success"> edit </a>
        <a href="/supplier/destroy/{{ $supp->id_supplier }}" class="badge badge-danger"> delete </a>
      </td>
      </tr>
      @endforeach
      </tbody>
</table>
	</div>
	</div>
	</div>

@endsection