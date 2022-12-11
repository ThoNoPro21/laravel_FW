<?php
use App\Http\Controllers\MyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MyController\laptop;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home','home@home')->name('home');
Route::get('/','home@home')->name('home');
Route::group(['prefix'=>'laptop'],function(){
    Route::get('','laptop@home')->name('laptop');
    Route::get('design','laptop@LTdesign')->name('design');
    Route::get('gaming','laptop@LTgaming')->name('gaming');
});
Route::get('pc',function(){
return view('pc');
})->name('pc');

Route::get('chitiet/{name}/{id}','chitiet@home')->name('chitiet');
Route::get('giohang/{id}','giohang@add')->name('giohang');
Route::get('show_cart','giohang@show_cart')->name('show_cart');
Route::get('delete_cart/{rowId}','giohang@delete_cart')->name('delete_cart');
Route::get('thanhtoan','thanhtoan@thanhtoan')->name('thanhtoan');
Route::get('capnhat/{rowId}/{qty}','giohang@capnhat')->name('capnhat');
/*--------Trang login-------------*/
Route::get('login','authen@login')->name('login');

/*--------Trang ADMIN-------------*/
Route::get('admin','admin@home')->name('admin');
Route::get('add_product','admin@add_product')->name('add_product');
Route::get('all_product','admin@all_product')->name('all_product');
Route::post('save_product','admin@save_product')->name('save_product');
Route::get('delete_product/{product_id}','admin@delete_product')->name('delete_product');
Route::get('edit_product/{product_id}','admin@edit_product')->name('edit_product');
Route::post('xulythanhtoan','admin@xulythanhtoan')->name('xulythanhtoan');
Route::get('donhang','admin@donhang')->name('donhang');
Route::get('view_donhang/{madonhang}/{id}','admin@view_donhang')->name('view_donhang');
Route::get('delete_donhang/{id}','admin@delete_donhang')->name('delete_donhang');
Route::get('xetduyet/{madonhang}','admin@xetduyet')->name('xetduyet');
Route::get('chovanchuyen','admin@chovanchuyen')->name('chovanchuyen');