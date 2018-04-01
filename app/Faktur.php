<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    protected $table = 'faktur';

	protected $fillable1 = array('kode', 'tanggal', 'id_barang');

    public function barang()
    {
    	return $this->hasOne('App\Barang','id_barang');
    }

   }
