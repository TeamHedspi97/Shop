<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhmuc;

class frontController extends Controller
{
    //
    public function showDanhmuc()
    {
    	$danhmuc = danhmuc::all();
    	return view('homePage',['danhmucs' => $danhmuc]);
    }
    public function showSanpham($danhmuc)
    {
    	# code...
    	echo "list san pham cua".$danhmuc;
    }
}
