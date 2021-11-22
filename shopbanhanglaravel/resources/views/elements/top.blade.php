
<div class="header-middle"><!--header-middle-->
            <div class="container">
                <divclass="row">
                    <div class="col-sm-7">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trang-chu')}}"><img style="width:100px;transform: translateX(-49px);"src="{{('public/frontend/images/logo.png')}}" alt="" /></a>
                        </div>
                        <div style="margin-top: 37px; margin-left: -24px" class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a style="color: black; font-weight:100" href="{{URL::to('/trang-chu')}}" class="active">HOME</a></li>
                                <li  class="dropdown"><a style="      color: black;    font-weight: 400"; href="#">PRODUCT<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($category as $key => $danhmuc)
                                        <li style="background-color: #fffbf2;"><a style=" color:black ;font-weight:500; font-size: 15px" href="{{URL::to('/danh-muc/'.$danhmuc->slug_category_product)}}">{{$danhmuc->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li> 
                              <style>
                                  .mainmenu ul li a{
                                    list-style: none;
                                    font-size: 22px;
                                    font-weight: 550;
                                    letter-spacing: 1px;
                                    margin: 1px 0;  
                                    font-family: bebas_neuebold;
                                    font-variant: unicase;  
                                  }
                              </style>
                                 <li><a style="      color: black;    font-weight: 400"; href="{{URL::to('/blog')}}">BLOG</a></li>
                                 <li><a style="      color: black;    font-weight: 400"; href="{{URL::to('/menu')}}">MENU</a></li>
                               
                          <li>
                                 <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ //có đăng nhập mà k có ttin ng vận chuyển và chuyển đến trang và bắt điền ttin vận chuyển
                                 ?>
                                     <li><a style="color: black;    font-weight: 400"; href="{{URL::to('/checkout')}}">CHECKOUT</a></li>
                          
                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){ //có đăng nhập và có tt ng vận chuyển trang thanhh toán
                                 ?>
                                 <li><a style="color: black;    font-weight: 400"; href="{{URL::to('/payment')}}"> CHECKOUT</a></li>
                           <?php 
                                }else{  //k có đăng nhập k có tt
                                ?>
                                 <li><a style="  color: black;font-weight: 400"; href="{{URL::to('/dang-nhap')}}"> CHECKOUT</a></li>
                                <?php
                                 }
                                ?>
                          </li>
                          
                            </ul>
                        </div>
                    </div>
                     <div style="margin-top:32px;width:285px; transform: translateX(18px);" class="col-sm-3">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" style="color:black "name="keywords_submit" placeholder="Product name search"/>
                            <input type="submit" style="margin-top:0;color:black;    width: 74px;border-radius: 3px; font-weight:500" name="search_items" class="btn btn-primary btn-sm" value="Search">
                        </div>
                        </form>
                    </div>
                            <div class="col-sm-2">
                    <li style="list-style: none;color: #151111;width: 56px;font-size: 33px;transform: translateY(26px);margin-left: 19px;
                            "><a href="{{URL::to('/gio-hang')}}"><i style="color: #030202; font-size: 30px" class="fa fa-shopping-cart"></i></a></li>
                        <div style="width:100px;margin-top: 29px;" class="shop-menu pull-right">
                                                <ul class="nav navbar-nav">                            
                                                    <?php
                                                    $customer_id = Session::get('customer_id');
                                                    if($customer_id!=NULL){ 
                                                    ?>
                                                    <li><a style="background: #ece6d8;color: black;transform: translateY(-42px);" href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Log out</a></li>
                                     
                                                    <?php
                                                }else{
                                                    ?>
                                                    <li><a style="background: #ece6d8;color: black;transform: translateY(-37px);" href="{{URL::to('/dang-nhap')}}"><i class="fa fa-lock"></i> Log in</a></li>
                                                    <?php 
                                                }
                                                    ?>
                                                
                                                </ul>
                                            </div>
                    </div>
                    </div>
                   
                    
                </div>
            </div>
        </div><!--/header-middle-->
      
    </header><!--/header-->