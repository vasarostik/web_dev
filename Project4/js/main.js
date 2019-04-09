$("#main").click(function() {
  $("#mini-fab").toggleClass('hidden');
});


$(document).ready(function(){
$('.header').height($(window).height());
$('[data-toggle="tooltip"]').tooltip();  
});
$.material.init();