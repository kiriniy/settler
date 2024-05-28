
<?php $page_id      = '';
      $page_ver     = '';
      $page_type    = '';
      $page_class   = '';
      $page_level   = '../';
      $page_path    = '';
      $page_lang    = '';
      $page_title   = '';
      $page_desc    = '';

      require $page_level . 'site.php';

      if ($base_env != 'prod') {

          phpinfo();

      } else {

          echo '<h1>Heads up!</h1>
                <p>The PHP function <strong>phpinfo()</strong> is disabled by default for the "prod" environment for security reasons.</p>';

      }
