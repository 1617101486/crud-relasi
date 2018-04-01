<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyalur extends Model
{
    //
    protected $table = 'penyalur';

    protected $fillable = array('nik', 'nama','alamat');

    public function barang() {
		return $this->HasMany('App\Barang', 'id_penyalur');}
}
