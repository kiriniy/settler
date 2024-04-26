
<?php $page_id      = 'home';
      $page_ver     = '?v=' . filemtime(__FILE__);
      $page_path    = '';
      $page_type    = 'pages';
      $page_class   = 'main';

      $page_notices = true;

      $page_title   = 'Settler';
      $page_desc    = 'A blank php-based template.';

      // Relative path to the config file

      require './site.php';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>
    <base <?php echo $page_base_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          include $assets . 'inc/pages_head-snippets.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php';

          ?>

    <!-- JSON Schema Markup Example -->

    <script type="application/ld+json">

    {
      "@context": "https://schema.org",
      "@type": "Project",
      "name": "Settler",
      "url": "",
      "logo": "",
      "sameAs": ""
    }

    </script>

    <!-- This Page Only Stylesheets (optional) -->

    <link type="text/css" rel="stylesheet" href="">

  </head>

  <body <?php echo $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->

    <?php include $assets . 'inc/pages_body-menu.php'; ?>

    <!-- Example content (markup based on Bootstrap 5 framework) -->

    <main class="h-100 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="display-1">A Fresh Start</h1>
            <p class="lead">Open and edit <span class="text-danger">site.php</span> at project root directory to get started.</p>
          </div>
        </div>
      </div>
    </main>

    <!-- PAGE CONTENT END -->

    <?php include $assets . 'inc/pages_body-notices.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

    <!-- This Page Only Scripts and Libraries (optional) -->

    <script type="text/javascript">

      console.log( "We are on '<?php echo $base_env; ?>' environment!" );
      console.log( "Page is ready!" );

    </script>

  </body>
</html>