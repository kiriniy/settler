<?php

  // Replace 'localhost' with your correct domain or IP for local server.
  // Replace 'project_settler/dist' with your own directory path to your project on local server.
  // Replace 'dev.example.com' with your dev server if you have one. Just leave as is if don't.
  // Replace 'example.com' with future site domain if you already have one.

  if ($_SERVER['HTTP_HOST'] == 'localhost') { 

      $base_url = '/project_settler/dist/';

  } elseif ($_SERVER['HTTP_HOST'] == 'dev.example.com') { 

      $base_url = 'https://dev.example.com/';

  } else {

      $base_url = 'https://example.com/';

  }

  // Auto-path to 'assets/inc' directory.

  $inc_path = dirname(__FILE__) . '/';

  // Social networks snippets default data.
  
  $net_title_default    = 'Settler';
  $net_desc_default     = 'A blank PHP based web-project template for developers.';
  $net_locale_default   = 'en_US';

  // This is a place for any permanent PHP code. Defines, variables etc.
