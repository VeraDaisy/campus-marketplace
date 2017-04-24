$(document).ready(function() {

  learnMoreSmoothScroll();

});

/*
* -----------------------------------------------------------------------
* Learn more button on homepage
* -----------------------------------------------------------------------
*/
function learnMoreSmoothScroll() {
  if (!$('#learn-more').length) { return; }

  var btn = document.getElementById('learn-more');
  btn.addEventListener('click', function() {
    $('html, body').animate({
        scrollTop: $("#anchor-about").offset().top
    }, 1000);
  });
}
