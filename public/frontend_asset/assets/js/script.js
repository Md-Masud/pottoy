
  
  $(function(){


    // banner slider part start
    $('.banner-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1000,
      dots: false,
      prevArrow: '<i class="fal fa-angle-left"></i>',
      nextArrow: '<i class="fal fa-angle-right right-arr"></i>',
  });
  // banner slider part end

    var mixer = mixitup('.product-grid');


  });