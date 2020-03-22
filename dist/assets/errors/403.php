<!DOCTYPE HTML>

<?php require '../inc/pages_config.php'; ?>

<html lang="">
  <head>
    <base href="<?php echo $base_url; ?>">

    <meta charset="utf-8">

    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Error 403</title>

    <!-- Site Icons -->

    <link rel="icon" sizes="16x16"   href="assets/img/icons/favicon-16.png">
    <link rel="icon" sizes="32x32"   href="assets/img/icons/favicon-32.png">
    <link rel="icon" sizes="48x48"   href="assets/img/icons/favicon-48.png">
    <link rel="icon" sizes="64x64"   href="assets/img/icons/favicon-64.png">
    <link rel="icon" sizes="128x128" href="assets/img/icons/favicon-128.png">
    <link rel="icon" sizes="192x192" href="assets/img/icons/favicon-192.png">

    <!-- Legacy Browsers -->

    <!--[if lte IE 9]><script type="text/javascript" src="assets/js/html5.js"></script><![endif]-->
    <!--[if lte IE 8]><script type="text/javascript" src="assets/js/respond.js"></script><![endif]-->

    <!-- Site Resources -->

    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/css/main.css">

  </head>

  <body class="error-403">

    <!-- PAGE CONTENT START -->

    <?php include $inc_path . 'pages_body-menu.php'; ?>

    <!-- Example 403 content (markup based on Bootstrap 3 framework) -->

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Error 403
          <br>Access denied!</h1>
          <p>The page you are looking for never exist or very, very secret.
          <br>You may go <a href='javascript:history.back(1)'>back</a> or <a href='<?php echo $base_url; ?>'>start over</a>.</p>
          <hr>
          <p class="small text-muted">Rename and edit <code>htaccess</code> file to activate custom error pages.</p>
        </div>
      </div>
    </div>

    <!-- PAGE CONTENT END -->

    <?php include $inc_path . 'pages_body-scripts.php'; ?>

  </body>
</html>