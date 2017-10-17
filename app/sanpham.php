<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanpham';
    public $timestamps = false;
 	public function getTen()
 	{
    	return $this->belongsTo('App\Danhmuc','id_danhmuc');
 	}   
}
