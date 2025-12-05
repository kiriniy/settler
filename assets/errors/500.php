
<?php $page_id         = 'e500';
      $page_ver        = '?v=' . filemtime(__FILE__);
      $page_group      = 'errors';
      $page_class      = 'error-500';
      $page_level      = '../../';
      $page_path       = 'assets/errors/';

      $page_title      = 'Internal Server Error';
      $page_desc       = 'An error occurred while processing your request.';

      require $page_level . 'site.php';

      $page_robots     = 'noindex, nofollow';

      $page_sharing    = false;
      $page_info       = false;
      $page_alerts     = false;

      ?>

<!DOCTYPE HTML>

<html <?= $page_html_attr; ?>>
  <head <?= $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-section.php'; ?>

  </head>

  <body <?= $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->

    <?php include $assets . 'inc/pages_body-nav.php'; ?>

    <!-- Example 500 content (markup based on Bootstrap 5 framework) -->

    <main class="h-100 d-flex align-items-center">
      <div class="container">
        <h1>Error 500
        <br>Internal Server Error!</h1>
        <p>Our server encountered an unexpected issue. We're already working on fixing it.
        <br>You may go <a href='javascript:history.back(1)'>back</a> or <a href='<?= $base_url; ?>'>start over</a>.</p>
        <hr>
        <p class="small text-muted">Rename and edit <code>htaccess</code> file to activate custom error pages.</p>
      </div>
    </main>

    <!-- PAGE CONTENT END -->

    <?php include $assets . 'inc/pages_body-alerts.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>
