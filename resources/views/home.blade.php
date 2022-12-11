<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.css">
    <link rel='stylesheet' href="{{asset('app.css')}}"> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div class="container">
<?php 

    if (!function_exists('currency_format')) {
      function currency_format($number, $suffix = ' VND') {
          if (!empty($number)) {
              return number_format($number, 0, ',', '.') . "{$suffix}";
          }
      }
  }
?>
@include('layout.header')

    <div class="row" style="text-align:center;padding:20px 0px">
    @foreach($DB2 as $key=>$value)
      <div class="col">
        <a href="{{$value->href}}">
        <img src="{{$value->tmp}}" width="200px"height="200px" style="border-radius:50%">
        <h1>{{$value->name_danhmuc}}</h1>
        </a>
      </div>
    @endforeach
    </div>


    <div class="sp-noibat">
      <h1>Sản phẩm nổi bật</h1>
      <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        
                  @foreach($DB as $key =>$value)
                  <div class="col-3">
                    <div class="card h-100 shadow-sm"><img src="{{$value->tmp}}"class="card-img-top" height="186px"alt="...">
                      <div class="card-body">
                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success"> {{Currency_format($value->price)}}</span> 
                        </div>
                        <h5 class="card-title"> {{$value->nameLT_gaming}}</h5>
                        <div class="cdt-product__config">
                        <div class="cdt-product__config__param">
                            <span style="padding:0px 10px;display:inline-block" data-title="Màn hình"><i style="margin-right:10px; display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-display"></i>{{$value->manhinh}}</span>
                            <span style="padding:0px 10px;display:inline-block" data-title="CPU"><i style="margin-right:10px; display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-microchip"></i>{{$value->cpu}}</span>
                                                                                          <span style="padding:0px 10px;display:inline-block" data-title="RAM"><i style="margin-right:10px; display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-sd-card"></i>{{$value->ram}}</span>
                            <span style="padding:0px 10px;display:inline-block" data-title="Ổ cứng"><i style="margin-right:10px; display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-hard-drive"></i>{{$value->rom}}</span>
                            <span style="padding:0px 10px;display:inline-block" data-title="Đồ họa"><i style=" display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-tv"></i>{{$value->vga}}</span>
                            <span style="padding:0px 10px;display:inline-block" data-title="Trọng lượng"><i style=" display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-weight-hanging"></i> 2.2 kg</span>
                          </div>
                        </div>
                        <div class="text-center my-4 force-to-bottom "> <a href="{{route('chitiet',['name'=>$value->nameLT_gaming,'id'=>$value->idLT_gaming])}}" class="btn btn-warning">Check offer</a>
                        </div>
                      </div>
                    </div>
                  </div>
                 @endforeach
                
      </div>
    </div>

    <section class="st-service"style="margin-top:2.5rem">
      <div class="box-container">
        <div class="title">
          <h1>Dịch vụ tiện ích</h1>
        </div>
        <ul class="row">
          <div class="col-6 col-md-4">
            <div class="item-img">
              <img src="./img/agri.jpg" alt="Thanh toán bằng thẻ"width="50px" height="50px">
            </div>

            <div class="wrap-text">
              <span class="item-title">
                <b>Thanh toán bằng thẻ online</b>
              </span>
              <p class="item-text">Thanh toán nhanh chóng , tiện lợi</p>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="item-img">
              <img src="./img/viettel.jfif" alt="Thanh toán thẻ cào"width="50px" height="50px">
            </div>

            <div class="wrap-text">
              <span class="item-title">
                <b>Thanh toán thẻ cào</b>
              </span>
              <p class="item-text">Thanh toán nhanh chóng, tiện lợi</p>
            </div>
          </div>
          
          <div class="col-6 col-md-4">
            <div class="item-img">
              <img src="./img/garena.jpg" alt="Thẻ cào Garena" width="50px" height="50px">
            </div>

            <div class="wrap-text">
              <span class="item-title">
                <b>Thẻ cào Garena</b>
              </span>
              <p class="item-text">
                <span>Giảm 2%</span> cho thẻ mệnh giá từ 100.000đ
              </p>
            </div>
          </div>
        </ul>
      </div>
    </section>
@include('layout.footer')
</div>
</body>
</html>