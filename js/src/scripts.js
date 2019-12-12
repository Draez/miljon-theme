/**
 * Air theme JavaScript.
 */

// Define Javascript is active by changing the body class
document.body.classList.remove('no-js');
document.body.classList.add('js');

// Init lazyload
// Usage example on template side when air-helper enabled:
// <?php image_lazyload_tag( get_post_thumbnail_id( $post->ID ) ); ?>
let images = document.querySelectorAll('.lazyload');
lazyload(images, {
  root: null,
  rootMargin: "0px",
  threshold: 0
});

// jQuery start
(function ($) {
  var listHTML = $(".Title").html();
  var listItems = listHTML.split(" ");

  $(".Title").html("");
  $.each(listItems, function (i, v) {
    var item =
      '<div class="Title-mask"><span class="Title-line">' + v + "</span></div>";
    $(".Title").append(item);
  });


  // Hide or show the "back to top" link
  $(window).scroll(function () {

    // Back to top
    var offset = 300; // Browser window scroll (in pixels) after which the "back to top" link is shown
    var offset_opacity = 1200; // Browser window scroll (in pixels) after which the link opacity is reduced
    var scroll_top_duration = 700; // Duration of the top scrolling animation (in ms)
    var link_class = '.top';

    if ($(this).scrollTop() > offset) {
      $(link_class).addClass('is-visible');
    } else {
      $(link_class).removeClass('is-visible');
    }

    if ($(this).scrollTop() > offset_opacity) {
      $(link_class).addClass('fade-out');
    } else {
      $(link_class).removeClass('fade-out');
    }

  });

  // Document ready start
  $(function () {
    // Animation for headings 
    let titleMasks = $(".Title-mask").length; //12

    for (let index = 0; index <= titleMasks; index++) {
      let amount = $(".Title-mask:nth-child(" + index + ") .Title-line");
      let delay = index * 80;
      amount.css("animation-delay", delay + "ms");
    }


    // Set up back to top link
    var moveTo = new MoveTo();
    var target = document.getElementById('target');
    moveTo.move(target);

    // Register a back to top trigger
    var trigger = document.getElementsByClassName('js-trigger')[0];
    moveTo.registerTrigger(trigger);

  });

})(jQuery);
