<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBarang extends Model
{
	protected $fillable = ['id_barang','nama_barang','harga_barang','stok_barang'];
    protected $table = 'barang';

}
 