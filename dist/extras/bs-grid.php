
<?php $page_id         = '';
      $page_ver        = '';
      $page_type       = '';
      $page_class      = '';
      $page_level      = '../';
      $page_path       = '';

      $page_lang       = 'en';
      $page_title      = 'Bootstrap Grid System';
      $page_desc       = '';

      require $page_level . 'site.php';

      $page_csp        = '';
      $page_robots     = '';
      $page_autoformat = '';
      $page_canonical  = '';
      $page_head_attr  = '';
      $page_body_attr  = '';

      $page_alerts     = false;

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php';

          ?>

    <style>

      .themed-container {
        margin-bottom: 1.5rem;
      }

      .themed-container, .themed-grid-col {
        padding-top: .75rem;
        padding-bottom: .75rem;
        background-color: rgba(50, 150, 250, .15);
        border: 1px dashed rgba(50, 150, 250, .85);
      }

    </style>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <?php include $assets . 'inc/pages_body-nav.php'; ?>

    <main class="py-5 mt-5">

      <section class="container">
        <h1>Bootstrap Grid System</h1>

        <p>Bootstrap 5 includes six default breakpoints, sometimes referred to as grid tiers, for building responsively. These breakpoints can be customized if you’re using source Sass files. Each breakpoint was chosen to comfortably hold containers whose widths are multiples of 12. Breakpoints are also representative of a subset of common device sizes and viewport dimensions—they don’t specifically target every use case or device. Instead, the ranges provide a strong and consistent foundation to build on for nearly any device.</p>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Breakpoint</th>
              <th>Class infix</th>
              <th>Dimensions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Extra small</td>
              <td><em>None</em></td>
              <td>&lt; 576px</td>
            </tr>
            <tr>
              <td>Small</td>
              <td><code>sm</code></td>
              <td>≥ 576px</td>
            </tr>
            <tr>
              <td>Medium</td>
              <td><code>md</code></td>
              <td>≥ 768px</td>
            </tr>
            <tr>
              <td>Large</td>
              <td><code>lg</code></td>
              <td>≥ 992px</td>
            </tr>
            <tr>
              <td>Extra large</td>
              <td><code>xl</code></td>
              <td>≥ 1200px</td>
            </tr>
            <tr>
              <td>Extra extra large</td>
              <td><code>xxl</code></td>
              <td>≥ 1400px</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section class="py-5">
        <div class="container">
          <h2>Containers</h2>

          <p>Containers are a fundamental building block of Bootstrap that contain, pad, and align your content within a given device or viewport. The example below illustrates how each container’s <code>max-width</code> compares to the original <code>.container</code> and <code>.container-fluid</code> across each breakpoint.</p>
            
          <p>In these examples the <code>.themed-container</code> class is added to the containers to add some theming. This is not a class that is available in Bootstrap by default.</p>
        </div>

        <div class="text-center">
          <div class="container themed-container">.container</div>
          <div class="container-sm themed-container">.container-sm</div>
          <div class="container-md themed-container">.container-md</div>
          <div class="container-lg themed-container">.container-lg</div>
          <div class="container-xl themed-container">.container-xl</div>
          <div class="container-xxl themed-container">.container-xxl</div>
          <div class="container-fluid themed-container">.container-fluid</div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <h2>Flexbox Grid</h2>

          <p>In these examples the <code>.themed-grid-col</code> class is added to the columns to add some theming. This is not a class that is available in Bootstrap by default.</p>

          <div class="row">
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-1 themed-grid-col">.col-1</div>
             <div class="col-2 themed-grid-col">.col-2</div>
             <div class="col-2 themed-grid-col">.col-2</div>
             <div class="col-2 themed-grid-col">.col-2</div>
             <div class="col-2 themed-grid-col">.col-2</div>
             <div class="col-2 themed-grid-col">.col-2</div>
             <div class="col-2 themed-grid-col">.col-2</div>
             <div class="col-3 themed-grid-col">.col-3</div>
             <div class="col-3 themed-grid-col">.col-3</div>
             <div class="col-3 themed-grid-col">.col-3</div>
             <div class="col-3 themed-grid-col">.col-3</div>
             <div class="col-4 themed-grid-col">.col-4</div>
             <div class="col-4 themed-grid-col">.col-4</div>
             <div class="col-4 themed-grid-col">.col-4</div>
             <div class="col-5 themed-grid-col">.col-5</div>
             <div class="col-5 themed-grid-col">.col-5</div>
             <div class="col-2 themed-grid-col">.col-2</div>
             <div class="col-6 themed-grid-col">.col-6</div>
             <div class="col-6 themed-grid-col">.col-6</div>
             <div class="col-7 themed-grid-col">.col-7</div>
             <div class="col-5 themed-grid-col">.col-5</div>
             <div class="col-8 themed-grid-col">.col-8</div>
             <div class="col-4 themed-grid-col">.col-4</div>
             <div class="col-9 themed-grid-col">.col-9</div>
             <div class="col-3 themed-grid-col">.col-3</div>
             <div class="col-10 themed-grid-col">.col-10</div>
             <div class="col-2 themed-grid-col">.col-2</div>
             <div class="col-11 themed-grid-col">.col-11</div>
             <div class="col-1 themed-grid-col">.col-1</div>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <h3>Five grid tiers</h3>
          <p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>

          <div class="row mb-3 text-center">
            <div class="col-4 themed-grid-col">.col-4</div>
            <div class="col-4 themed-grid-col">.col-4</div>
            <div class="col-4 themed-grid-col">.col-4</div>
          </div>

          <div class="row mb-3 text-center">
            <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
            <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
            <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
          </div>

          <div class="row mb-3 text-center">
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
          </div>

          <div class="row mb-3 text-center">
            <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
            <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
            <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
          </div>

          <div class="row mb-3 text-center">
            <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
            <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
            <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
          </div>

          <div class="row mb-3 text-center">
            <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
            <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
            <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
          </div>

          <h3 class="mt-5">Three equal columns</h3>
          <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>

          <div class="row mb-3 text-center">
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
          </div>

          <h3 class="mt-5">Three equal columns alternative</h3>
          <p>By using the <code>.row-cols-*</code> classes, you can easily create a grid with equal columns.</p>

          <div class="row row-cols-md-3 mb-3 text-center">
            <div class="col themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code></div>
            <div class="col themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code></div>
            <div class="col themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code></div>
          </div>
      
          <h3 class="mt-5">Three unequal columns</h3>
          <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>

          <div class="row mb-3 text-center">
            <div class="col-md-3 themed-grid-col">.col-md-3</div>
            <div class="col-md-6 themed-grid-col">.col-md-6</div>
            <div class="col-md-3 themed-grid-col">.col-md-3</div>
          </div>

          <h3 class="mt-5">Two columns</h3>
          <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>

          <div class="row mb-3 text-center">
            <div class="col-md-8 themed-grid-col">.col-md-8</div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
          </div>

          <h3 class="mt-5">Two columns with two nested columns</h3>
          <p>Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
          <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>

          <div class="row mb-3 text-center">
            <div class="col-md-8 themed-grid-col">
              <div class="pb-3">.col-md-8</div>
              <div class="row">
                <div class="col-md-6 themed-grid-col">.col-md-6</div>
                <div class="col-md-6 themed-grid-col">.col-md-6</div>
              </div>
            </div>
            <div class="col-md-4 themed-grid-col">.col-md-4</div>
          </div>

          <h3 class="mt-5">Mixed: mobile and desktop</h3>
          <p>The Bootstrap v5 grid system has six tiers of classes: xs (extra small, this class infix is not used), sm (small), md (medium), lg (large), xl (x-large), and xxl (xx-large). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
          <p>Each tier of classes scales up, meaning if you plan on setting the same widths for md, lg, xl and xxl, you only need to specify md.</p>

          <div class="row mb-3 text-center">
            <div class="col-md-8 themed-grid-col">.col-md-8</div>
            <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
          </div>

          <div class="row mb-3 text-center">
            <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
            <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
            <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
          </div>

          <div class="row mb-3 text-center">
            <div class="col-6 themed-grid-col">.col-6</div>
            <div class="col-6 themed-grid-col">.col-6</div>
          </div>

          <h3 class="mt-5">Mixed: mobile, tablet, and desktop</h3>

          <div class="row mb-3 text-center">
            <div class="col-sm-6 col-lg-8 themed-grid-col">.col-sm-6 .col-lg-8</div>
            <div class="col-6 col-lg-4 themed-grid-col">.col-6 .col-lg-4</div>
          </div>

          <div class="row mb-3 text-center">
            <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
            <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
            <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
          </div>

          <h3 class="mt-5">Gutters</h3>
          <p>With <code>.gx-*</code> classes, the horizontal gutters can be adjusted.</p>

          <div class="row">
            <div class="col themed-grid-col">
              <div class="row row-cols-1 row-cols-md-3 gx-5 text-center">
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gx-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gx-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gx-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gx-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gx-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gx-5</code> gutters</div></div>
              </div>
            </div>
          </div>

          <p class="mt-4">Use the <code>.gy-*</code> classes to control the vertical gutters.</p>

          <div class="row">
            <div class="col themed-grid-col">
              <div class="row row-cols-1 row-cols-md-3 gy-5 text-center">
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gy-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gy-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gy-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gy-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gy-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.gy-5</code> gutters</div></div>
              </div>
            </div>
          </div>

          <p class="mt-4">With <code>.g-*</code> classes, the gutters in both directions can be adjusted.</p>

          <div class="row">
            <div class="col themed-grid-col">
              <div class="row row-cols-1 row-cols-md-3 g-5 text-center">
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.g-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.g-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.g-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.g-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.g-5</code> gutters</div></div>
                <div class="col"><div class="themed-grid-col"><code>.col</code> with <code>.g-5</code> gutters</div></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="bg-primary text-center py-5">
      <a class="btn btn-outline-light" href="https://getbootstrap.com/docs/5.3/getting-started/" target="_blank">Bootstrap 5.x Documentation</a>
    </footer>

    <?php include $assets . 'inc/pages_body-alerts.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>
