$(function(){
    
    
    new WOW().init();
    
    //for bottom to top
    $('.topbtn').click( function(){
        
        $('html,body').animate({
            
            scrollTop : 0
            
        } , 1000);
});
    
    $(window).scroll(function(){
        
        var $dis = $('.topbtn').offset().top;
        
        var $scroll = $(this).scrollTop();
        
        if($scroll >= 200)
            {
                $('.topbtn').fadeIn();
            }
        else{
            $('.topbtn').fadeOut();
        }
        
        
          //for sticky manu
        
        if ($scroll >= $dis) {

            $('.header').addClass('sticky');
        } else {

            $('.header').removeClass('sticky');

        }
    });
    
    //banner
    $('.full_slider').slick({
        infinite: true,
        slidesToScroll: 1,
        slidesToShow: 1,
        fade: true,
        cssEase: 'linear',
        prevArrow: '<i class="fas fa-arrow-left sliderprev"></i>',
        nextArrow: '<i class="fas fa-arrow-right slidernext"></i>',
        autoplay: true,
        autoplaySpeed: 1000
    });
    
  $('.full_feature').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,

    });
    
    $('.about_bottom').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        cssEase: 'linear',
        autoplay: true,
        prevArrow: '<i class="fas fa-arrow-left sliderprv"></i>',
        nextArrow: '<i class="fas fa-arrow-right slidernxt"></i>',
        autoplay: true,
    });
    
    
    
});