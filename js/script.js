$(document).ready(function(){
  $('img, header, footer').fadeIn(5000);
    $('header').click(function(){
      $('header').css("background", "green");
    });
  $('button').click(function(){
    $('img').hide();
  });
});
