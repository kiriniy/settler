
<?php $page_id         = '';
      $page_ver        = '?v=' . filemtime(__FILE__);
      $page_group      = '';
      $page_class      = '';
      $page_level      = '../';
      $page_path       = 'extras/';

  //  $page_lang       = '';
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

      $page_alerts     = true;

      $sharing_title        = '';
      $sharing_desc         = '';
      $sharing_url          = '';
      $sharing_x_card       = '';
      $sharing_x_img        = '';
      $sharing_x_img_alt    = '';
      $sharing_og_type      = '';
      $sharing_og_locale    = '';
      $sharing_og_img       = '';
      $sharing_og_img_alt   = '';
      $sharing_og_img_w     = '';
      $sharing_og_img_h     = '';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          include $assets . 'inc/pages_head-sharing.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php'; ?>

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

    <?php include $assets . 'inc/pages_body-alerts.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>
