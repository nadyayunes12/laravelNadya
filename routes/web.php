<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//root
/*Route::get('/', function () {//kalo ada yg manggil = "Route" dan manggil = "get" root (halaman utama) 
    return view('index'); //maka tampilkan = "turn view" halaman 'welcome'
});
Route::get('/barang', function () {//kalo ada yg manggil = "Route" dan manggil = "get" root (halaman utama) 
    return view('barang'); //maka tampilkan = "turn view" halaman 'welcome'
							//halaman welcome terletak di folder resources/views
});						//halaman welcome terletak di folder resources/views
Route::get('/customer', function () {//kalo ada yg manggil = "Route" dan manggil = "get" root (halaman utama) 
    return view('customer'); //maka tampilkan = "turn view" halaman 'welcome'
							//halaman welcome terletak di folder resources/views
});
Route::get('/supplier', function () {//kalo ada yg manggil = "Route" dan manggil = "get" root (halaman utama) 
    return view('supplier'); //maka tampilkan = "turn view" halaman 'welcome'
							//halaman welcome terletak di folder resources/views
});*/
Route::get('/','ControllerHome@home');
Route::get('/barang','ControllerBarang@barang');
Route::get('/barang/create','ControllerBarang@create');
Route::post('/barang','ControllerBarang@store');
Route::get('/barang/destroy/{id_barang}', 'ControllerBarang@destroy');
Route::get('/barang/edit/{id_barang}', 'ControllerBarang@edit');
Route::post('/barang/update/{id}', 'ControllerBarang@update');
Route::get('/customer','ControllerCustomer@customer');
Route::get('/customer/create','ControllerCustomer@create');
Route::post('/customer','ControllerCustomer@store');
Route::get('/customer/destroy/{id_customer}', 'ControllerCustomer@destroy');
Route::get('/customer/edit/{id_customer}','ControllerCustomer@edit');
Route::post('/customer/update/{id_customer}', 'ControllerCustomer@update');
Route::get('/supplier','ControllerSupplier@supplier');
Route::get('/supplier/create','ControllerSupplier@create');
Route::post('/supplier','ControllerSupplier@store');
Route::get('/supplier/destroy/{id_supplier}', 'ControllerSupplier@destroy');
Route::get('/supplier/edit/{id_supplier}','ControllerSupplier@edit');
Route::post('/supplier/update/{id_supplier}', 'ControllerSupplier@update');
//Route::get('/supplier','ControllerSupplier');