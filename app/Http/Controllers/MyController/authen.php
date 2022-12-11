<?php

namespace App\Http\Controllers\MyController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class authen extends Controller
{
    public function login()
        {   
            return view('authen/login');  
        } 
    public function Process_login()
        {   
            return view('authen/login');  
        } 
}