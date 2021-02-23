var ctx = document.getElementById("myChart").getContext('2d');
var barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["مهر", "آبان", " آذر", "دی","بهمن","اسفند","فروردین"],
    datasets: [{
      label: 'گزارش این هفته',
      data: [330, 330, 310, 340,320,315,335,300],
      backgroundColor:[
        'rgba(29, 233, 182, 0.8)',
        'rgba(29, 233, 182, 0.8)',
        'rgba(29, 233, 182, 0.8)',
        'rgba(29, 233, 182, 0.8)',
        'rgba(29, 233, 182, 0.8)',
        'rgba(29, 233, 182, 0.8)',
        'rgba(29, 233, 182, 0.8)',
    ],
    borderColor:[
        'rgba(216, 27, 96, 1)',
        'rgba(29, 169, 244, 1)',
        'rgba(255, 152, 0, 1)',
        'rgba(29, 233, 182, 1)',
        'rgba(156, 39, 176, 1)',
        'rgba(84, 110, 122, 1)',
    ],
    }]
  }
});

$(document).ready(function(){
  $('#fas').click(function(){
$('#sidebar').css('margin-right','0px')
$('#fas').css('visibility','hidden')
$('#times').css('visibility','visible')
$(".content").css('margin-right','320px')
$(".navbar-item").css('margin-right','300px')
})
$('#times').click(function(){
$('#sidebar').css('margin-right','-300px')
$('#fas').css('visibility','visible')
$('#times').css('visibility','hidden')
$(".content").css('margin-right','0px')
$(".navbar-item").css('margin-right','0px')
})
})


  