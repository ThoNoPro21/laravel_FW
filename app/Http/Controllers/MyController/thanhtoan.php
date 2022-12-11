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
class thanhtoan extends Controller
{
    public function thanhtoan(Request $request)
    {
    $i=0;
    $total=0;
    $subtotal=0;
    $subtotals=0;
    $km=0;
    $content=Cart::content();
    foreach($content as $key=>$value)
    {
        $price=$value->price;
        $qty=$value->qty;
        $total=$price*$qty;
        $subtotal+=$total;
    }
    if($subtotal >=30000000 and $subtotal < 50000000){
        $km=$subtotal*3/100;
    }
    if($subtotal>= 50000000){
        $km=$subtotal*5/100;
    }
    $subtotals=$subtotal-$km;
        return view('thanhtoan',compact('content','total','i','subtotal','subtotals','km'));
    }
    
}