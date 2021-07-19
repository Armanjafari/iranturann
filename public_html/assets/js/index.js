 $(document).ready(function(){
        $("#activeclasses").click(function(){
          $(this).addClass("active1")
           $("#activeclasses1").removeClass("active1")
          
        })
        $("#activeclasses1").click(function(){
          $(this).addClass("active1")
          $("#activeclasses").removeClass("active1")
        })
      })
    $('#exampleFormCotrolSelenct1').change(function(){
        if($(this).val() == 'lar'){ // or this.value == 'volvo'
            $(".img-bg").html('<img src="assets/img/اژدها پیکر.png" alt="" class="img-city1">')

        }else{
            if($(this).val()=='gerash'){
             $(".img-bg").html('<img src="assets/img/WhatsApp Image 2021-06-27 at 21.38.16 (1).jpeg" alt="" class="img-city1">')
    
            }
            if($(this).val()=='evaz'){
                $(".img-bg").html('<img src="assets/img/WhatsApp Image 2021-06-27 at 21.38.17.jpeg" alt="" class="img-city1">')
       
               }
               if($(this).val()=='ghor'){
                $(".img-bg").html('<img src="assets/img/434e7e40-f4ea-4993-ba04-fa3e4d18d526.jpg" class="img-city1">')
               }
               if($(this).val()=='latifi'){
                $(".img-bg").html('<img src="assets/img/42744027.jpg" class="img-city1">')
               }
        }
      });
$(document).ready(function () {
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
});

