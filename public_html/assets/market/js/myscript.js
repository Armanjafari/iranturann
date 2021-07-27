$(document).ready(function(){
        $("#activeclasses").click(function(){
          $(this).addClass("active-1")
           $("#activeclasses1").removeClass("active-1")
          
        })
        $("#activeclasses1").click(function(){
          $(this).addClass("active-1")
          $("#activeclasses").removeClass("active-1")
        })
      })
      $(document).ready(function(){

     
    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-indigo').addClass('btn-default');
            $item.addClass('btn-indigo');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepSteps = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

            prevStepSteps.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i< curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-indigo').trigger('click');


$(document).ready(function(){
$(".active4").click(function(){
    $(".active4").removeClass("color-green");
    $(this).addClass("color-green");
    $(".active4").preventDefault;
});

    $("#img-link1").click(function(){

    })
// updated javascript
// imgInp.onchange = evt => {
//     const [file] = imgInp.files
//     if (file) {
//       blah.src = URL.createObjectURL(file)
//     }
//   }
//   imgInp1.onchange = evt => {
//     const [file] = imgInp1.files
//     if (file) {
//       blah1.src = URL.createObjectURL(file)
//     }
//   }
//   imgInp2.onchange = evt => {
//     const [file] = imgInp2.files
//     if (file) {
//       blah2.src = URL.createObjectURL(file)
//     }
//   }
 
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    $('#owl-mobile21').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        center:true,
        responsive:{
            0:{
                items:4
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
    });
    $('#owl-mobile22').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        center:true,
        responsive:{
            0:{
                items:3
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
    });
    $('#owl-mobile20').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        center:true,
        responsive:{
            0:{
                items:2
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
    });
    $('#owl-mobile35').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        center:true,
        responsive:{
            0:{
                items:3
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
    });
    $('#owl-mobile12').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        center:true,
        responsive:{
            0:{
                items:3
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
    });
});
});
imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      blah.src = URL.createObjectURL(file)
    }
  }
  imgInp1.onchange = evt => {
    const [file] = imgInp1.files
    if (file) {
      blah1.src = URL.createObjectURL(file)
    }
  }
  imgInp2.onchange = evt => {
    const [file] = imgInp2.files
    if (file) {
      blah2.src = URL.createObjectURL(file)
    }
  }
  imgInp3.onchange = evt => {
    const [file] = imgInp3.files
    if (file) {
      blah3.src = URL.createObjectURL(file)
    }
  }