
<?php
use Gloudemans\Shoppingcart\Facades\Cart;
    $content=Cart::content();
    $qty=0;
  ?>   
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.css">
    <link rel='stylesheet' href="/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
</head>
<body>
<div class="container">             
@include('layout.header')
@include('format.format')
<main role="main">
    
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
          
               
                @foreach($content as $value)
                <input type="hidden" name="tmp" value="{{$value->options->tmp}}">
                <input type="hidden" name="nameLT_gaming" value="{{$value->name}}">
                <input type="hidden" name="soluong"value="{{$value->qty}}">
                <input type="hidden" name="price"value="{{$value->price}}">
                <input type="hidden" name="total"value="{{$value->qty}}">
                @endforeach
                
            <h1 class="text-center">Giỏ hàng</h1>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh đại diện</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                        <?php $qty++;?>
                        @foreach($content as $value)
                            <tr>
                                <td>{{$qty}}</td>
                                <td>
                                    <img src="{{$value->options->tmp}}"width=200px>
                                </td>
                                <td>{{$value->name}}</td>
                                <td class="text-right">
                                <form action="{{route('capnhat',['rowId'=>$value->rowId,'qty'=>$value->qty])}}" method="get">
                                    <input type="number" name="qty" value="{{$value->qty}}">
                                    <input type="submit" value="Cập nhật">
                                </form>
                                </td>
                                <td class="text-right"style="width:200px">{{number_format($value->price).' VND'}}</td>
                                <td class="text-right"style="width:200px">{{number_format($value->price*$value->qty).' VND'}}</td>
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham"href="{{route('delete_cart',['rowId'=>$value->rowId])}}">
                                        <i class="fa fa-trash" aria-hidden="true" ></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            <?php $qty++;?>
                        @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('laptop')}}" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i>&nbsp;Thêm sản phẩm</a>
                    <a href="{{route('thanhtoan')}}" class="btn btn-primary btn-md" value="Thanh toán">Thanh toán<i
                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;</a>
                </div>
            </div>
            </form>
        </div>
        <!-- End block content -->
    </main>
</div>
</body>
</html>