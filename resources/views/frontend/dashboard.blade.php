
 @extends('frontend.master')
 @section('frontend_content')
    <!-- slider start -->
    <div class="slider-area ">
        <div class="slider-active dot-style ">
            @foreach ($bannerproducts as $bannerproduct )
            <div class="single-slider slider-height d-flex align-items-center "

                style="background-image:url( {{$bannerproduct->image}}) ">

            </div>
            @endforeach


            {{-- <div class="single-slider slider-height d-flex align-items-center "
                style="background-image:url({{ asset('frontend_asset') }}/img/2.jpg) ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center ">
                            <div class="slider-content ">
                                <h1 data-animation="fadeInLeft " data-delay="1s ">best pen for every hadwriting style
                                </h1>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-none d-lg-block ">
                            <div class="slide-img d-flex justify-content-end slider-full " data-animation="fadeInRight "
                                data-delay="2.5s ">
                                <img src="{{ asset('frontend_asset') }}/img/tools.png " alt=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center "
                style="background-image:url({{ asset('frontend_asset') }}/img/1.jpg) ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center ">
                            <div class="slider-content ">
                                <h1 data-animation="fadeInLeft " data-delay="1s ">best pen for every hadwriting style
                                </h1>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-none d-lg-block ">
                            <div class="slide-img d-flex justify-content-end slider-full " data-animation="fadeInRight "
                                data-delay="2.5s ">
                                <img src="{{ asset('frontend_asset') }}/img/table.png " alt=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- slider end -->


    <!-- banner start -->
    <div class="banner-area pt-3">
        <div class="container ">
            <div class="row ">
                <div class="col-xl-12 ">
                    <div class="banner-photo alert alert-warning alert-dismissible fade show" role="alert">
                        <a href="# "><img class="w-100 " src="{{ asset('frontend_asset') }}/img/banner.jpg " alt=" "></a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end-->


    <!-- arrival start -->

    <section class="newArrival-sec container section-padding">
        <div class="row align-items-center ">
            <div class="col-sm-6">
                <div class="section-heading">
                    <h4>New Arrivals</h4>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="section-heading d-flex justify-content-end">
                    <a href="#">see more <i class="fas fa-chevron-right "></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($latest_products as $latest_product )
            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="card newarrivalCard">
                    {{-- <h1>{{ $latest_product->slug }}</h1> --}}

                    <a href="{{route('product.details.show',$latest_product->slug)}}" class="arrivalImage">
                        <img src="{{ asset('public/files/product/'. $latest_product->thumbnail) }}" class="card-img-top" alt="...">
                    </a>

                    <div class="ArrivalOfferSpan">

                        <span class="newArrivalsec-offer">
                            {{ number_format(($latest_product->discount_price*100)/$latest_product->selling_price ) }}%

                        </span>
                    </div>
                    <div class="ArrivalOfferSpan2">
                        <span class="newArrivalsec-offer">
                            Hot Sale
                        </span>
                    </div>
                    <div class="hoverIconSec">
                        <ul>
                            <li><a href="#"><i class="far fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="far fa-search-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body">

                       <a class="product-info" href="#" style="color: black;  font-size: 18px;tranaction:.5s;">{{ $latest_product->name }}</a>
                        <div class="color-select">
                            <a class="cardItemColor-select blue" href="#">o</a>
                            <a class="cardItemColor-select sky" href="#">o</a>
                            <a class="cardItemColor-select orange" href="#">o</a>
                        </div>

                        <div class="New-arrivalPrice-sec">
                            @if($latest_product->discount_price==NULL)
                            <span class="currentPrice">${{$y=$latest_product->selling_price}}</span>
                            @else
                            <span class="currentPrice">${{ number_format($latest_product->selling_price-$latest_product->discount_price ) }}</span>
                            <span class="netPrice">${{$latest_product->selling_price}}</span>
                            @endif
                        </div>

                    </div>


                </div>




            </div>
            @endforeach




            {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card newarrivalCard">
                    <a href="#" class="arrivalImage">
                        <img src="{{ asset('frontend_asset') }}/img/product-2.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="ArrivalOfferSpan">
                        <span class="newArrivalsec-offer">
                            -15%
                        </span>
                    </div>
                    <div class="ArrivalOfferSpan2">
                        <span class="newArrivalsec-offer">
                            Hot Sale
                        </span>
                    </div>
                    <div class="hoverIconSec">
                        <ul>
                            <li><a href="#"><i class="far fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="far fa-search-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Mini Drone</a></h5>
                        <div class="color-select">
                            <a class="cardItemColor-select blue" href="#">o</a>
                            <a class="cardItemColor-select sky" href="#">o</a>
                            <a class="cardItemColor-select orange" href="#">o</a>
                        </div>
                        <div class="New-arrivalPrice-sec">
                            <span class="currentPrice">$85.00</span>
                            <span class="netPrice">$100.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card newarrivalCard">
                    <a href="#" class="arrivalImage">
                        <img src="{{ asset('frontend_asset') }}/img/product-3.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="ArrivalOfferSpan">
                        <span class="newArrivalsec-offer">
                            -15%
                        </span>
                    </div>
                    <div class="ArrivalOfferSpan2">
                        <span class="newArrivalsec-offer">
                            Hot Sale
                        </span>
                    </div>
                    <div class="hoverIconSec">
                        <ul>
                            <li><a href="#"><i class="far fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="far fa-search-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> --}}
                    {{-- <div class="card-body">
                        <h5 class="card-title"><a href="#">Single Sofa</a></h5>
                        <div class="color-select">
                            <a class="cardItemColor-select blue" href="#">o</a>
                            <a class="cardItemColor-select sky" href="#">o</a>
                            <a class="cardItemColor-select orange" href="#">o</a>
                        </div>
                        <div class="New-arrivalPrice-sec">
                            <span class="currentPrice">$85.00</span>
                            <span class="netPrice">$100.00</span>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card newarrivalCard">
                    <a href="#" class="arrivalImage">
                        <img src="{{ asset('frontend_asset') }}/img/product-4.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="ArrivalOfferSpan">
                        <span class="newArrivalsec-offer">
                            -15%
                        </span>
                    </div>
                    <div class="ArrivalOfferSpan2">
                        <span class="newArrivalsec-offer">
                            Hot Sale
                        </span>
                    </div>
                    <div class="hoverIconSec">
                        <ul>
                            <li><a href="#"><i class="far fa-shopping-cart" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="far fa-search-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Stylish Bag Pack</a></h5>
                        <div class="color-select">
                            <a class="cardItemColor-select blue" href="#">o</a>
                            <a class="cardItemColor-select sky" href="#">o</a>
                            <a class="cardItemColor-select orange" href="#">o</a>
                        </div>
                        <div class="New-arrivalPrice-sec">
                            <span class="currentPrice">$85.00</span>
                            <span class="netPrice">$100.00</span>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>


    </section>

    <!-- arrival end -->

    <!-- banner start -->
    <div class="banner-area pt-3 ">
        <div class="container ">
            <div class="row ">
                <div class="col-xl-12 ">
                    <div class="banner-photo alert alert-warning alert-dismissible fade show" role="alert">
                        <a href="# "><img class="w-100 " src="{{ asset('frontend_asset') }}/img/banner-2.jpg " alt=" "></a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end-->

    <!-- special-offers start -->
    <div class="best-selling-area special-offers-area section-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-sm-6">
                    <div class="section-heading">
                        <h4>special-offers!</h4>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-heading d-flex justify-content-end">
                        <a href="#">see more <i class="fas fa-chevron-right "></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                            <ul class="special-info d-flex justify-content-between w-100">
                                <li>hot sale</li>
                                <li>-15%</li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <a href="#">
                                <p class="product-info">
                                    Vintage Typewriter to post awesome stories about UI design and webdev.
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                    <li class="product_offer">50% off</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    Eligible for Shipping To Mars or somewhere else
                                </span>
                            </a>
                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-2.jpg" alt="">
                            <ul class="special-info d-flex justify-content-between w-100">
                                <li>big sale</li>
                                <li>-15%</li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Lee Pucker design. Leather botinki for handsome designers. Free shipping.
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                    <li class="product_offer">50% off</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    1258 bids, 359 watchers
                                    $5.95 for shipping
                                </span>
                            </a>
                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-3.jpg" alt="">
                            <ul class="special-info d-flex justify-content-between w-100">
                                <li>new</li>
                                <li>-15%</li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Timesaving kitten to save months on development. Playful, cute, cheap!
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    Eligible for nothing :(
                                </span>
                            </a>
                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                            <ul class="special-info d-flex justify-content-between w-100">
                                <li> sale</li>
                                <li>-15%</li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Plastic useless plugs and tubes for high-fidelity prototyping. Fit & Eat!
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    Wordwide shitting available
                                    Buyers protection possible!
                                </span>
                            </a>
                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- special-offers end -->

    <!-- banner start -->
    <div class="banner-area pt-3 ">
        <div class="container ">
            <div class="row ">
                <div class="col-xl-12 ">
                    <div class="banner-photo alert alert-warning alert-dismissible fade show" role="alert">
                        <a href="# "><img class="w-100 " src="{{ asset('frontend_asset') }}/img/banner-2.jpg " alt=" "></a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end-->

    <!-- best selling start -->
    <div class="best-selling-area section-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-sm-6">
                    <div class="section-heading">
                        <h4>best selling products</h4>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-heading d-flex justify-content-end">
                        <a href="#">see more <i class="fas fa-chevron-right "></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4  col-md-6">
                    <div class="single-best-selling">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Vintage Typewriter to post awesome stories about UI design and webdev.
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                    <li class="product_offer">50% off</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    Eligible for Shipping To Mars or somewhere else
                                </span>
                            </a>
                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-2.jpg" alt="">
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Lee Pucker design. Leather botinki for handsome designers. Free shipping.
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                    <li class="product_offer">50% off</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    1258 bids, 359 watchers
                                    $5.95 for shipping
                                </span>
                            </a>
                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-3.jpg" alt="">
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                            <p class="product-info">
                                Timesaving kitten to save months on development. Playful, cute, cheap!
                            </p>
                            <ul class="product-price d-flex align-items-center justify-content-between">
                                <li>$1251</li>
                            </ul>
                            <span class="product-price-sub_content">
                                Eligible for nothing :(
                            </span>
                            </a>
                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Plastic useless plugs and tubes for high-fidelity prototyping. Fit & Eat!
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    Wordwide shitting available
                                    Buyers protection possible!
                                </span>
                            </a>

                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best selling end -->

    <!-- banner start -->
    <div class="banner-area pt-3">
        <div class="banner-photo alert alert-warning alert-dismissible fade show" role="alert">
            <a href="# "><img class="w-100 " src="{{ asset('frontend_asset') }}/img/banner.jpg " alt=" "></a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <!-- banner end-->

    <!-- best selling start -->
    <div class="best-selling-area section-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-sm-6">
                    <div class="section-heading">
                        <h4>popular products</h4>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-heading d-flex justify-content-end">
                        <a href="#">see more <i class="fas fa-chevron-right "></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling popular_product">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Vintage Typewriter to post awesome stories about UI design and webdev.
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                    <li class="product_offer">50% off</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    Eligible for Shipping To Mars or somewhere else
                                </span>
                            </a>

                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling popular_product">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-2.jpg" alt="">
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Lee Pucker design. Leather botinki for handsome designers. Free shipping.
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                    <li class="product_offer">50% off</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    1258 bids, 359 watchers
                                    $5.95 for shipping
                                </span>
                            </a>

                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling popular_product">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-3.jpg" alt="">
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Timesaving kitten to save months on development. Playful, cute, cheap!
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    Eligible for nothing :(
                                </span>
                            </a>

                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="single-best-selling popular_product">
                        <div class="product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="product-content">
                            <a href="#" class="cardLink-a">
                                <p class="product-info">
                                    Plastic useless plugs and tubes for high-fidelity prototyping. Fit & Eat!
                                </p>
                                <ul class="product-price d-flex align-items-center justify-content-between">
                                    <li>$1251</li>
                                </ul>
                                <span class="product-price-sub_content">
                                    Wordwide shitting available
                                    Buyers protection possible!
                                </span>
                            </a>

                            <ul class="product_cart d-flex align-items-center justify-content-between">
                                <li>
                                    <i class=" fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <span>4.99</span>
                                </li>
                                <li>
                                    <i class="fas fa-heart "></i> wish
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best selling end -->

    <!-- delivery start -->
    <div class="delivery-area" style="background-color: #15131D;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-sm-6 col-6">
                    <div class="single-delivery d-flex">
                        <div class="delivery-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="delivery-content">
                            <h4>fast shipping</h4>
                            <p>Carrier information</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-sm-6 col-6">
                    <div class="single-delivery d-flex">
                        <div class="delivery-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="delivery-content">
                            <h4>ONLINE PAYMENT</h4>
                            <p>Payment methods</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-sm-6 col-6">
                    <div class="single-delivery d-flex">
                        <div class="delivery-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="delivery-content">
                            <h4>24/7 SUPPORT</h4>
                            <p>Unlimited help desk</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-sm-6 col-6">
                    <div class="single-delivery d-flex">
                        <div class="delivery-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="delivery-content">
                            <h4>100% SAFE</h4>
                            <p>View our benefits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delivery end -->
@endsection
