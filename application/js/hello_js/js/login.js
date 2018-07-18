$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

$(document).ready(function(){
    $("#loginForm").fadeIn(1500);
})