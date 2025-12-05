
<?php $page_id      = 'main-index';
      $page_ver     = '?v=' . filemtime(__FILE__);
      $page_group   = 'pages';
      $page_class   = 'home';
      $page_level   = './';
      $page_path    = '';

      $page_title   = 'Settler';
      $page_desc    = 'A blank php-based web-project template for not-quite-developers.';

      require $page_level . 'site.php';

      ?>

<!DOCTYPE HTML>

<html <?= $page_html_attr; ?>>
  <head <?= $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-section.php'; ?>

    <!-- JSON Schema Markup Example -->

    <script type="application/ld+json">

    {
      "@context": "https://schema.org",
      "@type": "",
      "name": "",
      "url": "",
      "logo": "",
      "sameAs": ""
    }

    </script>

  </head>

  <body <?= $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->

    <?php include $assets . 'inc/pages_body-nav.php'; ?>

    <!-- Example content (markup based on Bootstrap 5 framework) -->

    <main class="h-100 d-flex align-items-center">
      <div class="container">
        <h1 class="display-1">A Fresh Start</h1>
        <p class="lead">Open and edit <span class="text-danger">site.php</span> at project root directory to get started.</p>
      </div>
    </main>

    <!-- PAGE CONTENT END -->

    <?php include $assets . 'inc/pages_body-alerts.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

    <!-- This Page Only Scripts and Libraries (optional) -->

    <script>

      console.log( "We are on [<?= $base_env; ?>] environment!" );

    </script>

  </body>
</html>
