
  // CSS @media independent options for mobile users.

  var gadget = navigator.userAgent.toLowerCase();
  var mobile = gadget.match(/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/);

  if (mobile) {

      // Scripts for mobile users only.

      console.log( "We are on mobile!" );
      
  }

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // Window resize detector with page reload (off by default).

  // $(window).resize(function() {
  //     location.reload();
  // });

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // Scripts which are depends on window size.

  if ($(window).width() < 480) {

      // 0px

      console.log( "We are under 480px!" );

  }

  if ($(window).width() > 480 && $(window).width() < 768) {

      // 480px+

      console.log( "We are between 480px and 768px!" );

  }

  if ($(window).width() > 768 && $(window).width() < 992) {

      // 768px+

      console.log( "We are between 768px and 992px!" );

  }

  if ($(window).width() > 992 && $(window).width() < 1200) {

      // 992px+

      console.log( "We are between 992px and 1200px!" );

  }

  if ($(window).width() > 1200) {

      // 1200px+

      console.log( "We are on 1200px or more!" );

  }

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // Clickability.

  $(".is-clickable").click(function() {
      window.location = $(this).find("a").attr("href");
      return false;
  });

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // Your custom scripts goes here...






  // END
  //
  // -------------------------------------------------------------------------------------
