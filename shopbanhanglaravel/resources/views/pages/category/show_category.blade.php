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
                       <div class="fb-share-button" data-href="http://localhost/shop/shopbanhanglaravel/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        @foreach($category_name as $key => $name)
                       
                        <h2 class="title text-center">{{$name->category_name}}</h2>

                        @endforeach
                        @foreach($category_by_id as $key => $product)
                        <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                        <div class="col-sm-4">
                             <div class="product-image-wrapper">
                           
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_quantity_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                            <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                                <h2>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>
                                                <p>{{$product->product_name}}</p>

                                             
                                             </a>
                                            <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                            </form>

                                        </div>
                                      
                                </div>
                           
                              
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div><!--features_items-->
            
                   <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$category_by_id->links()!!}
                    </ul>
             
        <!--/recommended_items-->
@endsection