<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $table = 'danhmuc';

    public function listSanpham()
    {
/*    	$sanpham = sanpham::where('id_danhmuc',$this->id_danhmuc)->get();
	   	return $sanpham;*/
	   	$list = $this->hasMany('App\sanpham','id_danhmuc','id_danhmuc');
	   	$sanpham = sanpham::where('id_danhmuc',$this->id_danhmuc)->get();
	   	return $sanpham;
    }
}
