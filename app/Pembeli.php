<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';

    protected $fillable = array('nama','tanggal');

		public function barang() {
		return $this->belongsToMany('App\Barang', 'detail_beli', 'id_barang', 'id_pembeli');
	}
	
	
}
