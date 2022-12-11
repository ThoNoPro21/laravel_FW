
@extends('admin/home/admin')
@section('content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phẩm

                </header>

                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" action="{{URL::to('/save_product')}}" method="post">
                            @csrf <!-- {{ csrf_field() }} -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá khuyến mãi</label>
                                <input type="text" name="price_sale" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">số lượng</label>
                                <input type="text" name="so_luong" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" id="exampleInputFile" name="product_pic">
                            </div>

                            <button type="submit"  class="btn btn-info">Submit</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>

</div>
@endsection
