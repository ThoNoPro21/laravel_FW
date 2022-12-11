
<?php
use Gloudemans\Shoppingcart\Facades\Cart;
    $content=Cart::count();
    
  ?>  
      <div class="header">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-mdb-toggle="collapse"
                      data-mdb-target="#navbarTogglerDemo03"
                      aria-controls="navbarTogglerDemo03"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                    <i class="fa-solid fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">T-SHOP</a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link " aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('pc')}}">PC</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="{{route('laptop')}}">Laptop</a>
                        </li>
                      </ul>
                      <form class="d-flex input-group w-auto">
                        <input type="search" class="form-control" placeholder="Tìm kiếm" aria-label="Search"/>
                        <button class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark">
                          Search
                        </button>
                      </form>
      
                      <div class="d-flex align-items-center">
                          <a href="{{route('login')}}" class="btn btn-link px-3 me-2">
                            Login
                          </a>
                          <button type="button" class="btn btn-primary me-3">
                            Sign up for free
                          </button>
                          <ul class="navbar-nav">
                              <!-- Badge -->
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('show_cart')}}">
                               
                                  <span class="badge badge-pill bg-danger">{{$content}}</span>
                                 
                                  <span><i class="fas fa-shopping-cart"></i></span>
                                  
                                </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </nav>
      </div>
  
