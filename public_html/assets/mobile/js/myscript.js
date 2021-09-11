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
  $(document).ready(function () {
  $("#provinces").change(function () {
    var conceptName = $("#provinces").find(":selected").val();
    const $url = "https://iranturan.com/api/v1/province?province=" + conceptName    
    $("#cities").show()

    $.ajax({  
      type: "GET",
      url: $url,
      data: "",
      dataType: "json",
      success: function (data) {
        $("#cities").empty();
        for (var $i = 0; $i <data.cities.length;$i++) {
        option = document.createElement("option");
          option.innerHTML = `${data.cities[$i].name}`;
          option.value = data.cities[$i].id
          $("#cities").append(option);      
        }
      },
    });
  });
});
