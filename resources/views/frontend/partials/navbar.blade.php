  <!-- Fixed Social Start -->
  <div id="fixed-social">
    <div>
        <a href="#" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
    </div>
    <div>
        <a href="#" class="fixed-twitter" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
    </div>
    <div>
        <a href="#" class="fixed-gplus" target="_blank"><i class="fa fa-google"></i> <span>Google+</span></a>
    </div>
</div>
<!-- Fixed Social End -->

<!-- header start -->
<header>
    <!-- top-bar start -->
    <div class="header-area">
        <div class="container  header-NAV">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <ul class="top-header-left d-flex">
                        <li><a href="#">Chat with us</a></li>
                        <li>+880 1733714091</li>
                        <li>info@pro.com</li>
                    </ul>
                </div>
                <div class="col-xl-6">
                    <ul class="top-header-right d-flex">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top-bar end -->

    <!-- header search start -->
    <div class="header-search-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('frontend_asset') }}/img/logo.png" alt="e-commerce-logo"></a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="header-search">
                        <form>
                            <div class="search-category">
                                <select class="form-select">
                                    <option selected>All Categories</option>
                                    <option value="1">Winter Collection</option>
                                    <option value="2">Mobiles</option>
                                    <option value="3">Computers</option>
                                </select>
                            </div>
                            <div class="header-search-box">
                                <input type="search" placeholder="Search Products,Categories">
                            </div>
                            <div class="header-search-icon">
                                <i class="fa fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3">
                    <ul class="header-search-right d-flex">
                        <li data-bs-toggle="modal" data-bs-target="#cartModal"><sub>4</sub><i
                                class="fa fa-shopping-basket"></i> </li>
                        <li id="currency"><select class="form-select">
                                <option selected>BDT</option>
                                <option value="1">India</option>
                            </select>
                        </li>
                        <li id="userProfile">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">User</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header search end -->
    <!-- Cart Modal -->
    <div class="modal cartModal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Shopping cart</h5>
                    <span type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                    <div class="single-cart-product alert alert-dismissible fade show" role="alert">
                        <div class="single-cart-image">
                            <img src="{{ asset('frontend_asset') }}/img/product-1.jpg" alt="">
                        </div>
                        <div class="single-product-content">
                            <h6>iPhone 11</h6>
                            <ul class="single-cart-product-list">
                                <li><span>Farm : </span>Tharamis Farm</li>
                                <li><span>Freshness : </span>1 day old</li>
                            </ul>
                            <div class="single-product-cart-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-cart-product-price">
                                <h5>$132.00 <del>$48.56</del></h5>
                                <div class="cartIncreDre">
                                    <a href="#" class="cartIncreDre__minus"><span>-</span></a>
                                    <input name="cartIncreDre" type="text" class="cartIncreDre__input" value="1">
                                    <a href="#" class="cartIncreDre__plus"><span>+</span></a>
                                </div>
                            </div>

                        </div>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                </div>
                <div class="modal-footer cartContinue">
                    <span class="continue-shipping">
                        <a href="#">Continue shopping</a>
                    </span>
                    <button type="button" class="btn">Go To Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <!-- main menu start -->
    <div class="main-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="menu-bar ">
                        <ul class="d-flex">
                            <li class="allCategories ">
                                <div class="dropdown">
                                    <button class=" dropdown-toggle" type="button" id="categoriesMenu"
                                        data-bs-toggle="dropdown" aria-expanded="false">Categories </button>
                                    <ul class="dropdown-menu" aria-labelledby="categoriesMenu">
                                        <li><a class="dropdown-item" href="#">Winter Collection <i
                                                    class="fas fa-chevron-right "></i></a>
                                            <div class="megaMenu">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single-submenu">
                                                            <h5>TRADITIONAL FASHION</h5>
                                                            <ul>
                                                                <li><a href=
                                                                    "#">Panjabis and Sherwanis</a></li>
                                                                <li><a href="#">Fatuas and Kurtas</a></li>
                                                                <li><a href="#">Waistcoats</a></li>
                                                                <li><a href="#">Unstitched Fabrics</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="single-submenu">
                                                            <h5>SHOES</h5>
                                                            <ul>
                                                                <li><a href="#">Boots</a></li>
                                                                <li><a href="#">Flip-Flops</a></li>
                                                                <li><a href="#">House Slippers</a></li>
                                                                <li><a href="#">Formal Shoes</a></li>
                                                                <li><a href="#">Sandals</a></li>
                                                                <li><a href="#">Sneakers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="single-submenu">
                                                            <h5>ACCESSORIES</h5>
                                                            <ul>
                                                                <li><a href="#">Ties and Cufflinks</a></li>
                                                                <li>
                                                                    <a href="#">Wallets & Card Holders</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Eyewear</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Bags</a>
                                                                </li>
                                                                <li><a href="#">Caps & Hats</a></li>
                                                                <li><a href="#">Jewelry</a></li>
                                                                <li><a href="#">Other Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="single-submenu">
                                                            <h5>INNER WARE</h5>
                                                            <ul>
                                                                <li><a href="#">Panjabis and Sherwanis</a></li>
                                                                <li><a href="#">Fatuas and Kurtas</a></li>
                                                                <li><a href="#">Waistcoats</a></li>
                                                                <li><a href="#">Unstitched Fabrics</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Men's Fashions <i
                                                    class="fas fa-chevron-right "></i></a></li>
                                        <li><a class="dropdown-item" href="#">Women's Fashions <i
                                                    class="fas fa-chevron-right "></i></a></li>
                                        <li><a class="dropdown-item" href="#">Health and Beauty <i
                                                    class="fas fa-chevron-right "></i></a></li>
                                        <li><a class="dropdown-item" href="#">Mobiles <i
                                                    class="fas fa-chevron-right "></i></a></li>
                                        <li><a class="dropdown-item" href="#">Computers <i
                                                    class="fas fa-chevron-right "></i></a></li>
                                        <li><a class="dropdown-item" href="#">Electronics <i
                                                    class="fas fa-chevron-right "></i></a></li>
                                        <li><a class="dropdown-item" href="#">Accessories <i
                                                    class="fas fa-chevron-right "></i></a></li>
                                        <li><a class="dropdown-item" href="#">All Category <i
                                                    class="fas fa-chevron-right "></i></a></li>
                                    </ul>
                                </div>
                            </li>

                            <nav class="navbar navbar-expand-lg navbar-light" id="navbar-mobileView">
                                <div class="container-fluid">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <div class="dropdown">
                                                    <button class=" dropdown-toggle" type="button" id="FashionMenu"
                                                        data-bs-toggle="dropdown" aria-expanded="false">Fashion </button>
                                                    <ul class="dropdown-menu" aria-labelledby="categoriesMenu">
                                                        <li><a class="dropdown-item" href="#">Winter Collection <i
                                                                    class="fas fa-chevron-right "></i></a>
                                                            <div class="megaMenu">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="single-submenu">
                                                                            <h5>TRADITIONAL FASHION</h5>
                                                                            <ul>
                                                                                <li><a href="#">Panjabis and Sherwanis</a></li>
                                                                                <li><a href="#">Fatuas and Kurtas</a></li>
                                                                                <li><a href="#">Waistcoats</a></li>
                                                                                <li><a href="#">Unstitched Fabrics</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="single-submenu">
                                                                            <h5>SHOES</h5>
                                                                            <ul>
                                                                                <li><a href="#">Boots</a></li>
                                                                                <li><a href="#">Flip-Flops</a></li>
                                                                                <li><a href="#">House Slippers</a></li>
                                                                                <li><a href="#">Formal Shoes</a></li>
                                                                                <li><a href="#">Sandals</a></li>
                                                                                <li><a href="#">Sneakers</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="single-submenu">
                                                                            <h5>ACCESSORIES</h5>
                                                                            <ul>
                                                                                <li><a href="#">Ties and Cufflinks</a></li>
                                                                                <li>
                                                                                    <a href="#">Wallets & Card Holders</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">Eyewear</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">Bags</a>
                                                                                </li>
                                                                                <li><a href="#">Caps & Hats</a></li>
                                                                                <li><a href="#">Jewelry</a></li>
                                                                                <li><a href="#">Other Accessories</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="single-submenu">
                                                                            <h5>INNER WARE</h5>
                                                                            <ul>
                                                                                <li><a href="#">Panjabis and Sherwanis</a></li>
                                                                                <li><a href="#">Fatuas and Kurtas</a></li>
                                                                                <li><a href="#">Waistcoats</a></li>
                                                                                <li><a href="#">Unstitched Fabrics</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Men's Fashions <i
                                                                    class="fas fa-chevron-right "></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Women's Fashions <i
                                                                    class="fas fa-chevron-right "></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Health and Beauty <i
                                                                    class="fas fa-chevron-right "></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Mobiles <i
                                                                    class="fas fa-chevron-right "></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Computers <i
                                                                    class="fas fa-chevron-right "></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Electronics <i
                                                                    class="fas fa-chevron-right "></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Accessories <i
                                                                    class="fas fa-chevron-right "></i></a></li>
                                                        <li><a class="dropdown-item" href="#">All Category <i
                                                                    class="fas fa-chevron-right "></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#">Health<i class="fas fa-chevron "></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#">Electronics <i class="fas fa-chevron "></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#">Cameras <i class="fas fa-chevron "></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#">Shoes <i class="fas fa-chevron "></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#">Babies <i class="fas fa-chevron "></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#">Accessories <i class="fas fa-chevron "></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu end-->

</header>
<!-- header end -->
