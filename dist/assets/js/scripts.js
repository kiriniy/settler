
  // MOBILE DEVICES DETECTOR

  let device = navigator.userAgent.toLowerCase();
  let mobile = device.match(/mobi|mobile|android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/);

  if (mobile) {

      console.log( "We are on mobile!" );

  }

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // RELOAD PAGE ON WINDOW RESIZE
  // DISABLED BY DEFAULT

  // window.onresize = function() { location.reload(); };

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // WINDOW SIZE DETECTORS TEMPLATES

  if (window.innerWidth < 480) {

      console.log( "We are under 480px!" );

  }

  if (window.innerWidth > 480 && window.innerWidth < 1200) {

      console.log( "We are between 480px and 1200px!" );

  }

  if (window.innerWidth > 1200) {

      console.log( "We are on 1200px or more!" );

  }

  // END
  //
  // -------------------------------------------------------------------------------------
  //
  // INSERT YOUR JS HERE...
  //
