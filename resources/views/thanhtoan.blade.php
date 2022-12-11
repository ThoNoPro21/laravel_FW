
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
<main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post"
                action="{{route('xulythanhtoan')}}">
                {{csrf_field()}}
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill">2</span>
                        </h4>
                        <ul class="list-group mb-3">
                            
                        
                            @foreach($content as $value)
                            <li class="list-group-item d-block justify-content-between lh-condensed" style="display:block;width:100%">
                                <div>
                                    <h6 class="my-0">{{$value->name}}</h6>
                                    <img src="{{$value->options->tmp}}"style="width:50px">
                                    <div class="d-flex justify-content-between lh-condensed">
                                    <small class="text-muted">{{number_format($value->price)}} x {{$value->qty}}</small>
                                    <small class="text-muted">{{number_format($value->price*$value->qty). '  VND'}}</small>
                                    </div>
                                </div>
                            <input type="hidden" name="sanphamgiohang[{{$i}}][id_sanpham]" value="{{$value->id}}">
                            <input type="hidden" name="sanphamgiohang[{{$i}}][name]" value="{{$value->name}}">
                            <input type="hidden" name="sanphamgiohang[{{$i}}][price]" value="{{$value->price}}">
                            <input type="hidden" name="sanphamgiohang[{{$i}}][soluong]" value="{{$value->qty}}">
                            <input type="hidden" name="sanphamgiohang[{{$i}}][tmp]" value="{{$value->options->tmp}}">

                            </li>
                        @endforeach
                            <li class="list-group-item d-block justify-content-between lh-condensed" style="display:block;width:100%">
                                <div>
                                <div class="d-flex justify-content-between lh-condensed">
                                    <small class="text-muted">Tổng </small>
                                    <small class="text-muted">{{number_format($subtotal). ' VND'}}</small>
                                    </div>
                                    <div class="d-flex justify-content-between lh-condensed">
                                    
                                    <small class="text-muted">Được giảm</small>
                                    <small class="text-muted">{{number_format($km). ' VND'}}</small>
                        
                                    </div>
                                    <div class="d-flex justify-content-between lh-condensed">
                                    <small class="text-muted">Tổng thành tiền</small>
                                    <small class="text-muted">{{number_format($subtotals). ' VND'}}</small>
                               
                                    </div>
                                </div>
                                
                                <input type="hidden" name="Tongsanpham" value="{{$subtotals}}">
                                
                            </li>
                        </ul>
                        <input type="hidden" name="Ngaydat" value="{{date('d/m/Y')}}">
                        <input type="hidden" name="namedonhang" value="Máy tính">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="kh_ten" id="kh_ten" required >
                            </div>
                    
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="kh_diachi" id="kh_diachi"required >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="number" class="form-control" name="kh_dienthoai" id="kh_dienthoai"required >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="email" class="form-control" name="kh_email" id="kh_email"required >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_ghichu">Ghi chú</label>
                                <input type="text" class="form-control" name="kh_ghichu" id="kh_ghichu" >
                            </div>
                        </div>

                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                            </div>
                            
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt
                            hàng</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>
</div>
</body>
</html>