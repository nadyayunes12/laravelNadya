<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCustomer extends Model
{
	protected $fillable = ['nama_customer','nama_barang','harga_barang','jumlah_beli'];
    protected $table = 'customer';
}
