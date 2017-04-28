$(document).ready(function() {

  learnMoreSmoothScroll();
  browseResults();
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

/*
* -----------------------------------------------------------------------
* Browse hide results
* -----------------------------------------------------------------------
*/
function browseResults() {
  if (!$('#browse-results').length) { return; }
  $("#browse-results").hide();

  var link = document.getElementById('beauty-link');
  link.addEventListener('click', function() {
    $("#browse-results").toggle();
  });
}
