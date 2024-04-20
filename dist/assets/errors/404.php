
<?php $page_id      = '404';
      $page_ver     = '';
      $page_path    = '';
      $page_type    = 'errors';
      $page_class   = 'error-404';

      $page_notices = false;

      $page_title   = 'Page not found!';
      $page_desc    = '';

      // Relative path to the config file
      
      require '../../site.php';
      
      $page_prefetch   = '';
      $page_csp        = '';
      $page_cache      = '';
      $page_robots     = 'noindex, nofollow';
      $page_autoformat = '';
      $page_canonical  = '';
      $page_head_attr  = '';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>
    <base <?php echo $page_base_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          // include $assets . 'inc/pages_head-snippets.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php';

          ?>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->

    <?php include $assets . 'inc/pages_body-menu.php'; ?>

    <!-- Example 404 content (markup based on Bootstrap 5 framework) -->

    <main class="h-100 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1>Error 404
            <br>Page not found!</h1>
            <p>Oops! Seems like the page you are looking for no longer exists.
            <br>You may go <a href='javascript:history.back(1)'>back</a> or <a href='<?php echo $base_url; ?>'>start over</a>.</p>
            <hr>
            <p class="small text-muted">Rename and edit <code>htaccess</code> file to activate custom error pages.</p>
          </div>
        </div>
      </div>
    </main>

    <!-- PAGE CONTENT END -->

    <?php include $assets . 'inc/pages_body-notices.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>