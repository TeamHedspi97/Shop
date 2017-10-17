<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhmuc;
use App\sanpham;

class frontController extends Controller
{
    //
    public function showDanhmuc()
    {
    	$danhmuc = danhmuc::all();
    	return view('/frontViews/homePage',['danhmucs' => $danhmuc]);
    }
  /*  public function getDanhmuc($sanpham)
    {
        $sp = sanpham::where('id_danhmuc',$sanpham)->FirstOrFail();
        echo $sp;
    }*/
    public function showSanpham($dm)
    {
    	$danhmuc = danhmuc::where('tendanhmuc',$dm)->FirstOrFail();
        $sanpham = $danhmuc->listSanpham();
        return view('/frontViews/listSanpham',['sanphams' => $sanpham]);
    }
}
