
    <?php if ($page_type != 'errors'): ?>

    <!-- Site Credits & Information -->

    <link rel="author" href="humans.txt">
    <link rel="sitemap" href="sitemap.xml">
    <link rel="canonical" href="<?php echo $base_url . $page_path; ?>">
    <link rel="manifest" href="site.webmanifest">

    <!-- Forcing lookup of specific hostnames -->

    <link rel="dns-prefetch" href="//mc.yandex.ru">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">

    <?php endif; ?>

    <!-- Site Icons: https://evilmartians.com/chronicles/how-to-favicon-in-2021-six-files-that-fit-most-needs -->

    <link rel="icon" sizes="any" href="favicon.ico">
    <link rel="icon" type="image/svg+xml" href="assets/img/icons/icon.svg" >
    <link rel="apple-touch-icon" href="assets/img/icons/apple-touch-icon.png">

    <!-- Site Resources -->

    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/css/main.css">
