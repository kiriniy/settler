
    <!-- Site Settings -->

    <meta charset="<?= $page_charset; ?>">
    <meta http-equiv="content-security-policy" content="<?= $page_csp; ?>">

    <title><?= $page_pretitle . $page_title . $page_posttitle; ?></title>

    <meta name="robots" content="<?= $page_robots; ?>">
    <meta name="description" content="<?= $page_desc; ?>">
    <meta name="viewport" content="<?= $page_viewport; ?>">
    <meta name="format-detection" content="<?= $page_autoformat; ?>">

    <meta name="google-site-verification" content="<?= $vrf_code_google; ?>">
    <meta name="yandex-verification" content="<?= $vrf_code_yandex; ?>">
    <meta name="msvalidate.01" content="<?= $vrf_code_msbing; ?>">

    <?php if ($page_sharing): ?>

    <!-- Open Graph -->

    <meta name="twitter:card" content="<?= $sharing_x_card; ?>">
    <meta name="twitter:title" content="<?= $sharing_title; ?>">
    <meta name="twitter:description" content="<?= $sharing_desc; ?>">
    <meta name="twitter:image" content="<?= $sharing_x_img; ?>">
    <meta name="twitter:image:alt" content="<?= $sharing_x_img_alt; ?>">
    <meta name="twitter:url" content="<?= $sharing_url; ?>">

    <meta property="og:type" content="<?= $sharing_og_type; ?>">
    <meta property="og:title" content="<?= $sharing_title; ?>">
    <meta property="og:description" content="<?= $sharing_desc; ?>">
    <meta property="og:locale" content="<?= $sharing_og_locale; ?>">
    <meta property="og:image" content="<?= $sharing_og_img; ?>">
    <meta property="og:image:alt" content="<?= $sharing_og_img_alt; ?>">
    <meta property="og:image:width" content="<?= $sharing_og_img_w; ?>">
    <meta property="og:image:height" content="<?= $sharing_og_img_h; ?>">
    <meta property="og:url" content="<?= $sharing_url; ?>">
    
    <?php endif; if ($page_info): ?>

    <!-- Site Information -->

    <link rel="canonical" href="<?= $base_url . $page_path; ?>">
    <link rel="author" href="<?= $base_url . 'humans.txt'; ?>">
    <link rel="sitemap" href="<?= $base_url . 'sitemap.xml'; ?>">
    <link rel="manifest" href="<?= $base_url . 'site.webmanifest'; ?>">

    <?php endif; if ($page_icons): ?>

    <!-- Site Icons -->

    <link rel="icon" sizes="32x32" href="<?= (addTime($page_level . 'favicon.ico')); ?>">
    <link rel="icon" type="image/svg+xml" href="<?= (addTime($page_level . 'assets/img/icons/icon.svg')); ?>">
    <link rel="apple-touch-icon" href="<?= (addTime($page_level . 'assets/img/icons/apple-touch-icon.png')); ?>">

    <?php endif; if ($page_styles): ?>

    <!-- Flash of unstyled content (FOUC) -->

    <script src="<?= $base_url . 'assets/js/fouc.js'; ?>"></script>

    <!-- Site Resources -->

    <link type="text/css" rel="stylesheet" href="<?= (addTime($page_level . 'assets/css/bootstrap.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?= (addTime($page_level . 'assets/css/bootstrap-icons.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?= (addTime($page_level . 'assets/css/animate.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?= (addTime($page_level . 'assets/css/main.css')); ?>">

    <?php endif; if ($page_noscript): ?>

    <!-- Styles for JavaScript-disabled browsers -->

    <noscript><link type="text/css" rel="stylesheet" href="<?= (addTime($page_level . 'assets/css/no-js.css')); ?>"></noscript>

    <?php endif; ?>