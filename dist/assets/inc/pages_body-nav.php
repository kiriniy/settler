
    <!-- Example navigation (markup based on Bootstrap 5 framework) -->

    <nav class="navbar fixed-top bg-body-tertiary border-bottom no-print">
      <div class="container">

        <a class="navbar-brand" <?php if ($page_id != 'home') echo 'href="' . $base_url . '"'; ?>>Settler</a>

        <button class="no-js navbar-toggler me-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-three-dots-vertical"></i></button>

        <button class="no-js btn" type="button" id="themeSwitch" data-bs-theme-value="dark"><i class="bi bi-circle-half"></i></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav">
            <a class="nav-link" href="<?php echo $base_url . 'assets/errors/404.php'; ?>">Custom 404</a>
            <a class="nav-link" href="<?php echo $base_url . 'extras/info.php'; ?>">PHP's Information</a>            
            <a class="nav-link" href="<?php echo $base_url . 'extras/blank.html'; ?>">Blank HTML Template</a>
            <a class="nav-link" href="<?php echo $base_url . 'extras/blank.php'; ?>">Blank PHP Template</a>
            <a class="nav-link" href="<?php echo $base_url . 'extras/bs-theming.php'; ?>">BS5 Theming</a>
            <a class="nav-link" href="<?php echo $base_url . 'extras/bs-grid.php'; ?>">BS5 Grid</a>
          </div>
        </div>

      </div>
    </nav>
