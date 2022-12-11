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
       @foreach($DB as $key=>$value)
        <div class="container mt-4">
            <div class="card">
                <div class="container-fliud">
                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post"
                        action="#">
                        {{csrf_field()}}
                        <input type="hidden" name="idLT_gaming" id="sp_ma" value="{{$value->idLT_gaming}}">
                        <input type="hidden" name="nameLT_gaming" id="sp_ten" value="{{$value->nameLT_gaming}}">
                        <input type="hidden" name="price" id="sp_gia" value="{{$value->price}}">
                        <input type="hidden" name="tmp" id="hinhdaidien" value="{{$value->tmp}}">
                       

                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane" id="pic-1">
                                        <img src="{{$value->tmp}}" width="100%" >
                                    </div>
                                    <div class="tab-pane" id="pic-1">
                                    <img src="{{$value->tmp}}" width="100%" >
                                    </div>
                                    <div class="tab-pane" id="pic-2">
                                    <img src="{{$value->tmp}}" width="100%" >
                                    </div>
                                    <div class="tab-pane active" id="pic-3">
                                    <img src="{{$value->tmp}}" width="100%" >
                                    </div>
                                </div>
                                    
                                
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                        <img src="{{$value->tmp}}" width="100%" >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title">{{ $value->nameLT_gaming}}</h3>
                                <div class="rating">       
                                    <p class="review-no">Hãng sản xuất: <strong>{{$value->name_hang}}</strong> </p>                    
                                   <p class="review-no">Bảo hành: <strong>12 tháng</strong></p>
                                   <p class="review-no">Tình trạng:<strong> Còn hàng</strong></p>
                                </div>
                                
                                <small class="text-muted">Giá cũ: <s><span>{{currency_format($value->price)}}</span></s></small>
                                <h4 class="price">Giá hiện tại: <span>{{currency_format($value->price*0.9)}}</span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                    <strong>Uy tín</strong>!</p>
                                <div class="form-group">
                                    <label for="soluong">Số lượng đặt mua:</label>
                                </div>
                                <div class="action">
                                    <a href="{{route('giohang',['id'=>$value->idLT_gaming])}}" input type="submit" class="add-to-cart btn btn-default btn btn-primary btn-md" style="margin-top:2rem"id="btnThemVaoGioHang" value="Thêm vào giỏ hàng">Thêm vào giỏ hàng</a>
                                    <a class="like btn btn-default" href="#"></a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="container-fluid">
                    <h3>Thông tin chi tiết về Sản phẩm</h3>
                    <div class="row">
                        <div class="col" style="background:#ededed">
                          <h5>Thông số kỹ thuật</h5>
                          <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>   
                                    <td>Màn hình</td>
                                    <td>15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, Acer ComfyView LED-backlit</td>
                                    </tr>
                                    <tr>   
                                        <td>CPU</td>
                                        <td>Intel, Core i5, 11400H</td>
                                    </tr>
                                    <tr>
                                        <td>RAM</td>
                                        <td>8 GB, DDR4, 3200 MHz</td>
                                    </tr>
                                    <tr>
                                        <td>Ổ cứng</td>
                                        <td>SSD 512 GB</td>
                                    </tr>
                                    <tr>
                                        <td>Đồ họa</td>
                                        <td>NVIDIA GeForce GTX 1650 4GB; Intel UHD Graphics</td>
                                    </tr>
                                    <tr>
                                        <td>Hệ điều hành</td>
                                        <td>Windows 11 Home</td>
                                    </tr>
                                    <tr>
                                        <td>Trọng lượng</td>
                                        <td>2.2 kg</td>
                                    </tr>
                                    <tr>
                                        <td>Kích thước</td>
                                        <td>363.4 x 255 x 23.9 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Xuất xứ</td>
                                        <td>Trung Quốc</td>
                                    </tr>
                                    <tr>
                                        <td>Năm ra mắt</td>
                                        <td>2021</td>
                                    </tr>
                                </tbody>
                            </table>
                        <div class="st-pd-table-viewDetail"><a href="#" class="re-link js--open-modal">Xem cấu hình chi tiết <span class="carret"></span></a></div></div>
                        </div>
                        <div class="col">
                            <div id="slideshow">
                                <style>
                                     #slideshow {
    overflow: hidden;
    height: 510px;
    width: 728px;
    margin: 0 auto;
  }
 .slide-wrapper {
    width:9999px;
    animation: slide 14s ease infinite;
  }
 .slide {
    float: left;
    height: 510px;
    width: 728px;
  }
 @keyframes slide {
    10% {margin-left: 0px;}
    30% {margin-left: -728px; }
    50% {margin-left: -1465px;}
    70% {margin-left: -2150px;}
    90% {margin-left:  -2930px}
    100% {margin-left:0px;}
   
  }
                                </style>
                                <div class="slide-wrapper">
                                    <div class="slide"><img src="https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2022/2/28/637816530817625763_acer-nitro-gaming-an515-57-5669-i5-11400h-thiet-ke.png"></div>
                                    <div class="slide"><img src="https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2022/2/28/637816530818094479_acer-nitro-gaming-an515-57-5669-i5-11400h-man-hinh.png"></div>
                                    <div class="slide"><img src="https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2022/2/28/637816530817938294_acer-nitro-gaming-an515-57-5669-i5-11400h-hieu-nang.png"></div>
                                    <div class="slide"><img src="https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2022/2/28/637816530817938294_acer-nitro-gaming-an515-57-5669-i5-11400h-am-thanh.png"></div>
                                    <div class="slide"><img src="https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2022/2/28/637816530817781943_acer-nitro-gaming-an515-57-5669-i5-11400h-tan-nhiet.png"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
</main>
</div>