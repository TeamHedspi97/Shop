<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\sanpham;
use App\danhmuc;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
/*    public function getNew(){
        $sanpham = sanpham::orderBy('id','desc')->get();
        return $sanpham;
    }*/
     public function getDanhmuc1(){
        $check = "false";
        $sp = sanpham::orderBy('id_sanpham','desc')->first();
        $dm = danhmuc::all();
        return view('addSanpham',['danhmuc' => $dm, 'sanpham' => $sp, 'check' => $check]);
    }
    public function getDanhmuc2($check){
        $dm = danhmuc::all();
        $sp = sanpham::orderBy('id_sanpham','desc')->first();
        return view('addSanpham',['danhmuc' => $dm, 'sanpham' => $sp, 'check' => $check]);
    }
    public function addSanpham(Request $req){
        if($req->has('_token')){
        	$sanpham = new sanpham;
    		$sanpham->tensanpham = $req->tensanpham;
    		$sanpham->soluong = $req->soluong;
            $sanpham->mota = "sieu pham";
            $sanpham->id_danhmuc = $req->danhmuc;
    		$sanpham->save();
    		return redirect('/addSanpham'.'/true');
            // truoc khi view add can chay getDanhmuc
        }else{
            $err = "Required input";
            return redirect('/addSanpham'.'/true');
        }
    }


    public function xoaSanpham(Request $req){

    }

    public function addDanhmuc(Request $req){
        $danhmuc = new danhmuc;
        $danhmuc->tendanhmuc = $req->tendanhmuc;
        $danhmuc->save();
        return redirect('/addSanpham');
    }






    // FRONT END
    public function getDanhmuc(){
        $listSanpham = danhmuc::all()->listSanpham();
        $dm = danhmuc::all();
        return view('homePage',['danhmuc' => $dm, 'list' => $listSp]);
    }
}
