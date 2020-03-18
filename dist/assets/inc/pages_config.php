<?php

  // Replace 'localhost:8888' with your local server domain or IP. 
  // Replace 'project_settler/dist' with your current directory name on local server.
  // Replace 'example.com' with future site domain if you have one.

  if ($_SERVER['HTTP_HOST'] == 'localhost:8888') { 

      $base_url = '/project_settler/dist/';

  } else {

      $base_url = 'https://example.com/';

  }

  // Auto-path to 'assets/inc' directory.

  $inc_path = dirname(__FILE__) . '/';

  // This is a place for any permanent PHP code. Defines, variables etc.
