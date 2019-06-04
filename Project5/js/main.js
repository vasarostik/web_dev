$("#main").click(function() {
  $("#mini-fab").toggleClass('hidden');
});


$(document).ready(function(){
$('.header').height($(window).height());
$('[data-toggle="tooltip"]').tooltip();  
$("#button").click(function(){
  $("#div2").fadeIn("slow");
  $("#div3").fadeIn(3000);
});
$("#flip").click(function(){
  $("#panel").slideToggle(1000);
});
$("#stop").click(function(){
  $("#panel").stop();
});
$("#button1").click(function(){
  var div = $("#div4");  
  div.animate({left: '100px'}, "slow");
  div.animate({fontSize: '3em',height:'80px',width:'275px'}, "slow");
});
$("#button2").click(function(){
  $("#p1").hide("slow", function(){
    alert("vasarostik is still the best");
  });
});
$("#button3").click(function(){
  $("#p2").css("color", "yellow")
    .slideUp(3000)
    .slideDown(2000);
});
$("#get_ip").click(function() {
  $.ajax({
      url: "http://ip.jsontest.com/",
      success: function(result) {
          console.log(result);
          $("#ip_div").text(result.ip);
      }
  });
});
$("#get_headers").click(function() {
  $.ajax({
      url: "http://headers.jsontest.com/",
      success: function(result) {
          console.log(result);
          $("#headers_div").text(result["Accept-Language"]);
      }
  });
});
$("#get_date").click(function() {
  $.ajax({
      url: "http://date.jsontest.com",
      success: function(result) {
          console.log(result);
          $("#date_div").text(result["date"]);
      }
  });
});
$("#get_echo").click(function() {
  $.ajax({
      url: "http://echo.jsontest.com/me/rostyslav_vasylyk/",
      success: function(result) {
          console.log(result);
          $("#echo_div").text(result["me"]);
      }
  });
});
$("#get_valid").click(function() {
  $.ajax({
      url: 'http://validate.jsontest.com/?json={"key":"value"}',
      success: function(result) {
          console.log(result);
          $("#valid_div").text(result["object_or_array"]);
      }
  });
});
$("#get_js_code").click(function() {
  $.ajax({ url: 'http://code.jsontest.com', dataType: 'jsonp' });
});
$("#get_md5").click(function() {
  $.ajax({
      url: 'http://md5.jsontest.com/?text=example_text',
      success: function(result) {
          console.log(result);
          res = JSON.stringify(result);
          $("#md5_div").text(res);
      }
  });
});
});
$.material.init();

 