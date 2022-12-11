<?php 
namespace App\Helper;
class CartHelper{
    public $items=[];
    public $price=0;
    public $soluong=0;
    public function __construct()
    {
        $this->items=session('giohang') ? session('giohang'):[];
        $this->price=$this->get_price();
        $this->soluong=$this->get_soluong();
    }
    public function add($soluong=1,$product)
    {
       $item=[
        'idLT_gaming'=>$product->idLT_gaming,
        'tmp'=>$product->tmp,
        'soluong'=>$soluong,
        'price'=>$product->price
        
       ];
       $this->items[$product->idLT_gaming]=$item;
       session(['giohang'=>$this->items]);
       dd(session('giohang'));
    }
    public function remove($id)
    {
        
    }
    public function clear($id)
    {
        
    }
    private function get_price()
    {
        $t=0;
        foreach($this->items as $item){
            $t+=$item['price']*$item['soluong'];
        }
        return $t;
    }
    private function get_soluong(){

        $t=0;
        foreach($this->items as $item){
            $t+=$item['soluong'];
        }
        return $t;
    }
}
