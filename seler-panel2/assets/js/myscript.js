$(document).ready(function(){
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
    $('#owl-mobile12').owlCarousel({
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