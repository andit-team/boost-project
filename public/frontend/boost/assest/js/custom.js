(function($) {
  "use strict";

  $(window).on("scroll", function() {
    if ($(this).scrollTop() > 50) {
      $(".site-navigation").addClass("is-sticky");
    } else {
      $(".site-navigation").removeClass("is-sticky");
    }
  });

})(jQuery);


function email(e){
  if(e.classList.contains('act')){
    e.classList.remove('act')
    document.querySelector('.for-email').style.display = 'none';
  }else{
    e.classList.add('act')
    document.querySelector('.for-email').style.display = 'block';
  }
}
function phone(e){
  if(e.classList.contains('act')){
    e.classList.remove('act')
    document.querySelector('.for-phone').style.display = 'none';
  }else{
    e.classList.add('act')
    document.querySelector('.for-phone').style.display = 'block';
  }
}
function letter(e){
  if(e.classList.contains('act')){
    e.classList.remove('act')
    document.querySelector('.for-letter').style.display = 'none';
  }else{
    e.classList.add('act')
    document.querySelector('.for-letter').style.display = 'block';
  }
}
$("#submite-form").submit(function(){
  alert("Here's a message!", "It's pretty, isn't it?");
})

// function myFunction() {
//   alert("You must fill out the form!");
// }