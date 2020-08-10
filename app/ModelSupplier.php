<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSupplier extends Model
{
	protected $fillable = ['nama_supplier','nama_barang','harga_barang','jumlah_jual'];
    protected $table = 'supplier';
}
