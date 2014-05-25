//$(document).ready(function() {
  //$('.youtube-embed').nonSuckyYouTubeEmbed();
//});

jQuery(window).resize(function() {
  matchSize('.bandcamp iframe', '.welcome__cover');
});

jQuery('.bandcamp iframe').on('load', function() {
  matchSize('.bandcamp iframe', '.welcome__cover');
});

/* Set target's outerHeight to source's outerHeight */
function matchSize(target, source) {
  jQuery(target).outerHeight(jQuery(source).outerHeight());
}

jQuery(document).ready(function($) {
  $('.nav__toggle').click(function(e) {
    e.preventDefault();
    $(this).next('.nav__list').toggleClass('is-visible');
  });
});
