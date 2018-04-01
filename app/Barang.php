<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = 'barang';

	protected $fillable = array('kode', 'nama','hargajual','hargabeli','jumlah','id_penyalur');

    public function penyalur() {
		return $this->belongsTo('App\Penyalur', 'id_penyalur');
	}

	public function faktur()
	{
		return $this->belongsTo('App\Faktur','id_barang');
	}

	public function pembeli() {
		return $this->belongsToMany('App\Pembeli', 'detail_beli', 'id_barang', 'id_pembeli');
	}

}
