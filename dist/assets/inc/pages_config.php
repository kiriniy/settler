<?php

  date_default_timezone_set('Europe/Moscow');

  // Replace 'localhost:8888' with your correct domain or IP on local server.
  // Replace '/project_settler/dist/' with correct path to your project dir on local server.
  // Replace 'dev.example.com' with your dev server if you have one. Just leave as is if don't.
  // Replace 'example.com' with future site domain if you already have one.

  if ($_SERVER['HTTP_HOST'] == 'localhost:8888') { 

      $base_env = 'dev';
      $base_url = '/project_settler/dist/';
      $base_csp = '';


  } elseif ($_SERVER['HTTP_HOST'] == 'dev.example.com') { 

      $base_env = 'staging';
      $base_url = 'https://dev.example.com/';
      $base_csp = '';

  } else {

      $base_env = 'prod';
      $base_url = 'https://example.com/';
      $base_csp = '';

  }

  // Auto-path to 'assets/inc' directory.

  $inc_path = dirname(__FILE__) . '/';

  // Pages default values

  $page_charset    = 'utf-8';
  $page_prefetch   = 'off';
  $page_csp        = $base_csp;
  $page_cache      = 'no-cache';

  $page_pretitle   = '';
  $page_posttitle  = '';

  $page_robots     = 'index, follow, noai, noimageai';
  $page_viewport   = 'width=device-width, height=device-height, initial-scale=1';
  $page_autoformat = 'telephone=no, address=no, date=no';
  $page_canonical  = $base_url . $page_path;

  $page_html_attr  = 'lang="en" data-bs-theme="auto"';
  $page_head_attr  = 'prefix="og: https://ogp.me/ns#"';
  $page_base_attr  = 'href="' . $base_url . '"';
  $page_body_attr  = 'class="' . $page_type . ' ' . $page_class . '" id="page-top"';

  // Microdata default values

  $og_title        = $page_pretitle . $page_title . $page_posttitle;
  $og_desc         = $page_desc;
  $og_card         = 'summary';
  $og_type         = 'website';
  $og_locale       = 'en_US';
  $og_url          = $base_url . $page_path . $page_ver;

  $og_img_tw_alt   = '';
  $og_img_fb_alt   = '';

  $og_img_tw       = $base_url . 'assets/img/social/thumbnail-tw.jpg';
  $og_img_fb       = $base_url . 'assets/img/social/thumbnail-fb.jpg';
  $og_img_vk       = $base_url . 'assets/img/social/thumbnail-vk.jpg';

  // This is a place for your PHP code. Defines, variables etc.

