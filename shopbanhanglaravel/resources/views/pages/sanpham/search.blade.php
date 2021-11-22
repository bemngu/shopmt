@extends('layout')
@section('content')


<div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div style="margin-top:67px"; class="left-sidebar">
                        <h3 class="h3">Danh mục sản phẩm</h3>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                          @foreach($category as $key => $cate) 
                          
                            <div class="panel panel-default">
                                <div style="background: rgb(236 230 216)" class="panel-heading">
                                    <h4 class="panel-title"><a style="color:black; "; href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div> 
                         @endforeach
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h3 class="h3">Thương hiệu sản phẩm</h3>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key => $brand)
                                    <li><a style="color:black;background: rgb(236 230 216); font-weight:500" href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li> 
                                   @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        <style>
                            h3.h3 {
                                transform: translateY(-16px);
                                    color: orange;
                                    font-size: 20px;
                                    margin-left: 27px;
}
                        </style>
                     
                    
                    </div>
                </div>
              <!-- cot9 -->
              <div style="background: rgb(236 230 216)" class="col-sm-9 padding-right">
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Kết quả tìm kiếm</h2>
                       @foreach($search_product as $key => $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                             <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                            <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                        </div>
                                      
                                </div>
                            </a>
                                
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items--> 
                   
        <!--/recommended_items-->
@endsection