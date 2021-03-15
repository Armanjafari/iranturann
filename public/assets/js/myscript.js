$(document).ready(function(){
    $('#owl-mobile').owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     responsive:{
         0:{
             items:1
         },
          450:{
          items:2
        },
         1200:{
             items:2
         }
     }   
 })
 $('#owl-mobile5').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    center:true,
    responsive:{
        0:{
            items:1
        },
         540:{
         items:2
       },
       750:{
        items:3 
       },
        1200:{
            items:4
        }
    }   
})
 $('#owl-mobile3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
         450:{
         items:2
       },
        1200:{
            items:2
        }
    }   
})
$('#owl-mobile4').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    center:true,
    responsive:{
        0:{
            items:1
        },
         450:{
         items:2
       },
        1200:{
            items:4
        }
    }   
})
 $('#owl-mobile-2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    center:true,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        700:{
         items:3
        },
         1200:{
            items:4
         }
    }   
})
 $( ".owl-prev").html('<i class="fa fa-chevron-left chevron-left"></i>');
 $( ".owl-next").html('<i class="fa fa-chevron-right chevron-right"></i>');
 $(".owl-prev").click(function(){
     $(".owl-prev").css('background','none');
 })
 $(".owl-next").click(function(){
     $(".owl-next").css('background','none');
 })
$('.discount-code').click(function(){
    $('.input-discount').css('visibility','visible');
    $('.input-discount').css('margin-right','1em');
})
})

$(document).ready(function(){
    $('.row .owl-carousel').owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     center:true,
     responsive:{
         0:{
             items:2
         },
         600:{
             items:4
         },
         1000:{
             items:6
         }
     }   
 })
 $( ".owl-prev").html('<img src="assets/img/svg element/left-arrow.svg" alt="">');
 $( ".owl-next").html('<img src="assets/img/svg element/write-arrow.svg" alt="">');
 $(".owl-prev").css('background','none');
 $(".owl-next").css('background','none');
})
  var theToggle = document.getElementById('toggle');

  // based on Todd Motto functions
  // https://toddmotto.com/labs/reusable-js/
  
  // hasClass
  function hasClass(elem, className) {
      return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
  }
  // addClass
  function addClass(elem, className) {
      if (!hasClass(elem, className)) {
          elem.className += ' ' + className;
      }
  }
  // removeClass
  function removeClass(elem, className) {
      var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
      if (hasClass(elem, className)) {
          while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
              newClass = newClass.replace(' ' + className + ' ', ' ');
          }
          elem.className = newClass.replace(/^\s+|\s+$/g, '');
      }
  }
  // toggleClass
  function toggleClass(elem, className) {
      var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
      if (hasClass(elem, className)) {
          while (newClass.indexOf(" " + className + " ") >= 0 ) {
              newClass = newClass.replace( " " + className + " " , " " );
          }
          elem.className = newClass.replace(/^\s+|\s+$/g, '');
      } else {
          elem.className += ' ' + className;
      }
  }
  
  theToggle.onclick = function() {
      toggleClass(this, 'on');
      return false;
  };
  
  $(document).ready(function () {
      /* Variables */
      var navigation = $('.navigation');
      var toggleBtn = $('.toggle-btn');
      var menuLevel2 = $('.menu-level-2');
      var menuLevel3 = $('.menu-level-3');
      var body = $('body');
      var temp = true;
  
    
  
      $(document).scroll(function () {
          if (pageYOffset == 0) {
              $('.menu-level-1 > .menu-list-1 > .list-item').removeClass("active");
              navigation.attr('style', ' ');
          }
      });
      menuLevel2.addClass('none');
      menuLevel3.addClass('none');
      toggleBtn.click(function () {
          body.toggleClass('active');
          navigation.toggleClass('active');
        /*  $(this).toggleClass('active');*/
          menuLevel2.removeClass('block');
          menuLevel3.removeClass('block');
          $(' .menu-list-1 > .list-item > .item-icon').removeClass('active');
      });
  
      if ($(window).width() <= 768) {
          menuLevel2.addClass('none');
          menuLevel3.addClass('none');
          navigation.attr('style', ' ');
       
      }
      else {
          menuLevel2.addClass('flex');
          menuLevel3.addClass('flex');
      }
  
      $(window).resize(function () {
          if ($(window).width() <= 768) {
              navigation.attr('style', ' ');
              $(' .menu-list-1 > .list-item > .item-icon').removeClass('active');
  
              menuLevel2.removeClass('block');
              menuLevel3.removeClass('block');
              menuLevel2.addClass('none');
              menuLevel3.addClass('none');
              menuLevel2.removeClass('flex');
              menuLevel3.removeClass('flex');
              temp = true;
              $(window).resize(function (){
                if ($(window).width() <= 768){
                    $(".dropdown-city-button").text("خرید کن");
                    
                }else{
                    $(".dropdown-city-button").text("از کجا می خوای خرید کنی؟"); 
                }
            });
          }
          else {
              body.removeClass('active');
              menuLevel2.removeClass('block');
              menuLevel3.removeClass('block');
              menuLevel2.addClass('flex');
              menuLevel3.addClass('flex');
              $(' .menu-list-1 > .list-item > .item-icon').removeClass('active');
              $('.menu-list-2 > .list-item > img').removeClass('active');
              navigation.removeClass('active');
              toggleBtn.removeClass('active');
              temp = false;
          }
  
      });
  
      if (temp) {
          $('.menu-list-1 > .list-item').on('click', function () {
              $(' .item-icon', this).toggleClass('active');
              $(this).siblings('.menu-level-2').toggleClass('block');
              $('.menu-list-2').addClass('active');
              if (menuLevel3.hasClass('block')) {
                  menuLevel3.removeClass('block');
                 $('.menu-list-2 > .list-item > img').removeClass('active');
              }
  
          });
          $('.menu-list-2 > .list-item').on('click', function () {
              $('> img', this).toggleClass('active');
             $(this).siblings('.menu-level-3').toggleClass('block');
          });
      }  
  });
