
<?php $page_id      = '';
      $page_ver     = '';
      $page_path    = '';
      $page_type    = '';
      $page_class   = '';
      $page_title   = '';
      $page_desc    = '';

      require '../assets/inc/pages_config.php';

      if ($base_env != 'prod') {

          phpinfo();

      } else {

          echo '<h1>Heads up!</h1>
                <hr>
                <p>The PHP function <strong>phpinfo()</strong> is disabled by default for the "prod" environment for security reasons. It displays information which can be used to compromise the server that your site is running on.</p>';

      }
