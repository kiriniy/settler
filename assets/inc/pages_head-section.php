
    <!-- Site Settings -->

    <meta charset="<?php echo $page_charset; ?>">
    <meta http-equiv="content-security-policy" content="<?php echo $page_csp; ?>">

    <title><?php echo $page_pretitle . $page_title . $page_posttitle; ?></title>

    <meta name="robots" content="<?php echo $page_robots; ?>">
    <meta name="description" content="<?php echo $page_desc; ?>">
    <meta name="viewport" content="<?php echo $page_viewport; ?>">
    <meta name="format-detection" content="<?php echo $page_autoformat; ?>">

    <meta name="google-site-verification" content="<?php echo $vrf_code_google; ?>">
    <meta name="yandex-verification" content="<?php echo $vrf_code_yandex; ?>">
    <meta name="msvalidate.01" content="<?php echo $vrf_code_msbing; ?>">

    <?php if ($page_sharing): ?>

    <!-- Open Graph -->

    <meta name="twitter:card" content="<?php echo $sharing_x_card; ?>">
    <meta name="twitter:title" content="<?php echo $sharing_title; ?>">
    <meta name="twitter:description" content="<?php echo $sharing_desc; ?>">
    <meta name="twitter:image" content="<?php echo $sharing_x_img; ?>">
    <meta name="twitter:image:alt" content="<?php echo $sharing_x_img_alt; ?>">
    <meta name="twitter:url" content="<?php echo $sharing_url; ?>">

    <meta property="og:type" content="<?php echo $sharing_og_type; ?>">
    <meta property="og:title" content="<?php echo $sharing_title; ?>">
    <meta property="og:description" content="<?php echo $sharing_desc; ?>">
    <meta property="og:locale" content="<?php echo $sharing_og_locale; ?>">
    <meta property="og:image" content="<?php echo $sharing_og_img; ?>">
    <meta property="og:image:alt" content="<?php echo $sharing_og_img_alt; ?>">
    <meta property="og:image:width" content="<?php echo $sharing_og_img_w; ?>">
    <meta property="og:image:height" content="<?php echo $sharing_og_img_h; ?>">
    <meta property="og:url" content="<?php echo $sharing_url; ?>">
    
    <?php endif; if ($page_info): ?>

    <!-- Site Information -->

    <link rel="canonical" href="<?php echo $base_url . $page_path; ?>">
    <link rel="author" href="<?php echo $base_url . 'humans.txt'; ?>">
    <link rel="sitemap" href="<?php echo $base_url . 'sitemap.xml'; ?>">
    <link rel="manifest" href="<?php echo $base_url . 'site.webmanifest'; ?>">

    <?php endif; if ($page_icons): ?>

    <!-- Site Icons -->

    <link rel="icon" sizes="32x32" href="<?php echo (addTime($page_level . 'favicon.ico')); ?>">
    <link rel="icon" type="image/svg+xml" href="<?php echo (addTime($page_level . 'assets/img/icons/icon.svg')); ?>">
    <link rel="apple-touch-icon" href="<?php echo (addTime($page_level . 'assets/img/icons/apple-touch-icon.png')); ?>">

    <?php endif; if ($page_styles): ?>

    <!-- Site Resources -->

    <link type="text/css" rel="stylesheet" href="<?php echo (addTime($page_level . 'assets/css/bootstrap.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo (addTime($page_level . 'assets/css/bootstrap-icons.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo (addTime($page_level . 'assets/css/animate.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo (addTime($page_level . 'assets/css/main.css')); ?>">

    <?php endif; if ($page_noscript): ?>

    <!-- Styles for JavaScript-disabled browsers -->

    <noscript><link type="text/css" rel="stylesheet" href="<?php echo (addTime($page_level . 'assets/css/no-js.css')); ?>"></noscript>

    <?php endif; ?>