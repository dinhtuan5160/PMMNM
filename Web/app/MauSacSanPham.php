<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MauSacSanPham extends Model
{
    //
    // protected $table = "mausacsanpham";

    // public function MauSac()
    // {
    // 	return $this->belongsTo('App\MauSac','id_mausac','id');
    // }
    // public function SanPham()
    // {
    // 	return $this->belongsTo('App\SanPham','id_sanpham','id');
    // }
    protected $table = "mausac";

    // public function MauSacSanPham()
    // {
    //     return $this->hasMany('App\MauSacSanPham','id_mausac','id');
    // }
}
