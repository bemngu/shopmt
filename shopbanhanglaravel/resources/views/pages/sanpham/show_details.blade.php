
@extends('layout')
@section('content')
@foreach($product_details as $key => $value) 
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">


		<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img style=" height:337px" src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt="" />
							
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">

										<div class="item active">
										  <a href=""><img src="{{URL::to('public/frontend/images/similar1.jpg')}}" alt=""></a>
										  <a href=""><img src="{{URL::to('public/frontend/images/similar2.jpg')}}" alt=""></a>
										  <a href=""><img src="{{URL::to('public/frontend/images/similar3.jpg')}}" alt=""></a>
										</div>
									</div>

								  <!-- Controls -->
								
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2 style="color: orange;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 25px;">{{$value->product_name}}</h2>
								<!-- <p>Mã ID: {{$value->product_id}}</p> -->
								<img src="images/product-details/rating.png" alt="" />
								
								<form action="{{URL::to('/save-cart')}}" method="POST">
									@csrf
									<input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_quantity}}" class="cart_product_quantity_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                                          
								<span>
									<span style="    color: black;
    font-size: 20px;
    transform: translateY(5px);">{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>
								
									<label>Số lượng:</label>
									<input name="qty" type="number" min="1" class="cart_product_qty_{{$value->product_id}}"  value="1" />
									<input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
								</span>
								<input type="button" value="Thêm giỏ hàng" class="btn btn-primary btn-sm add-to-cart" data-id_product="{{$value->product_id}}" name="add-to-cart">
								</form>

							
								<p><b>Số lượng tối đa:</b> {{$value->product_quantity}}</p>
								<p><b>Thương hiệu:</b> {{$value->brand_name}}</p>
								<p><b>Danh mục:</b> {{$value->category_name}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li  class="active" ><a href="#details" data-toggle="tab">Mô tả</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
							
								<li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in " id="details" >
								<p>{!!$value->product_desc!!}</p>
								
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<p>{!!$value->product_content!!}</p>
								
						
							</div>
							
							<div class="tab-pane fade " id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>VIE</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>16:09 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>16 SEP 2002</a></li>
									</ul>
									<style type="test/css">
										.style_comment{
											border:1px solid #ddd;
											border-radius: 10px;
											background: #F0F0E9;
										}
									</style>
									<form >
									@csrf
									<input type="hidden" name="comment_product_id" class=" comment_product_id" value="{{$value->product_id}}">
									<div id="comment_show"></div>
								
								</form>
								
									<p><b>Viết đánh giá của bạn</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Tên bạn"/>
											<input type="email" placeholder="Địa chỉ Email"/>
										</span>
										<textarea name="" ></textarea>
										<b>Đánh giá: </b> <img src="{{asset('public/fontend/images/rating.png')}}" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Lưu
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
	@endforeach

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
							@foreach($relate as $key => $lienquan)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											 <div class="single-products">
		                                        <div class="productinfo text-center product-related">
		                                            <img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt="" />
		                                            <h2>{{number_format($lienquan->product_price,0,',','.').' '.'VNĐ'}}</h2>
		                                            <p>{{$lienquan->product_name}}</p>
		                                         
		                                        </div>
		                                      
                                			</div>
										</div>
									</div>
							@endforeach		

								
								</div>
									
							</div>
									
						</div>
					</div><!--/recommended_items-->	

		</div>
		<div class="col-sm-1"></div>	
	</div>
</div>
					{{--   <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$relate->links()!!}
                      </ul> --}}

@endsection