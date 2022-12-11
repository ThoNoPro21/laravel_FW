<?php

namespace App\Http\Controllers\MyController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class chitiet extends Controller
{
    function home($name,$id)
        {   
            $DB=DB::table('product_gaming')->where('idLT_gaming',$id)->join('hangsanxuat','hangsanxuat.id_hang','product_gaming.hang_id')->get();
            return view('chitiet',compact('DB'));  
           
        } 
}