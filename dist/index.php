
<?php $page_id      = 'home';
      $page_ver     = '';
      $page_path    = '';
      $page_type    = 'pages';
      $page_class   = 'home';

      $page_title   = 'Settler';
      $page_desc    = 'A blank php-based template.';

      require './assets/inc/pages_config.php';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>
    <base <?php echo $page_base_attr; ?>>

    <?php include $inc_path . 'pages_head-meta.php';
          include $inc_path . 'pages_head-snippets.php';
          include $inc_path . 'pages_head-resources.php';

          ?>

    <!-- This Page Only Stylesheets (optional) -->

    <link type="text/css" rel="stylesheet" href="">

  </head>

  <body <?php echo $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->

    <div class="alerts-container">

      <?php include $inc_path . 'misc_global-alert-js.php';
            include $inc_path . 'misc_global-alert-ie.php';

            ?>

    </div>

    <?php include $inc_path . 'pages_body-menu.php'; ?>

    <!-- Example content (markup based on Bootstrap 5 framework) -->

    <main class="h-100 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="display-1">A Fresh Start</h1>
            <p class="lead">Open and edit <span class="text-danger">pages_config.php</span> at <span class="text-danger">assets/inc</span> directory to setup base URL's.</p>
          </div>
        </div>
      </div>
    </main>

    <!-- PAGE CONTENT END -->

    <?php include $inc_path . 'pages_body-scripts.php'; ?>

    <!-- This Page Only Scripts and Libraries (optional) -->

    <script type="text/javascript">

      console.log( "Page is ready!" );

    </script>

  </body>
</html>