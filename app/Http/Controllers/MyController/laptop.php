<?php

namespace App\Http\Controllers\MyController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class laptop extends Controller
{
        public function home()
        {
            $DB=DB::table('product_gaming')->where ('noibat','=',1);
            $DB=$DB->get();
            $DB1=DB::table('product_gaming')->where ('hang_id','=',1);
            $DB1=$DB1->get();
            $DB2=DB::table('product_gaming')->where ('hang_id','=',3);
            $DB2=$DB2->get();
           
            return view('page/home',compact('DB','DB1','DB2'));
            
        }
        function LTdesign()
        {
            // if(isset($_GET['sort'])){
            //     $sort=$_GET['sort'];
            //     switch ($sort) {
            //         case 'dell':
            //             $DB=DB::table('product_gaming')->where ('hang_id','=',1);
            //             $DB=$DB->get();
            //             return view('page/design',compact("DB"));
            //             break;
            //         case 'acer':
            //             $DB=DB::table('product_gaming')->where ('hang_id','=',2);
            //             $DB=$DB->get();
            //             return view('page/design',compact("DB"));
            //             break;
            //         case 'asus':
            //             $DB=DB::table('product_gaming')->where ('hang_id','=',3);
            //             $DB=$DB->get();
            //             return view('page/design',compact("DB"));
            //             break;
            //         case 'hp':
            //             $DB=DB::table('product_gaming')->where ('hang_id','=',4);
            //             $DB=$DB->get();
            //             return view('page/design',compact("DB"));
            //             break;
            //         case 'msi':
            //             $DB=DB::table('product_gaming')->where ('hang_id','=',5);
            //             $DB=$DB->get();
            //             return view('page/design',compact("DB"));
            //             break;
            //         case 'lenovo':
            //             $DB=DB::table('product_gaming')->where ('hang_id','=',6);
            //             $DB=$DB->get();
            //             return view('page/design',compact("DB"));
            //             break;
            //         case 'lg':
            //             $DB=DB::table('product_gaming')->where ('hang_id','=',7);
            //             $DB=$DB->get();
            //             return view('page/design',compact("DB"));
            //             break;
            //         case 'masstel':
            //             $DB=DB::table('product_gaming')->where ('hang_id','=',8);
            //             $DB=$DB->get();
            //             return view('page/design',compact("DB"));
            //             break;
            //         default:
                    // $DB=DB::table('product_gaming')->where ('id_theloai','=',2);
                    // $DB=$DB->get();
                    // return view('page/design',compact("DB"));
                     
                
            
            $DB=DB::table('product_gaming')->where ('theloai_id','=',1);
            $DB=$DB->get();
            return view('page/design',compact("DB"));
            
        }
        function LTgaming()
        {
           $DB=DB::table('product_gaming')->where('theloai_id','=',2)->simplePaginate(6);;     
            return view('page/gaming',compact('DB'));
         
        }
     }
