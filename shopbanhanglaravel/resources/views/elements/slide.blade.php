<div style="background: black" id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <style type="text/css">
                            img.img.img-responsive.img-slider {
                                height: 350px;
                            }
                        </style>
                        <div class="carousel-inner"> 
                        @php 
                            $i = 0;
                        @endphp
                        @foreach($slider as $key => $slide)
                            @php 
                                $i++;
                            @endphp
                            <div class="item {{$i==1 ? 'active' : '' }}">
                                
                                <div class="col-sm-12">
                                    <img  alt="{{$slide->slider_desc}}" src="{{asset('public/uploads/slider/'.$slide->slider_image)}}" style="height:530px; width:100%"; class="img img-responsive img-slider">
                                    <div style=" right: 56%;   bottom: 190px;    padding-bottom: 30px;" class="carousel-caption">
                                     <div style="    transform: translateX(-196px); width: 348px" class="content">
                                <h3 style=" font-style: oblique;   font-size: 5rem;text-transform: uppercase;color: #fff; font-family: 'Open Sans Condensed'; text-align: left;transform: translateY(61px);">FRESH COFFEE IN THE MORNING</h3>
                             
                                <!-- <a href="#" class="btn">Xem bây giờ</a> -->
                            </div>
                            <div style="transform: translateY(79px);    width: 429px;" class="thep">
              <p style="transform: translateX(-193px);width: 100%;font-size: 15px; font-weight: ighter;line-height: 1.8; color: #eee;font-family: 'FontAwesome';text-align: left;     font-weight: lighter;">With the passion of talented staff and inspirational coffee stories...</p>
                            </div>
                

                            </div>
                                </div>
                            </div>
                        @endforeach  
                       
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <style>
                        i.fa.fa-angle-right {
                          transform: translateX(30px);
                          font-size: 43px;
                        }
                        i.fa.fa-angle-left {
                          transform: translateX(67px);
                          font-size: 43px;
                        }
                    </style>