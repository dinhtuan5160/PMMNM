<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MauSac extends Model
{
    //
    protected $table = "mausac";

     public function MauSacSanPham()
    {
    	return $this->hasMany('App\MauSacSanPham','id_mausac','id');
    }
}
