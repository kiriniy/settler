
<?php $page_id      = '';
      $page_ver     = '';
      $page_type    = '';
      $page_class   = '';
      $page_level   = './';
      $page_path    = '';

      $page_lang    = 'en';
      $page_title   = 'Static Site Generator';
      $page_desc    = '';

      require $page_level . 'site.php';

      $page_csp        = '';
      $page_robots     = '';
      $page_autoformat = '';
      $page_canonical  = '';
      $page_head_attr  = '';
      $page_body_attr  = '';
      
      $page_alerts    = false;

   // Static Site Generator
   // ------------------------------------
   // By default at 'dev' environment only

      if ($base_env == 'dev') {

   // Provide local server full URL (with slash)

      $localhost_url = 'http://localhost:8888/project_settler/dist/';
      
   // Provide list of php-pages of choice

      $files = [
        'index.php',
        'path/if-any/index.php',
        'and/so/on/index.php'
      ];

   // This script takes a list of PHP files, fetches their content from a local server,
   // and saves them as static HTML files in the same directory with the same filenames
   // but with an .html extension instead of .php. It then generates a list of successfully
   // converted pages and displays it as a list.

   // The script uses the function copy() to fetch and save the content. If any errors occur,
   // they are silently ignored due to the usage of the error control operator '@'.
      
   // Just run this file after each site update.

      $successfulCopies = [];

      function copyPage($localhost_url, $sourceFile) {
        $sourceUrl = $localhost_url . $sourceFile;
        $targetFile = str_replace('.php', '.html', $sourceFile);
        return @copy($sourceUrl, $targetFile);
      }

      foreach ($files as $file) {
        if (copyPage($localhost_url, $file)) {
            $fullUrl = $localhost_url . str_replace('.php', '', $file) . '.html';
            $successfulCopies[] = $fullUrl;
        }
      }

      $result = !empty($successfulCopies) ? '<ul><li>' . implode('</li><li>', $successfulCopies) . '</li></ul>' : '';

      } ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          include $assets . 'inc/pages_head-snippets.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php';

          ?>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->

    <?php include $assets . 'inc/pages_body-nav.php'; ?>

    <!-- Example content (markup based on Bootstrap 5 framework) -->

    <main style="padding: 10rem 0 2rem;">
      <div class="container">

        <h1 class="display-6">Static site generator</h1>
        <p class="lead">This page creates static html copies next to php files of your choice <u>with all 'include' and results of all those dynamic stuff</u>, so you can use php-less hosting or GitHub Pages. Simply open and edit <span class="text-danger">make.php</span> at project root directory and run it again after each site update.</p>

        <?php if ($base_env == 'dev'): ?>

        <div class="card my-5">
          <div class="card-header">
            List of processed pages:
          </div>

          <div class="card-body">
            <?php echo $result; ?>
          </div>

          <div class="card-footer">
          <ul class="list-inline m-0">
            <li class="list-inline-item">Total files provided: <strong><?php echo count($files); ?></strong></li>
            <li class="list-inline-item">Total files converted: <strong><?php echo count($successfulCopies); ?></strong></li>
          </ul>
          </div>
        </div>

        <?php elseif ($base_env != 'dev'): ?>

        <div class="alert alert-warning animated fadeInUp" role="alert">
          We aren't on [dev] environment! Oh, we are? In this case open and edit <span class="text-danger">site.php</span> at project root directory first.
        </div>

        <?php endif; ?>

      </div>
    </main>

    <!-- PAGE CONTENT END -->

    <?php include $assets . 'inc/pages_body-alerts.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>
