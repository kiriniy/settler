
<?php $page_id      = '';
      $page_ver     = '';
      $page_type    = '';
      $page_class   = '';
      $page_level   = '../';
      $page_path    = '';

      $page_title   = '';
      $page_desc    = '';

      require $page_level . 'site.php';

      if ($base_env == 'dev') {

          phpinfo();

          exit;

      } else {

          echo '<h1>Heads up!</h1>
                <p>The PHP function <strong>phpinfo()</strong> is disabled by default for any environments expect "dev" for security reasons.</p>';

      }
