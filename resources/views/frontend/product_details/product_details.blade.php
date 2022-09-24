@extends('frontend.master')
@section('title')
   details product
@endsection
@section('frontend_head_css')
@endsection
@section('frontend_content')
<!-- Body Section -->
<section class="view-product">
    <!-- product-view start -->
    <div class="product-view-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8">
                    <div class="product-view-leftbar bg-white p-2">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6">
                                <nav class="text-center">
                                    <div class="tab-content" id="nav-tabContent">
                                    <div id="img-container">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><img src="{{ asset('public/files/product/'. $product_detail->thumbnail) }}" alt=""></div>
                                    </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><img src="{{ asset('frontend_asset') }}/img/iphone.jpg" alt=""></div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><img src="{{ asset('frontend_asset') }}/img/iphone.jpg" alt=""></div>
                                    </div>
                                    <div class="nav nav-tabs border-0 " id="nav-tab" role="tablist">
                                        {{-- @foreach ($product_detail as  $product_details) --}}


                                        <button class="nav-link active border-0 p-0 product-small-image" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><img
                                                src="{{ asset('public/files/product/'. $product_detail->thumbnail) }}" alt=""></button>
                                        <button class="nav-link border-0 p-0 product-small-image" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="{{ asset('frontend_asset') }}/img/iphone.png"
                                                alt=""></button>
                                        <button class="nav-link border-0 p-0 product-small-image" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="{{ asset('frontend_asset') }}/img/iphone.png"
                                                alt=""></button>
                                    </div>
                                    {{-- @endforeach --}}
                                </nav>
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <div class="product-review-content">
                                    <span>SKU : CD234R</span>
                                    <h2>iPhone 13 pro </h2>
                                    <div class="review-info d-flex align-items-center">
                                        <div class="product-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h6 class="product-ratting">4.56</h6>
                                        <div class="review-button">
                                            <i class="fa fa-plus-circle"></i>
                                            <button data-bs-toggle="modal" data-bs-target="#reviewModal"  >Add your
                                                review</button>
                                        </div>
                                    </div>
                                    <div class="product-brand">
                                        <p><strong>Brand : </strong><span >Apple</span> In Stock</p>
                                    </div>
                                    <div class="product-amount">
                                        <h3><img src="{{ asset('frontend_asset') }}/img/amount-icon.png" alt="">14721.00</h3>
                                        <del>152.00</del>
                                    </div>
                                    <div class="product-colors d-flex align-items-center">
                                        <h6 class="colors-name m-0">colors : </h6>
                                        <div class="nav nav-tabs p-0 border-0 small-image " id="nav-tab" role="tablist">
                                            <button class="nav-link active border-0 p-0 product-small-image" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                                <img src="{{ asset('frontend_asset') }}/img/iphone.png" alt="">
                                                <small>sierra blue</small>
                                            </button>

                                            <button class="nav-link border-0 p-0 product-small-image" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="{{ asset('frontend_asset') }}/img/iphone.png" alt=""> <small>sierra
                                                    blue</small></button>

                                            <button class="nav-link border-0 p-0 product-small-image" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="{{ asset('frontend_asset') }}/img/iphone.png" alt=""> <small>sierra
                                                    blue</small></button>
                                        </div>
                                    </div>
                                    <div class="product-count">
                                        <div class="quantity">
                                            <a href="#" class="quantity__minus"><span><i
                                                        class="fa fa-minus"></i></span></a>
                                            <input name="quantity" type="text" class="quantity__input" value="1">
                                            <a href="#" class="quantity__plus"><span><i
                                                        class="fa fa-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="product-button">
                                        <a href="#" style="background-color: #FBCC15; color: #000;"><i
                                                class="fa fa-shopping-cart"></i> add to cart</a>
                                        <a href="#" style="background-color: #000; color: #fff;"><i
                                                class="fa fa-shopping-bag"></i> buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-share">
                            <ul>
                                <li class="d-flex align-items-center"><i class="fas fa-share-alt" aria-hidden="true"></i>share
                                    <div class="share-social-links">
                                        <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                        <a href="#" style="color: #DB4A39;"><i class="fa fa-google-plus"
                                                aria-hidden="true"></i></a>
                                        <a href="#" style="color: #1DA1F2;"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="product-details">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#p_details" type="button" role="tab" aria-controls="p_details" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#p_info" type="button" role="tab" aria-controls="p_info" aria-selected="false">More Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#p_policy" type="button" role="tab" aria-controls="p_policy" aria-selected="false">Return Policy</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tabs" data-bs-toggle="pill" data-bs-target="#p_review" type="button" role="tab" aria-controls="p_review" aria-selected="false">Review</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="p_details" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="product-details-content">
                                        <h4>Product Details of Iphone 13 pro</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE Available. Released 2021, September 24/ 5G</li>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                    <li>Announced 2021, September 14</li>
                                                    <li>Available. Released 2021, September 24</li>
                                                    <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="p_info" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <ul class="product-information">
                                        <li><span>Band Name : </span>Fine Tex Bd</li>
                                        <li><span>Fabrics : </span> 100% Cotton</li>
                                        <li><span>Quality : </span>100% export quality.</li>
                                        <li><span>Color : </span>As given picture</li>
                                        <li><span>Size : </span>S, M, L, XL, XXL</li>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam minus temporibus aspernatur unde, in fuga enim harum deleniti voluptas amet nam a at? Illo illum provident, beatae quasi amet temporibus ipsum quod
                                            quo laborum laudantium ratione est commodi aliquam quae assumenda ipsa minus nemo aliquid quidem magni facilis eligendi. Provident?</p>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="p_policy" role="tabpanel" aria-labelledby="pills-contact-tabs">
                                    <div class="product-details-content">
                                        <h4>Product return Policy</h4>
                                        <ul>
                                            <li>Announced 2021, September 14</li>
                                            <li>Available. Released 2021, September 24</li>
                                            <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                            <li>Announced 2021, September 14</li>
                                            <li>Available. Released 2021, September 24</li>
                                            <li>Technology GSM / CDMA / HSPA / EVDO / LTE Available. Released 2021, September 24/ 5G Technology GSM / CDMA / HSPA / EVDO / LTE Available. Released 2021, September 24/ 5G Technology GSM / CDMA / HSPA / EVDO /
                                                LTE Available. Released 2021, September 24/ 5G</li>
                                            <li>Announced 2021, September 14</li>
                                            <li>Available. Released 2021, September 24</li>
                                            <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                            <li>Announced 2021, September 14</li>
                                            <li>Available. Released 2021, September 24</li>
                                            <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                            <li>Announced 2021, September 14</li>
                                            <li>Available. Released 2021, September 24</li>
                                            <li>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="p_review" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="product-rating-info d-flex align-items-center">
                                        <div class="rating-info">
                                            <div class="rating-summery">
                                                <div class="rating-score">4.5<strong>/5</strong></div>
                                                <div class="rating-count">100 ratings</div>
                                            </div>
                                        </div>
                                        <ul class="rating-details">
                                            <li>
                                                <div class="rating-star"> <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rating-percent">100</div>
                                            </li>
                                            <li>
                                                <div class="rating-star"> <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rating-percent">80</div>
                                            </li>
                                            <li>
                                                <div class="rating-star"> <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rating-percent">60</div>
                                            </li>
                                            <li>
                                                <div class="rating-star"> <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rating-percent">40</div>
                                            </li>
                                            <li>
                                                <div class="rating-star"> <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rating-percent">20</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- review modal -->
                        <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewHeading" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="reviewHeading">Your Reviewing: <span> iPhone 13
                                                pro</span></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" method="post">
                                            <ul>
                                                <li><span class="modal-rating-heading">value</span> <span>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span></li>
                                                <li><span class="modal-rating-heading">Quality</span> <span>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span></li>
                                                <li><span class="modal-rating-heading">Price</span> <span>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span></li>
                                                <li class="modalInput"><strong><span class="modal-rating-heading"> Name : </span></strong><input type="text"></li>
                                                <li class="modalInput"><strong><strong><span class="modal-rating-heading"> Review : </span></strong></strong><input type="text"></li>
                                                <p>I Recommend This Product <input type="checkbox" name="" id=""></p>
                                                <input type="submit" value="Submit Review">
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4">
                    <div class="product-view-sidebar bg-white p-3">
                        <div class="product-sidebar-info">
                            <h5>Delivery</h5>
                            <ul>
                                <li><i class="far fa-clock"></i><span>3-7 days</span></li>
                                <li><i class="fas fa-shipping-fast" aria-hidden="true"></i><span>Insite Dhaka</span>
                                </li>
                                <li><i class="far fa-money-bill-alt"></i><span>Cash On delivery Available</span></li>
                            </ul>
                        </div>
                        <div class="product-sidebar-info">
                            <h5>Return & Warranty</h5>
                            <ul>
                                <li><i class="fas fa-reply"></i><span>7 days Return</span></li>
                                <li><i class="fas fa-box"></i><span>2 Year warranty</span></li>
                            </ul>
                        </div>
                        <div class="product-sidebar-info">
                            <h5>Recommended Product</h5>
                            <ul class="product-info">
                                <li><img src="{{ asset('frontend_asset') }}/img/iphone.png" alt="iphone"><span>iPhone 13 pro</span></li>
                                <li><img src="{{ asset('frontend_asset') }}/img/iphone.png" alt="iphone"><span>iPhone 13</span></li>
                                <li><img src="{{ asset('frontend_asset') }}/img/iphone.png" alt="iphone"><span>iPhone 12</span></li>
                                <div class="sidebar-product-btn d-flex justify-content-end pt-2">
                                    <a href="#">see more <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </ul>
                        </div>
                        <div class="product-sidebar-info">
                            <h5>Most Rated</h5>
                            <ul class="product-info">
                                <li>
                                    <img src="{{ asset('frontend_asset') }}/img/iphone.png" alt="iphone">
                                    <span>iPhone 13 pro
                                        <div class="product-review most-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                        </div>
                                    </span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend_asset') }}/img/iphone.png" alt="iphone">
                                    <span>iPhone 13 pro
                                        <div class="product-review most-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                        </div>
                                    </span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend_asset') }}/img/iphone.png" alt="iphone">
                                    <span>iPhone 13 pro
                                        <div class="product-review most-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                        </div>
                                    </span>
                                </li>
                                <div class="sidebar-product-btn d-flex justify-content-end pt-2">
                                    <a href="#">see more <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </ul>
                        </div>
                        <div class="product-share">
                            <ul>
                                <li class="d-flex align-items-center"><i class="fas fa-share-alt"></i>share
                                    <div class="share-social-links">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                        <a href="#" style="color: #DB4A39;"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" style="color: #1DA1F2;"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-view end -->

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

    <!-- related product start -->
    <div class="related-product-area bg-white section-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-xxl-6 col-xl-6">
                    <div class="section-heading">
                        <h4>Related Products!</h4>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6">
                    <div class="section-heading d-flex justify-content-end">
                        <a href="#">see more <i class="fas fa-chevron-right "></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- related product end -->

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

    <!-- related product start -->
    <div class="related-product-area bg-white section-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-xxl-6 col-xl-6">
                    <div class="section-heading">
                        <h4>Man's Product</h4>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6">
                    <div class="section-heading d-flex justify-content-end">
                        <a href="#">see more <i class="fas fa-chevron-right "></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- related product end -->

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

    <!-- related product start -->
    <div class="related-product-area bg-white section-padding">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-xxl-6 col-xl-6">
                    <div class="section-heading">
                        <h4>Women's Products!</h4>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6">
                    <div class="section-heading d-flex justify-content-end">
                        <a href="#">see more <i class="fas fa-chevron-right "></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3">
                    <div class="single-related-product">
                        <div class="related-product-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="related-product-content">
                            <div class="product-tags">iPhone 11</div>
                            <h4 class="related-product-title">Next Generation Invention By Apple</h4>
                            <div class="related-product-price">
                                <span>$200.00 <del>$100.00</del></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- related product end -->


    <!-- delivery start -->
    <div class="delivery-area" style="background-color: #15131D;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3">
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
                <div class="col-xxl-3 col-xl-3">
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
                <div class="col-xxl-3 col-xl-3">
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
                <div class="col-xxl-3 col-xl-3">
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

</body>

</html>
</section>
 @section('frontend_footer_js')
 <script src="https://unpkg.com/js-image-zoom/js-image-zoom.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/js-image-zoom/js-image-zoom.min.js"></script>
 <script>
    var options1 = {
        width: 300,
        zoomWidth: 300,
        offset: {vertical: 0, horizontal:8}
    };

    // If the width and height of the image are not known or to adjust the image to the container of it
    var options2 = {
        fillContainer: true,
        offset: {vertical: 0, horizontal: 10}
    };
    new ImageZoom(document.getElementById("img-container"), options1);

    </script>
  @endsection
@endsection
