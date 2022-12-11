@extends('admin/home/admin')
@section('content')
<h3 style="text-align:center">Đơn hàng</h3>
<table class="table table-dark table-striped">
  <tr>
    <th>STT</th>
    <th>ID đơn hàng</th>
    <th>Mã đơn hàng</th>
    <th>Tình trạng</th>
    <th>Trạng thái</th>
  </tr>
  <?php $i=1;?>
  @foreach($DB as $key=>$value)
  <tr>
    <td>{{$i}}</td>
    <td>{{$value->donhang_id}}</td>
    <td>{{$value->madonhang}}</td>
    <td style="color:green;font-weight:bold">{{$value->tinhtrang==0?'Đơn hàng mới':'Chờ vận chuyển'}}</td>
    <td style="color:blue;font-weight:bold">{{$value->tinhtrang==0?'Chờ xét duyệt':'Xét duyệt thành công'}}</td>
  </tr>
  <?php $i++;?>
  @endforeach
</table>
@endsection
