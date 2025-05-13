
$(document).ready(function(){
    $('.main-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3500,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{ items:1, nav:false },
            600:{ items:1 },
            1000:{ items:1 }
        }
    });
  });
$(document).ready(function(){
    $('.banner-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3500,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{ items:1, nav:false },
            600:{ items:1 },
            1000:{ items:1 }
        }
    });
  });


  