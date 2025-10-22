
    <!-- Example navigation (markup based on Bootstrap 5 framework) -->

    <nav class="navbar fixed-top bg-body-tertiary border-bottom no-print">
      <div class="container">

        <a class="navbar-brand" <?php if ($page_id != 'home') echo 'href="' . $base_url . '"'; ?>>Settler</a>

        <button class="no-js navbar-toggler me-auto border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><i class="bi bi-three-dots-vertical"></i></button>

        <button class="no-js btn" type="button" id="themeSwitch" data-bs-theme-value="dark"><i class="bi bi-sun"></i></button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Settler</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'assets/errors/400.php'; ?>">400: Bad Request</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'assets/errors/401.php'; ?>">401: Unauthorized</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'assets/errors/403.php'; ?>">403: Access Forbidden</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'assets/errors/404.php'; ?>">404: Page not found</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'assets/errors/500.php'; ?>">500: Server Error</a></li>
              <hr>

              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'extras/info.php'; ?>">PHP's Information</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'make.php'; ?>">Static Site Generator</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'extras/blank.html'; ?>">Blank HTML Template</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'extras/blank.php'; ?>">Blank PHP Template</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'extras/bs-theming.php'; ?>">BS5 Theming</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo $base_url . 'extras/bs-grid.php'; ?>">BS5 Grid</a></li>
          </div>
        </div>
      </div>
    </nav>
