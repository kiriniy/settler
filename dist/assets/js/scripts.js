
  // Clickability.

  $(".is-clickable").click(function() {
      window.location = $(this).find("a").attr("href");
      return false;
  });

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // Smooth Page Scroll (require assets/js/easing.js).
  // You need to add a class "page-scroll" to any <a> element with #id anchor link.
  // More info about customization at http://gsgd.co.uk/sandbox/jquery/easing/
  // Perfect for one-page sites, "go-to-top" etc.

  $(".page-scroll").bind("click", function(event) {
      $("html, body").stop().animate( {
          scrollTop: $($(this).attr("href")).offset().top
      }, 1500, "easeInOutExpo");
      event.preventDefault();
  });

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // Your custom scripts goes here...






  // END
  //
  // -------------------------------------------------------------------------------------
