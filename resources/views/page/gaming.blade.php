<?php 
    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = ' VND') {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }
?>
@extends('laptop')
@section('content')
<div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
             
                  @foreach($DB as $key =>$value)
                  <div class="col-4">
                    <div class="card h-100 shadow-sm"><img style="padding:0px"src="{{$value->tmp}}"class="card-img-top" alt="...">
                      <div class="card-body">
                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">{{currency_format($value->price)}}</span>
                        </div>
                        <h5 class="card-title">{{$value->nameLT_gaming}}</h5>
                        <div class="cdt-product__config">
                          <div class="cdt-product__config__param">
                            <span style="padding:0px 10px;display:inline-block" data-title="Màn hình"><i style="margin-right:10px; display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-display"></i>15.6 inch</span>
                            <span style="padding:0px 10px;display:inline-block" data-title="CPU"><i style="margin-right:10px; display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-microchip"></i>Core i5</span>
                                                                                          <span style="padding:0px 10px;display:inline-block" data-title="RAM"><i style="margin-right:10px; display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-sd-card"></i>8 GB</span>
                            <span style="padding:0px 10px;display:inline-block" data-title="Ổ cứng"><i style="margin-right:10px; display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-hard-drive"></i>SSD 512 GB</span>
                            <span style="padding:0px 10px;display:inline-block" data-title="Đồ họa"><i style=" display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-tv"></i>NVIDIA GeForce GTX 1650 4GB</span>
                            <span style="padding:0px 10px;display:inline-block" data-title="Trọng lượng"><i style=" display: inline-block;
                                                                  font-size: 14px;
                                                                  line-height: 19px;
                                                                  color: #6c757d;
                                                                  margin-bottom: 9px;
                                                                  position: relative;
                                                                  cursor: help;" class="fa-solid fa-weight-hanging"></i> 2.2 kg</span>
                          </div>
                        </div>
                        <div class="text-center my-4 force-to-bottom "><a href="{{route('chitiet',['name'=>$value->nameLT_gaming,'id'=>$value->idLT_gaming])}}" class="btn btn-warning">Check offer</a> 
                        </div>
                      </div>
                    </div>
                  </div>
                 @endforeach
</div> 
                  
                <div style="margin-top:70px;"class="page">
                  
                {!! $DB->links() !!}  
                </div>
                
@endsection
                
                