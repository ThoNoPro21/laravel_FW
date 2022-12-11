<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet"  href="../../js/main.js" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC</title>
</head>
<body>
@include('layout.header')
<div class="container">
   
	<div class="bg-white rounded d-flex align-items-center justify-content-between mt-2" id="header">
		<nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto " style="width: 100%;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav d-lg-flex align-items-lg-center">
					<li class="nav-item active">
						<select name="sort" id="sort">
							<option value="" hidden selected>Sort by</option>
							<option value="price">Price</option>
							<option value="popularity">Popularity</option>
							<option value="rating">Rating</option>
						</select>
					</li>
					<li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">
						<div class="d-inline-flex align-items-center mx-lg-2" id="select2">
							<div class="pl-2">Products:</div>
							<select name="pro" id="pro">
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>
						<div class="font-weight-bold mx-2 result">18 from 200</div>
					</li>
					<li class="nav-item d-lg-none d-inline-flex"> </li>
				</ul>
			</div>

		</nav>

		<div class="ml-auto mt-3 mr-2">
			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a>
					</li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">..</a></li>
					<li class="page-item"><a class="page-link" href="#">24</a></li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="content" class="my-5">
		<div id="filterbar" class="collapse">
		</div>
		<div id="products">
			<div class="row mx-0">
				<div class="col-lg-4 col-md-6">
					<div class="card d-flex flex-column align-items-center">
						<div class="product-name">

                            iMac 24 inch M1 2021 4.5K/7-core GPU

                    </div>
						<div class="card-img"> <img src="https://cdn.tgdd.vn/Products/Images/5698/238061/imac-24-icnh-2021-m1-thumb-bac-1-600x600.jpg" alt=""> </div>
						<div class="card-body pt-5">
                            <span>RAM 8GB</span>
                            <span>SSD 256</span>
                            <div>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>


							<div class="d-flex align-items-center price">
								<div class="del mr-2"><span class="text-dark">34.490.000₫</span></div>
								<strong class="price">32.690.000₫</strong>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pt-md-0 pt-3">
					<div class="card d-flex flex-column align-items-center">
						<div class="product-name">
                            HP AIO 24-cb1011d i5 1235U (6K7G6PA)
                        </div>
						<div class="card-img"> <img src="https://cdn.tgdd.vn/Products/Images/5698/287315/hp-aio-24-cb1011d-i5-6k7g6pa-thumb-600x600.jpg" alt="" height="100" id="shirt"> </div>
						<div class="card-body pt-5">
                            <span>RAM 8GB</span>
                            <span>SSD 512 GB</span>
                            <div>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>


							<div class="d-flex align-items-center price">

								<strong class="price">21.890.000₫</strong>
							</div>
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-6 pt-md-0 pt-3">
					<div class="card d-flex flex-column align-items-center">
						<div class="product-name">
                            Asus ExpertCenter AIO E5402WHAT i5 11500B (BA017W)
                        </div>
						<div class="card-img"> <img src="https://cdn.tgdd.vn/Products/Images/5698/275273/asus-expertcenter-aio-e5402what-i5-11500b-8gb-512gb-touch-600x600.jpg" alt="" height="100" id="shirt"> </div>


						<div class="card-body pt-5">
                            <span>RAM 8GB</span>
                            <span>SSD 512 GB</span>
                            <div>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>


							<div class="d-flex align-items-center price">

								<strong class="price">21.490.000₫</strong>
							</div>
						</div>
					</div>
				</div>

                <div class="col-lg-4 col-md-6 pt-md-0 pt-3 mt-2">
					<div class="card d-flex flex-column align-items-center">
						<div class="product-name">
                            Asus AIO V241EAT i3 1115G4 (BA030W)
                        </div>
						<div class="card-img"> <img src="https://cdn.tgdd.vn/Products/Images/5698/275206/asus-aio-v241eat-i3-1115g4-8gb-512gb-238-fullhd-600x600.jpg" alt="" height="100" id="shirt"> </div>

						<div class="card-body pt-5">
                            <span>RAM 8GB</span>
                            <span>SSD 512 GB</span>
                            <div>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                            </div>


							<div class="d-flex align-items-center price">

								<strong class="price">17.590.000₫</strong>
							</div>
						</div>
					</div>
				</div>

                <div class="col-lg-4 col-md-6 pt-md-0 pt-3 mt-2">
					<div class="card d-flex flex-column align-items-center">
						<div class="product-name">
                            Asus AIO V241EAT i3 1115G4 (BA057W)
                        </div>
						<div class="card-img"> <img src="https://cdn.tgdd.vn/Products/Images/5698/275207/asus-aio-v241eat-i3-1115g4-4gb-512gb-238-fulllhd-touch-600x600.jpg" alt="" height="100" id="shirt"> </div>


						<div class="card-body pt-5">
                            <span>RAM 4GB</span>
                            <span>SSD 512 GB</span>
                            <div>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>


							<div class="d-flex align-items-center price">

								<strong class="price">16.990.000₫</strong>
							</div>
						</div>
					</div>
				</div>

                <div class="col-lg-4 col-md-6 pt-md-0 pt-3 mt-2">
					<div class="card d-flex flex-column align-items-center">
						<div class="product-name">

                            iMac 24 inch 2021 M1 4.5K/8-core GPU

                        </div>
						<div class="card-img"> <img src="https://cdn.tgdd.vn/Products/Images/5698/264394/imac-24-inch-2021-45k-m1-256gb-16gb-8-core-gpu-600x600.jpg" alt="" height="100" id="shirt"> </div>


						<div class="card-body pt-5">
                            <span>RAM 16GB</span>
                            <span>SSD 256 GB</span>
                            <div>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>


							<div class="d-flex align-items-center price">

								<strong class="price">42.190.000₫</strong>
							</div>
						</div>
					</div>
				</div>

</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />

</body>
</html>
