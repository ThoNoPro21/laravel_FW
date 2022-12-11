<?php

namespace App\Http\Controllers\MyController;
use App\Models\Donhang;
use App\Http\Controllers\Controller;
use App\Models\Donhangchitiet;
use App\Models\Hoadon;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use ProductGaming;

class admin extends Controller
{
    public function add_product(){
        return view('admin/home/add_product');
    }

    public function all_product(){
        $all_product = DB::table('product_gaming')->get();
        $manager_product = view('admin/home/all_product')->with('all_product',$all_product);

        return view('admin/home/admin')->with('admin.all_product',$manager_product);
    }

    public function save_product(Request $request){
        $data=array();
        $data['nameLT_gaming'] = $request->product_name;
        $data['price'] = $request->price;
        $data['price_sale'] = $request->price_sale;
        $data['soluong'] = $request->so_luong;
        $data['tmp'] = $request->product_pic;
        
        DB::table('product_gaming')->insert($data);
        session::put('message','Thêm sản phẩm thành công');

        return redirect::to('all_product');

    }

    public function edit_product($product_id){
        $edit_product = DB::table('product_gaming')->where('idLT_gaming', $product_id)->get();
       // $manager_product = view('admin/home/edit_product')->with('edit_product',$edit_product);

        return view('admin/home/edit_product',compact('edit_product'));
    }

    public function delete_product($product_id ){
        DB::table('product_gaming')->where('idLT_gaming',$product_id)->delete();
        session::put('message','Xóa sản phẩm thành công');
        return redirect::to('all_product');
    }

    public function update_product($product_id,Request $request){
        $data=array();
        $data['nameLT_gaming'] = $request->product_name;
        $data['price'] = $request->price;
        $data['price_sale'] = $request->price_sale;
        $data['soluong'] = $request->so_luong;
        $data['tmp'] = $request->product_pic;

        DB::table('nameLT_gaming')->where('idLT_gaming', $product_id)->update($data);
        session::put('message','Cập nhật sản phẩm thành công');
        return redirect('/all_product');
    }

    //xu li don hang
    public function xulythanhtoan(Request $request)
    {   
        $donhang=new Donhang();
        $donhang->id;
        $donhang->tenkhachhang=$request->input('kh_ten');
        $donhang->diachi= $request->input('kh_diachi');
        $donhang->SDT=$request->input('kh_dienthoai');
        $donhang->ghichu=$request->input('kh_ghichu');
        $donhang->kieuthanhtoan=$request->input('httt_ma');
        $donhang->save();
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $random_code=substr(str_shuffle(str_repeat($pool, 5)), 0, 6);

        $donhangchitiet=new Donhangchitiet();
        $donhangchitiet->id;
        $donhangchitiet->customer_id=null;
        $donhangchitiet->donhang_id=$donhang->id;
        $donhangchitiet->madonhang=$random_code;
        $donhangchitiet->tinhtrang=0;
        $donhangchitiet->save();
       
        if($request->input('sanphamgiohang')){
       
        foreach($request->input('sanphamgiohang') as $key=>$value){
            $hoadon=new Hoadon();
        $hoadon->id;
        $hoadon->madonhang=$donhangchitiet->madonhang;
        $hoadon->product_id=$value['id_sanpham'];
        $hoadon->product_name=$value['name'];
        $hoadon->price=$value['price'];
        $hoadon->soluong=$value['soluong'];
        $hoadon->tmp=$value['tmp'];
        $hoadon->tongtien=$request->input('Tongsanpham');
        $hoadon->save();
        }
    }    
}
public function home()
{
    $DB=Donhangchitiet::orderby('tinhtrang','asc')->get();
   return view('admin/home/home',compact('DB'));
}
public function donhang()
{
    $DB=Donhangchitiet::where('tinhtrang',0)->get();   
   return view('admin/home/donhang',compact('DB'));
}
public function view_donhang($madonhang,$id)
{
    $DB=Hoadon::where('madonhang',$madonhang)->get();
    $DB2=Hoadon::where('madonhang',$madonhang)->take(1)->get();
    $DB1=Donhang::where('id',$id)->get();
    return view('admin/home/donhangchitiet',compact('DB','DB1','DB2'));
}
public function delete_donhang($id)
{
   DB::table('donhangchitiet')->where('donhang_id',$id)->delete();
   DB::table('donhang')->where('id',$id)->delete();
   return Redirect::to('donhang');
}
public function xetduyet($madonhang)
{
   DB::table('donhangchitiet')->where('madonhang',$madonhang)->update(['tinhtrang'=>1]);
   $DB=DB::table('donhangchitiet')->join('hoadon','Donhangchitiet.madonhang','hoadon.madonhang')->join('product_gaming','hoadon.product_id','product_gaming.idLT_gaming')->where('Donhangchitiet.madonhang',$madonhang)->get();
   foreach($DB as $key=>$value){
        $product_idss=$value->product_id;
        $qty=$value->soluong;   
        DB::table('product_gaming')->where('idLT_gaming',$product_idss,'soluong',$qty);
   }
   
   // return Redirect::to('donhang');
  dd($DB);
  return view('admin/home/test');
}
public function chovanchuyen()
{
    $DB=Donhangchitiet::where('tinhtrang',1)->get();
   return view('admin/home/chovanchuyen',compact('DB'));
}

}