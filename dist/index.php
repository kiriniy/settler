<!DOCTYPE HTML>

<!--  Settler (beta)              >>> https://github.com/kiriniy/settler
      Licensed under MIT          >>> https://github.com/kiriniy/settler/blob/master/LICENSE
      Created by Kirill Nikitin   >>> https://kiriniy.ru  -->

<?php require './assets/inc/pages_config.php';

      $page_id       = 'home';
      $page_dir      = '';
      $page_title    = 'Settler';
      $page_desc     = 'A blank PHP based web-project template for developers.';
      $page_cache    = 'no-cache';
      $page_expiry   = '0';

      $net_url       = $base_url;
      $net_title     = $net_title_default;
      $net_desc      = $net_desc_default;
      $net_locale    = $net_locale_default;

      ?>

<html lang="">
  <head>
    <base href="<?php echo $base_url; ?>">

    <?php include $inc_path . 'pages_head-meta.php';
          include $inc_path . 'pages_head-snippets.php';
          include $inc_path . 'pages_head-resources.php';

          ?>

    <!-- This Page Only Stylesheets (optional) -->

    <link type="text/css" rel="stylesheet" href="">

  </head>

  <body class="<?php echo $page_id; ?>" id="page-top">

    <!-- PAGE CONTENT START -->

    <?php include $inc_path . 'misc_global-alert-no-js.php';
          include $inc_path . 'misc_global-alert-ie.php';
          include $inc_path . 'pages_body-menu.php';

          ?>

    <!-- Example content (markup based on Bootstrap 3 framework) -->

    <header class="head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Settler</h1>
            <p class="lead">Blank PHP web-project template for developers.</p>
          </div>
        </div>
      </div>
    </header>

    <main class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Hello, looking for a base to start some new awesome web project? Great, everything is going just right. First of all you must open and edit main config file at <code>assets/inc/pages_config.php</code> for setup base path. jQuery 1.12.4, uncustomized Bootstrap 3 and Font Awesome 4 frameworks which are supports legacy browsers are included as components. This is optional and you may replace default components with another frameworks or remove them totally. Well, have fun and may the force be with you!</p>
          </div>
        </div>
      </div>
    </main>

    <footer class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
            <div class="small pull-left"><strong>Presettlement</strong> with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/Kiriniy" target="_blank"><strong>Kiriniy</strong></a></div>
            <div class="small pull-right"><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y'); ?></div>
          </div>
        </div>
      </div>
    </footer>

    <!-- PAGE CONTENT END -->

    <?php include $inc_path . 'pages_body-scripts.php'; ?>

    <!-- This Page Only Scripts and Libraries (optional) -->

    <script type="text/javascript">

      console.log( "Page is ready!" );

    </script>

  </body>
</html>