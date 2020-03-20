<!DOCTYPE HTML>

<!--  Settler (beta)              >>> https://github.com/Kiriniy/Settler
      Licensed under MIT          >>> https://github.com/Kiriniy/Settler/blob/master/LICENSE
      Created by Kirill Nikitin   >>> https://kiriniy.ru  -->

<?php require './assets/inc/pages_config.php';

      $page_id       = 'home';
//    $page_dir      = '';
      $page_title    = 'Settler';
      $page_desc     = 'A blank PHP based web-project template for developers.';

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

    <?php include $inc_path . 'misc_global-alert-no-js.php'; ?>

    <!-- PAGE CONTENT START -->



    <!-- PAGE CONTENT END -->

    <?php include $inc_path . 'pages_body-scripts.php'; ?>

    <!-- This Page Only Scripts and Libraries (optional) -->

    <script type="text/javascript">

      console.log( "Page is ready!" );

    </script>

  </body>
</html>