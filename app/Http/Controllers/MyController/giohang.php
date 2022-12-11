<?php

namespace App\Http\Controllers\MyController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Vendor\bumbummen99\Shoppingcart\src;
use App\Helper\CartHelper;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();
class giohang extends Controller
{
    public function add($id)
        {   
            $product=DB::table('product_gaming')->where('idLT_gaming',$id)->first();
            $data['id']=$product->idLT_gaming;
            $data['name']=$product->nameLT_gaming;
            $data['price']=$product->price;
            $data['weight']=$product->price;
            $data['qty']=1;
            $data['options']['tmp']=$product->tmp;
            Cart::add($data);
           return Redirect::to('show_cart');
        }
    public function show_cart()
    {
        return view('giohang');
        
    }
    public function delete_cart($rowId){
        Cart::remove($rowId);
        return Redirect::to('show_cart');
    }
    public function capnhat($rowId,$qty){
        if(isset($_GET['qty'])){
            $qty=$_GET['qty'];
            Cart::update($rowId,$qty);
            return Redirect::to('show_cart');
        }
       
       
    }
}

