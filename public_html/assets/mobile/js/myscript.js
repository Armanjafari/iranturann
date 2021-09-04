$(document).ready(function () {
    $(".close").click(function () { 
        $(".alert-box-success").hide();
    });
    $(".close").click(function () { 
        $(".alert-box-error").hide();
    });
    $(".close").click(function () { 
        $(".alert-box-warning").hide();
    });
    $('#owl-mobile').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:1
            },
            700:{
             items:1
            },
             1200:{
                items:1
             }
        }   
    });  
});