//Initialize with the list of symbols
let names =["لار","گراش","اوز"]

//Find the input search box
let search = document.getElementById("searchCoin")

//Find every item inside the dropdown
let items = document.getElementsByClassName("dropdown-item")
function buildDropDown(values) {
    let contents = []
    for (let name of values) {
    contents.push('<input type="button" class="dropdown-item" type="button" value="' + name + '"/>')
    }
    $('#menuItems').append(contents.join(""))

    //Hide the row that shows no items were found
    $('#empty').hide()
}

//Capture the event when user types into the search box
window.addEventListener('input', function () {
    filter(search.value.trim().toLowerCase())
})

//For every word entered by the user, check if the symbol starts with that word
//If it does show the symbol, else hide it
function filter(word) {
    let length = items.length
    let collection = []
    let hidden = 0
    for (let i = 0; i < length; i++) {
    if (items[i].value.toLowerCase().startsWith(word)) {
        $(items[i]).show()
    }
    else {
        $(items[i]).hide()
        hidden++
    }
    }

    //If all items are hidden, show the empty view
    if (hidden === length) {
    $('#empty').show()
    }
    else {
    $('#empty').hide()
    }
}

//If the user clicks on any item, set the title of the button as the text of the item
$('#menuItems').on('click', '.dropdown-item', function(){
    $('#dropdown_coins').text($(this)[0].value)
    $("#dropdown_coins").dropdown('toggle');
})
buildDropDown(names)
// $(window).resize(function (){
//     $(document).scroll(function(){
//       if ($(window).width() < 768) {
//           if ($(document).scrollTop() > 50){
//               $(".nav-box").attr('style','margin-top:-8em !important;');
//            }
//       }
//     })
// });
$(document).scroll(function () {
    // $('.menu-level-1 > .menu-list-1 > .list-item').addClass("active");//
    // navigation.attr('style', '    box-shadow: 0 .250rem 1rem rgba(0, 0, 0, .095);');//
    if ($(document).scrollTop() > 50){
        $(".nav-box").attr('style','margin-top:-6.1em;');
     }else{
        $(".nav-box").attr('style','margin-top:0;'); 
        }
});