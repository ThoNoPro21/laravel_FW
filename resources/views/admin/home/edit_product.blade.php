@extends('admin/home/admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sản phẩm

                </header>

            
                <div class="panel-body">
                    @foreach($edit_product as $key => $edit_value)


                    <div class="position-center">
                        <form role="form" action="{{URL::to('/update_product/'.$edit_value->idLT_gaming)}}" method="post">
                            @csrf <!-- {{ csrf_field() }} -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input type="text" name="product_name" value="{{$edit_value->nameLT_gaming}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" name="price" value="{{$edit_value->price}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá khuyến mãi</label>
                                <input type="text" name="price_sale" value="{{$edit_value->price_sale}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">số lượng</label>
                                <input type="text" name="so_luong" value="{{$edit_value->soluong}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" id="exampleInputFile" name="product_pic" value="{{$edit_value->tmp}}">
                            </div>

                            <button type="submit"  class="btn btn-info">Cập nhật</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>

</div>
@endsection
