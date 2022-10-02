
    <!-- Example navigation (markup based on Bootstrap 3 framework) -->

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i></button>
          <a class="navbar-brand" href="<?php echo $base_url; ?>">Settler</a>
        </div>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            
            <li <?php echo ($page_id == 'home') ? 'class="hidden"' : ''; ?>>
              <a href="<?php echo $base_url; ?>"><i class="fa fa-home"></i></a>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error Pages <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="assets/errors/404.php">Custom 404</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
