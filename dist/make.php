
<?php $page_id      = '';
	  $page_ver     = '?v=' . filemtime(__FILE__);
	  $page_type    = '';
	  $page_class   = '';
	  $page_level   = './';
	  $page_path    = '';

	  $page_lang    = 'en';
	  $page_title   = 'Static Site Generator';
	  $page_desc    = '';

	  require $page_level . 'site.php';

	  $page_csp        = '';
	  $page_robots     = '';
	  $page_autoformat = '';
	  $page_canonical  = '';
	  $page_head_attr  = '';
	  $page_body_attr  = '';
	  
	  $page_notices    = false;

      // Local server full URL (with slash)

      $localhost_url   = 'http://localhost:8888/project_settler/dist/';

      // List of pages to be created
	  // copy($localhost_url . 'path-if-any/filename.php', 'path-if-any/filename.html');

      copy($localhost_url . 'index.php',        'index.html');
	  copy($localhost_url . 'extras/blank.php', 'extras/blank-2.html');

      // ...and so on.
	  // Just run this file after each update.

	  ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>

	<?php include $assets . 'inc/pages_head-meta.php';
		  include $assets . 'inc/pages_head-snippets.php';
		  include $assets . 'inc/pages_head-resources.php';
		  include $assets . 'inc/pages_head-noscript.php';

		  ?>

  </head>

  <body <?php echo $page_body_attr; ?>>

	<!-- PAGE CONTENT START -->

	<?php include $assets . 'inc/pages_body-nav.php'; ?>

	<!-- Example content (markup based on Bootstrap 5 framework) -->

	<main class="h-100 d-flex align-items-center">
	  <div class="container">
		<div class="row">
		  <div class="col-md-8">
			<h1 class="display-6">And... generated!</h1>
			<p class="lead">This is simple static site generator. It creates static html files next to php files of your choice with all 'include' and dynamic stuff, so you can use php-less hosting or GitHub Pages. Simply open and edit <span class="text-danger">make.php</span> at project root directory and run it again after each site update.</p>
		  </div>
		</div>
	  </div>
	</main>

	<!-- PAGE CONTENT END -->

	<?php include $assets . 'inc/pages_body-notices.php';
		  include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>
