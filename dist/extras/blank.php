
<?php $page_id         = '';
      $page_ver        = '?v=' . filemtime(__FILE__);
      $page_type       = '';
      $page_class      = '';
      $page_level      = '../';
      $page_path       = 'extras/';

      $page_notices    = true;

      $page_title      = '';
      $page_desc       = '';

      require $page_level . 'site.php';

      // $page_charset    = '';
      $page_csp        = '';

      $page_pretitle   = '';
      $page_posttitle  = '';

      $page_robots     = '';
      $page_viewport   = '';
      $page_autoformat = '';
      $page_canonical  = '';

      // $page_html_attr  = '';
      // $page_head_attr  = '';
      // $page_body_attr  = '';

      $og_title        = '';
      $og_desc         = '';
      $og_card         = '';
      $og_type         = '';
      $og_locale       = '';
      $og_url          = '';
      $og_img_tw       = '';
      $og_img_fb       = '';
      $og_img_vk       = '';
      $og_img_tw_alt   = '';
      $og_img_fb_alt   = '';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          include $assets . 'inc/pages_head-snippets.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php';

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

    <?php include $assets . 'inc/pages_body-notices.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>
