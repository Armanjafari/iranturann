//Initialize with the list of symbols
let names =["هفت روز اصالت کالا","گارانتی مادیران","مبین نت"]
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
// window.addEventListener('input', function () {
//     filter(search.value.trim().toLowerCase())
// })

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
// $('#menuItems').on('click', '.dropdown-item', function(){
//     $('#dropdown_coins').text($(this)[0].value)
//     $("#dropdown_coins").dropdown('toggle');
// })
// buildDropDown(names)
// $(document).ready(function () {
//     $.extend($.expr[':'], {
//         unchecked: function (obj) {
//             return ((obj.type == 'checkbox' || obj.type == 'radio') && !$(obj).is(':checked'));
//         }
//     });

//     $(".floral input:checkbox").live('change', function () {
//         $(this).next('ul').find('input:checkbox').prop('checked', $(this).prop("checked"));

//         for (var i = $('.floral').find('ul').length - 1; i >= 0; i--) {
//             $('.floral').find('ul:eq(' + i + ')').prev('input:checkbox').prop('checked', function () {
//                 return $(this).next('ul').find('input:unchecked').length === 0 ? true : false;
//             });
//         }
//     });
// });
//  helper function to create nodeArrays (not collections)
const nodeArray = (selector, parent=document) => [].slice.call(parent.querySelectorAll(selector));

//  checkboxes of interest 
// const allThings = nodeArray('input');
//  global listener
// addEventListener('change', e => {
//   let check = e.target;
  //  exit if change event did not come from 
  //  our list of allThings 
//   if(allThings.indexOf(check) === -1) return;

  //  check/unchek children (includes check itself)
//   const children = nodeArray('input', check.parentNode);
//   children.forEach(child => child.checked = check.checked);
  
  //  traverse up from target check
//   while(check){
    
    //  find parent and sibling checkboxes (quick'n'dirty)
    // const parent   = (check.closest(['ul']).parentNode).querySelector('input');
    // const siblings = nodeArray('input', parent.closest('li').querySelector(['ul']));

    //  get checked state of siblings
    //  are every or some siblings checked (using Boolean as test function) 
//     const checkStatus = siblings.map(check => check.checked);
//     const every  = checkStatus.every(Boolean);
//     const some = checkStatus.some(Boolean);   
    
//     //  check parent if all siblings are checked
//     //  set indeterminate if not all and not none are checked
//     parent.checked = every;   
//     parent.indeterminate = !every && every !== some;

//     //  prepare for nex loop
//     check = check != parent ? parent : 0;
//   }
// })
$(function () {
    var $preview = $("#preview");

    $("ul#products a").hover(function () {
        $preview.attr("src", $(this).attr("data-thumbnail-src"));
    }, function () {
        $preview.attr("src", "");
    });
});
// $(document).ready(function(){
//     $('#exampleFormControlSelect3').change(function(){
//         if($(this).val() === '0'){ // or this.value == 'volvo'
//             $('.markaz').css('display','block');
//         }else{
//             if($(this).val()=== '1'){
//         $('.markaz').css('display','none');
        
//             }
//         }
//       });
// });