
@extends('admin/home/admin')
@section('content')
<h3 style="text-align:center">Đơn hàng chi tiết</h3>

<table class="table table-dark table-striped">
  <tr>
    <th>STT</th>
    <th>ID sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Tmp</th>
   
  </tr>
  <?php $i=1;
  ?>

  @foreach($DB as $key=>$value)
  <tr>
    <td>{{$i}}</td>
    <td>{{$value->product_id}}</td>
    <td>{{$value->product_name}}</td>
    <td>{{number_format($value->price).' VND'}}</td>
    <td>{{$value->soluong}}</td>
    <td><img src="{{$value->tmp}}"width=50px></td>
  </tr>
  <?php $i++;?>
  @endforeach
  @foreach($DB2 as $key=>$value)
  <tr>
    <th>Tổng : </th>
    <th>{{number_format($value->tongtien) .'  VND'}}</th>
    <th>(Bao gồm cả phụ phi VAT)</th>
  </tr>
  @endforeach
</table>
<h3 style="text-align:center">Người nhận</h3>
<table class="table table-dark table-striped">
  <tr>
    <th>STT</th>
    <th>ID người nhận</th>
    <th>Tên người nhận</th>
    <th>Địa chỉ </th>
    <th>Số điện thoại</th>
    <th>Ghi chú</th>
    <th>Kiểu thanh toán</th>
  </tr>
  <?php $i=1;?>

  @foreach($DB1 as $key=>$value)
  <tr>
    <td>{{$i}}</td>
    <td>{{$value->id}}</td>
    <td>{{$value->tenkhachhang}}</td>
    <td>{{$value->diachi}}</td>
    <td>{{$value->sdt}}</td>
    <td>{{$value->ghichu}}</td>
    <td>@if($value->kieuthanhtoan==1){{'Tiền mặt'}} @endif
        @if($value->kieuthanhtoan==2){{'Chuyển khoản'}} @endif
   </td>
  </tr>
  <?php $i++;?>
  @endforeach

</table>
@endsection
