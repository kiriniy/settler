<?php

  date_default_timezone_set('Europe/Moscow');

  // Replace 'localhost:8888' with your correct domain or IP on local server.
  // Replace 'dev.example.com' with your alt server if you have one. Just leave as is if don't.
  // Fill 'base url' variables with local or remote urls depends on environment.

  if ($_SERVER['HTTP_HOST'] == 'localhost:8888') {

      $base_env = 'dev';
      $base_url = $page_level; // relative to pages or url of choice (with slash)
      $base_csp = ''; // Content Security Policy for dev-server (optional)

  } elseif ($_SERVER['HTTP_HOST'] == 'dev.example.com') {

      $base_env = 'staging';
      $base_url = $page_level; // e.q. 'https://dev.example.com/'
      $base_csp = ''; // Content Security Policy for staging-server (optional)

  } else {

      $base_env = 'prod';
      $base_url = $page_level; // e.q. 'https://example.com/'
      $base_csp = ''; // Content Security Policy for prod-server

  }

  // Auto-path to 'assets' directory.

  $assets = dirname(__FILE__) . '/assets/';

  // Pages default values

  $page_charset    = 'utf-8';
  $page_csp        = $base_csp;

  $page_pretitle   = '';
  $page_posttitle  = '';

  $page_robots     = 'index, follow, noai, noimageai';
  $page_viewport   = 'width=device-width, height=device-height, initial-scale=1';
  $page_autoformat = 'telephone=no, address=no, date=no';
  $page_canonical  = $base_url . $page_path;

  $page_html_attr  = 'lang="en" class="if-js-off" data-bs-theme="auto"';
  $page_head_attr  = 'prefix="og: https://ogp.me/ns#"';
  $page_body_attr  = 'class="' . $page_type . ' ' . $page_class . '" id="page-top"';

  // Microdata default values

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






  // Appending modification time for static files.

  if (! function_exists('addTime')) {
    function addTime($filePath = '') {
      if (file_exists($filePath)) {
        return $filePath . '?v=' . filemtime($filePath);
      }
        return $filePath;
    }
  };
