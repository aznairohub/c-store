
   @extends('header_footer') 
   @section('user-body')    <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- banner bg main end -->
    <!-- fashion section start -->
    <div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h1 class="fashion_taital">Men & Women Fashion</h1>
                <div class="container">
                    
                    <div class="fashion_section_2">
                        <div class="row">
                            @foreach($result as $value)
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">{{$value->productname}}</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ {{$value->productprice}}</span></p>
                                    <div class="tshirt_img"><img src="/uploads/{{$value->productimage}}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="/addtocart/{{$value->id}}">Buy Now</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    <!-- fashion section end -->

    @endsection