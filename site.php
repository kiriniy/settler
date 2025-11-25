<?php

  // Default timezone
  // https://www.php.net/manual/en/timezones.php

  date_default_timezone_set('UTC');

  // Replace 'localhost:8888' with your actual domain or IP on local server.
  // Replace 'dev.example.com' with your alt server if you have one. This is optional.
  // Replace 'example.com' with your live site if you have one. This is optional.

  // The following switch statement sets environment-specific defaults
  // based on the HTTP_HOST value. It can also be used to assign
  // a default language per domain for multilingual sites.
  // e.g. 'example.com' → 'en', 'example.ru' → 'ru', 'ru.example.com' → 'ru'

  // The 'base_csp' variable containing the CSP directives is wrapped in double quotes.
  // It allows you to use single quotes within the string without needing to escape them.
  // The CSP directives themselves must use single quotes as per the specification.
  // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
  // Note that leaving 'base_csp' variable empty will disable CSP entirely.

  switch ($_SERVER['HTTP_HOST']) {

    case 'localhost:8888':      // DEVELOPMENT ENVIRONMENT

      $base_env  = 'dev';
      $base_lang = 'en';        // The default page language
      $base_url  = $page_level; // Relative to pages or url of choice (with slash)
      $base_csp  = "";          // Content Security Policy for dev-server (optional)

    break;

    case 'dev.example.com':     // STAGING ENVIRONMENT

      $base_env  = 'staging';
      $base_lang = 'en';        // The default page language
      $base_url  = $page_level; // Relative to pages or url of choice (with slash)
      $base_csp  = "";          // Content Security Policy for staging-server (optional)

    break;

    case 'example.com':         // PRODUCTION ENVIRONMENT

      $base_env  = 'prod';
      $base_lang = 'en';        // The default page language
      $base_url  = $page_level; // Relative to pages or url of choice (with slash)
      $base_csp  = "";          // Content Security Policy for prod-server

    break;

    default:                    // IF NONE OF THE ABOVE

      $base_env  = 'unknown';
      $base_lang = 'en';        // The default page language
      $base_url  = $page_level; // Relative to pages or url of choice (with slash)
      $base_csp  = "";          // Content Security Policy

    break;

  }

  // Auto-path to 'assets' directory

  $assets = __DIR__ . '/assets/';

  // Use page-specific language if set or fall back to the environment default

  if (!isset($page_lang)) {
    $page_lang = $base_lang;
  }

  // Default values for <head> section
  // Check 'assets/inc/pages_head-section.php'

  $page_charset    = 'utf-8';
  $page_csp        = $base_csp;

  $page_pretitle   = '';
  $page_posttitle  = '';

  $page_robots     = 'index, follow';
  $page_viewport   = 'width=device-width, initial-scale=1, viewport-fit=cover';
  $page_autoformat = 'telephone=no, address=no, date=no';

  $page_sharing    = true;
  $page_info       = true;
  $page_icons      = true;
  $page_styles     = true;
  $page_noscript   = true;
  $page_alerts     = true;

  // Default attribute values for main tags

  $page_html_attr  = 'lang="' . $page_lang . '" class="if-js-off" data-bs-theme="auto"';
  $page_head_attr  = '';
  $page_body_attr  = 'class="' . $page_group . ' ' . $page_class . '" id="page-top"';

  // Default values for Open Graph metadata

  $sharing_title        = $page_pretitle . $page_title . $page_posttitle;
  $sharing_desc         = $page_desc;
  $sharing_url          = $base_url . $page_path . $page_ver;

  $sharing_x_card       = 'summary';
  $sharing_x_img        = $base_url . 'assets/img/sharing/1080x1080_default.jpg';
  $sharing_x_img_alt    = '';

  $sharing_og_type      = 'website';
  $sharing_og_locale    = $page_lang;
  $sharing_og_img       = $base_url . 'assets/img/sharing/1200x630_default.jpg';
  $sharing_og_img_alt   = '';
  $sharing_og_img_w     = '1200';
  $sharing_og_img_h     = '630';

  // This is a place for your own defines, variables etc.






  // Function to append file modification time for cache-busting

  if (!function_exists('addTime')) {
      function addTime($filePath) {
          return file_exists($filePath) ? $filePath . '?v=' . filemtime($filePath) : $filePath;
      }
  }
