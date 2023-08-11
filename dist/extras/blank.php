
<?php $page_id         = '';
      $page_ver        = '';
      $page_path       = '';
      $page_type       = '';
      $page_class      = '';

      $page_notices    = true;

      $page_title      = '';
      $page_desc       = '';

      require '../assets/inc/pages_config.php';

      $page_charset    = '';
      $page_prefetch   = '';
      $page_csp        = '';
      $page_cache      = '';

      $page_pretitle   = '';
      $page_posttitle  = '';

      $page_robots     = '';
      $page_viewport   = '';
      $page_autoformat = '';
      $page_canonical  = '';

      $page_html_attr  = 'lang=""';
      $page_head_attr  = 'prefix="og: https://ogp.me/ns#"';
      $page_base_attr  = 'href="../"';
      $page_body_attr  = 'class="" id="page-top"';

      $og_title        = '';
      $og_desc         = '';
      $og_card         = '';
      $og_type         = '';
      $og_locale       = '';
      $og_url          = '';
      $og_img_tw       = '';
      $og_img_fb       = '';
      $og_img_vk       = '';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>
    <base <?php echo $page_base_attr; ?>>

    <?php include $inc_path . 'pages_head-meta.php';
          include $inc_path . 'pages_head-snippets.php';
          include $inc_path . 'pages_head-resources.php';
          include $inc_path . 'pages_head-noscript.php';

          ?>

    <!-- JSON Schema Markup Example -->

    <script type="application/ld+json">

    {
      "@context": "https://schema.org",
      "@type": "",
      "name": "",
      "url": "",
      "logo": "",
      "sameAs": ""
    }

    </script>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->



    <!-- PAGE CONTENT END -->

    <?php include $inc_path . 'pages_body-notices.php';
          include $inc_path . 'pages_body-scripts.php'; ?>

  </body>
</html>
