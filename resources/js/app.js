/**
 * Scroll to anchor.
 */

function scrollToAnchor() {
  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function (event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
      location.hostname == this.hostname
    ) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.top
        }, 500, function () {

          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex', '-1');
            $target.focus();
          };
        });
      }
    }
  });
}

$(document).ready(function() {
  scrollToAnchor();
});