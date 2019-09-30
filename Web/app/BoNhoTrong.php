<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoNhoTrong extends Model
{
    //
    protected $table = "bonhotrong";

    public function SanPham()
    {
    	return $this->hasMany('App\SanPham','id_bonhotrong','id');
    }
}
