<?php

  // Default timezone
  // https://www.php.net/manual/en/timezones.php

  date_default_timezone_set('Europe/Moscow');

  // Replace 'localhost:8888' with your correct domain or IP on local server.
  // Replace 'dev.example.com' with your alt server if you have one. Just leave as is if don't.
  // Replace 'example.com' with your live site if you have one. Just leave as is if don't.

  switch ($_SERVER['HTTP_HOST']) {

    case 'localhost:8888':     // DEVELOPMENT ENVIRONMENT

      $base_env = 'dev';
      $base_url = $page_level; // Relative to pages or url of choice (with slash)
      $base_csp = '';          // Content Security Policy for dev-server (optional)

    break;

    case 'dev.example.com':    // STAGING ENVIRONMENT

      $base_env = 'staging';
      $base_url = $page_level; // Relative to pages or url of choice (with slash)
      $base_csp = '';          // Content Security Policy for staging-server (optional)

    break;

    case 'example.com':        // PRODUCTION ENVIRONMENT

      $base_env = 'prod';
      $base_url = $page_level; // Relative to pages or url of choice (with slash)
      $base_csp = '';          // Content Security Policy for prod-server

    break;

    default:                   // IF NONE OF THE ABOVE

      $base_env = 'unknown';
      $base_url = $page_level; // Relative to pages or url of choice (with slash)
      $base_csp = '';          // Content Security Policy

    break;

  }

  // Auto-path to 'assets' directory

  $assets = __DIR__ . '/assets/';

  // Pages default values
  // Check 'assets/inc/pages_head-meta.php' and 'assets/inc/pages_head-resources.php'

  $page_charset    = 'utf-8';
  $page_csp        = $base_csp;

  $page_pretitle   = '';
  $page_posttitle  = '';

  $page_robots     = 'index, follow, noai, noimageai';
  $page_viewport   = 'width=device-width, height=device-height, initial-scale=1';
  $page_autoformat = 'telephone=no, address=no, date=no';
  $page_canonical  = $base_url . $page_path;

  $page_html_attr  = 'lang="' . $page_lang . '" class="if-js-off" data-bs-theme="auto"';
  $page_head_attr  = 'prefix="og: https://ogp.me/ns#"';
  $page_body_attr  = 'class="' . $page_type . ' ' . $page_class . '" id="page-top"';

  $page_alerts     = true;

  // Open Graph metadata default values
  // Check 'assets/inc/pages_head-snippets.php'

  $og_title        = $page_pretitle . $page_title . $page_posttitle;
  $og_desc         = $page_desc;
  $og_card         = 'summary';
  $og_type         = 'website';
  $og_locale       = 'en_US';
  $og_url          = $base_url . $page_path . $page_ver;
  $og_img_tw       = $base_url . 'assets/img/social/thumbnail-tw.jpg';
  $og_img_fb       = $base_url . 'assets/img/social/thumbnail-fb.jpg';
  $og_img_vk       = $base_url . 'assets/img/social/thumbnail-vk.jpg';
  $og_img_tw_alt   = '';
  $og_img_fb_alt   = '';

  // This is a place for your own defines, variables etc.






  // Function to append file modification time for cache-busting

  if (!function_exists('addTime')) {
      function addTime($filePath) {
          return file_exists($filePath) ? $filePath . '?v=' . filemtime($filePath) : $filePath;
      }
  }
