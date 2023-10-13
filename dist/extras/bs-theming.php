
<?php $page_id         = '';
      $page_ver        = '';
      $page_path       = '';
      $page_type       = '';
      $page_class      = '';

      $page_notices    = false;

      $page_title      = 'Bootstrap Theme Preview';
      $page_desc       = '';

      require '../assets/inc/pages_config.php';

      $page_prefetch   = '';
      $page_csp        = '';
      $page_cache      = '';
      $page_robots     = '';
      $page_autoformat = '';
      $page_canonical  = '';
      $page_head_attr  = '';
      $page_body_attr  = 'class="pt-5"';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>
    <base <?php echo $page_base_attr; ?>>

    <?php include $inc_path . 'pages_head-meta.php';
          include $inc_path . 'pages_head-resources.php';
          include $inc_path . 'pages_head-noscript.php';

          ?>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <?php include $inc_path . 'pages_body-menu.php'; ?>

    <header class="py-5 d-flex align-items-center" style="min-height: 50%; background-image: radial-gradient(circle at 40% 91%, rgba(251, 251, 251,0.04) 0%, rgba(251, 251, 251,0.04) 50%,rgba(229, 229, 229,0.04) 50%, rgba(229, 229, 229,0.04) 100%),radial-gradient(circle at 66% 97%, rgba(36, 36, 36,0.04) 0%, rgba(36, 36, 36,0.04) 50%,rgba(46, 46, 46,0.04) 50%, rgba(46, 46, 46,0.04) 100%),radial-gradient(circle at 86% 7%, rgba(40, 40, 40,0.04) 0%, rgba(40, 40, 40,0.04) 50%,rgba(200, 200, 200,0.04) 50%, rgba(200, 200, 200,0.04) 100%),radial-gradient(circle at 15% 16%, rgba(99, 99, 99,0.04) 0%, rgba(99, 99, 99,0.04) 50%,rgba(45, 45, 45,0.04) 50%, rgba(45, 45, 45,0.04) 100%),radial-gradient(circle at 75% 99%, rgba(243, 243, 243,0.04) 0%, rgba(243, 243, 243,0.04) 50%,rgba(37, 37, 37,0.04) 50%, rgba(37, 37, 37,0.04) 100%);">
      <div class="container">
        <div class="col-10 col-md-8 mx-auto text-center">
          <a class="link-body-emphasis" href="https://getbootstrap.com/docs/5.3/getting-started/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" height="60" class="my-4" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
          </a>
          <h1>Theme Preview</h1>
          <p class="lead">Customize Bootstrap's components to get your very own version.</p>
          <p>In order to use your custom Sass code as CSS in the browser, you need a Sass <a href="https://sass-lang.com/install/" target="_blank">compiler</a>. Sass ships as a CLI package, but you can also compile it with other build tools like <a href="https://gulpjs.com/" target="_blank">Gulp</a> or <a href="https://webpack.js.org/" target="_blank">Webpack</a>, or with a GUI applications. Some IDEs also have Sass compilers built in or as downloadable extensions.</p>

          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="extras/bs-theming.php#typography">Typography</a></li>
            <li class="nav-item"><a class="nav-link" href="extras/bs-theming.php#colors">Colors</a></li>
            <li class="nav-item"><a class="nav-link" href="extras/bs-theming.php#tables">Tables</a></li>
            <li class="nav-item"><a class="nav-link" href="extras/bs-theming.php#forms">Forms</a></li>
            <li class="nav-item"><a class="nav-link" href="extras/bs-theming.php#images">Images</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Components</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="extras/bs-theming.php#accordion">Accordion</a></li>
                <li><a class="dropdown-item" href="extras/bs-theming.php#alerts">Alerts</a></li>
                <li><a class="dropdown-item" href="extras/bs-theming.php#badge">Badge</a></li>
                <li><a class="dropdown-item" href="extras/bs-theming.php#breadcrumb">Breadcrumb</a></li>
                <li><a class="dropdown-item" href="extras/bs-theming.php#buttons">Buttons</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Utilities</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="extras/bs-theming.php#shadows">Shadows</a></li>
                <li class="nav-item"><a class="nav-link" href="extras/bs-theming.php#borders">Borders</a></li>
                <li class="nav-item"><a class="nav-link" href="extras/bs-theming.php#spacing">Spacing</a></li>
              </ul>
            </li>
            
          </ul>

        </div>
      </div>
    </header>

    <main>

      <!-- Typography -->

      <section class="py-5" id="typography">
        <div class="container">

          <h2>Typography</h2>

          <div class="row">
            <div class="col-lg-7">

              <hr class="my-5">

              <h1>Bootstrap H1</h1>
              <h2>Bootstrap H2</h2>
              <h3>Bootstrap H3</h3>
              <h4>Bootstrap H4</h4>
              <h5>Bootstrap H5</h5>
              <h6>Bootstrap H6</h6>

              <h1 class="my-5">This is Heading <br><small class="text-secondary">with faded secondary text</small></h1>

              <p class="lead mb-5">This is a <code>lead</code> paragraph. It stands out from regular paragraphs.</p>

              <p class="fw-bold">Bold text affected by <code>.fw-bold</code> class.</p>
              <p class="fw-bolder">Bolder weight text affected by <code>.fw-bolder</code> class.</p>
              <p class="fw-semibold">Semibold weight text affected by <code>.fw-semibold</code> class.</p>
              <p class="fw-medium">Medium weight text affected by <code>.fw-medium</code> class.</p>
              <p class="fw-normal">Normal weight text affected by <code>.fw-normal</code> class.</p>
              <p class="fw-light">Light weight text affected by <code>.fw-light</code> class.</p>
              <p class="fw-lighter">Lighter weight text affected by <code>.fw-lighter</code> class.</p>
              <p class="fst-italic">Italic text affected by <code>.fst-italic</code> class.</p>
              <p class="fst-normal">Text with normal font style affected by <code>.fst-normal</code> class.</p>
              <p class="font-monospace">This is monospace text affected by <code>.font-monospace</code> class.</p>
              <p class="text-decoration-underline">This text has a line underneath it by <code>.text-decoration-underline</code> class.</p>
              <p class="text-decoration-line-through">This text has a line going through it by <code>.text-decoration-line-through</code> class.</p>
              <p><a href="#" class="text-decoration-none">This link has its text decoration removed</a> by <code>.text-decoration-none</code> class.</p>
              <p><a>This is a placeholder link without href or any class.</a></p>
              <p><small>This line of text is meant to be treated as fine print affected by <code>&lt;small&gt;</code> tag.</small></p>
              <p><strong>This line rendered as bold text affected by <code>&lt;strong&gt;</code> tag.</strong></p>
              <p><samp>This text is sample output affected by <code>&lt;samp&gt;</code> tag.</samp></p>
              <p>Use the <code>&lt;kbd&gt;</code> to indicate <kbd>input</kbd> that is typically entered via keyboard.</p>
              <p>The <abbr title="HyperText Markup Language">HTML</abbr> abbreviation element affected by <code>&lt;abbr&gt;</code> tag.</p>
              <p>You can use the <code>&lt;mark&gt;</code> tag to <mark>highlight</mark> text.</p>              

              <hr class="my-5">

              <ul class="list-unstyled mb-5">
                <li>This is a list.</li>
                <li>It appears completely unstyled.</li>
                <li>Structurally, it's still a list.</li>
                <li>However, this style only applies to immediate child elements.</li>
                <li>Nested lists:
                  <ul>
                    <li>are unaffected by this style</li>
                    <li>will still show a bullet</li>
                    <li>and have appropriate left margin</li>
                  </ul>
                </li>
                <li>This may still come in handy in some situations.</li>
              </ul>

              <ul class="list-inline">
                <li class="list-inline-item">This is a list item.</li>
                <li class="list-inline-item">And another one.</li>
                <li class="list-inline-item">But they're displayed inline.</li>
              </ul>

            </div>

            <div class="col-lg-5">

              <hr class="my-5">

              <p class="display-1">Display 1</p>
              <p class="display-2">Display 2</p>
              <p class="display-3">Display 3</p>
              <p class="display-4">Display 4</p>
              <p class="display-5">Display 5</p>
              <p class="display-6">Display 6</p>

              <hr class="my-5">

              <p class="fs-1">Font Size 1</p>
              <p class="fs-2">Font Size 2</p>
              <p class="fs-3">Font Size 3</p>
              <p class="fs-4">Font Size 4</p>
              <p class="fs-5">Font Size 5</p>
              <p class="fs-6">Font Size 6</p>

              <hr class="my-5">

              <figure>
                <blockquote class="blockquote"><p>A well-known quote, contained in a blockquote element.</p></blockquote>
                <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
              </figure>

              <hr class="my-5">
 
              <p class="lh-1 pb-3">This is a long paragraph written to show how the line-height of an element is affected by <code>.lh-1</code> class. Classes are applied to the element itself or sometimes the parent element.</p>

              <p class="lh-sm pb-3">This is a long paragraph written to show how the line-height of an element is affected by <code>.lh-sm</code> class. Classes are applied to the element itself or sometimes the parent element.</p>

              <p class="lh-base pb-3">This is a long paragraph written to show how the line-height of an element is affected by <code>.lh-base</code> class. Classes are applied to the element itself or sometimes the parent element.</p>

              <p class="lh-lg">This is a long paragraph written to show how the line-height of an element is affected by <code>.lh-lg</code> class. Classes are applied to the element itself or sometimes the parent element.</p>

              <hr class="my-5">

              <pre><code>&lt;p&gt;This is sample text affected by <code>&lt;pre&gt;</code> and <code>&lt;code&gt;</code> tags.&lt;/p&gt;<br>&lt;p&gt;And another line of sample text here...&lt;/p&gt;</code></pre>

            </div>
          </div>

        </div>
      </section>

      <!-- Colors -->

      <section class="py-5" id="colors">
        <div class="container">

          <h2>Colors</h2>

          <div class="row">
            <div class="col-lg-7">

              <h3 class="mb-5 text-secondary">Backgrounds</h3>

              <div class="row g-2">
                <div class="col-7"><div class="p-3 mb-2 bg-primary text-white">.bg-primary .text-white</div></div>
                <div class="col-5"><div class="p-3 mb-2 text-bg-primary">.text-bg-primary</div></div>
              </div>
              <div class="p-3 mb-2 bg-primary-subtle text-emphasis-primary">.bg-primary-subtle .text-emphasis-primary</div>
              <div class="row g-2">
                <div class="col-7"><div class="p-3 mb-2 bg-secondary text-white">.bg-secondary .text-white</div></div>
                <div class="col-5"><div class="p-3 mb-2 text-bg-secondary">.text-bg-secondary</div></div>
              </div>
              <div class="p-3 mb-2 bg-secondary-subtle text-emphasis-secondary">.bg-secondary-subtle .text-emphasis-secondary</div>
              <div class="row g-2">
                <div class="col-7"><div class="p-3 mb-2 bg-success text-white">.bg-success .text-white</div></div>
                <div class="col-5"><div class="p-3 mb-2 text-bg-success">.text-bg-success</div></div>
              </div>
              <div class="p-3 mb-2 bg-success-subtle text-emphasis-success">.bg-success-subtle .text-emphasis-success</div>
              <div class="row g-2">
                <div class="col-7"><div class="p-3 mb-2 bg-danger text-white">.bg-danger .text-white</div></div>
                <div class="col-5"><div class="p-3 mb-2 text-bg-danger">.text-bg-danger</div></div>
              </div>
              <div class="p-3 mb-2 bg-danger-subtle text-emphasis-danger">.bg-danger-subtle .text-emphasis-danger</div>
              <div class="row g-2">
                <div class="col-7"><div class="p-3 mb-2 bg-warning text-black">.bg-warning .text-black</div></div>
                <div class="col-5"><div class="p-3 mb-2 text-bg-warning">.text-bg-warning</div></div>
              </div>
              <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning">.bg-warning-subtle .text-emphasis-warning</div>
              <div class="row g-2">
                <div class="col-7"><div class="p-3 mb-2 bg-info text-black">.bg-info .text-black</div></div>
                <div class="col-5"><div class="p-3 mb-2 text-bg-info">.text-bg-info</div></div>
              </div>
              <div class="p-3 mb-2 bg-info-subtle text-emphasis-info">.bg-info-subtle .text-emphasis-info</div>
              <div class="row g-2">
                <div class="col-7"><div class="p-3 mb-2 bg-light text-black">.bg-light .text-black</div></div>
                <div class="col-5"><div class="p-3 mb-2 text-bg-light">.text-bg-light</div></div>
              </div>
              <div class="p-3 mb-2 bg-light-subtle text-emphasis-light">.bg-light-subtle .text-emphasis-light</div>
              <div class="row g-2">
                <div class="col-7"><div class="p-3 mb-2 bg-dark text-white">.bg-dark .text-white</div></div>
                <div class="col-5"><div class="p-3 mb-2 text-bg-dark">.text-bg-dark</div></div>
              </div>
              <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">.bg-dark-subtle .text-emphasis-dark</div>
              <div class="p-3 mb-2 bg-body-secondary">.bg-body-secondary</div>
              <div class="p-3 mb-2 bg-body-tertiary">.bg-body-tertiary</div>
              <div class="p-3 mb-2 bg-body text-body">.bg-body .text-body</div>
              <div class="p-3 mb-2 bg-black text-white">.bg-black .text-white</div>
              <div class="p-3 mb-2 bg-white text-dark">.bg-white .text-dark</div>
              <div class="p-3 mb-2 bg-transparent text-body">.bg-transparent .text-body</div>
            </div>

            <div class="col-lg-5">

              <h3 class="mb-5 text-secondary">With Gradient</h3>

              <div class="p-3 mb-2 bg-gradient bg-primary text-white">.bg-primary .bg-gradient .text-white</div>
              <div class="p-3 mb-2 bg-gradient bg-primary-subtle text-emphasis-primary">.bg-primary-subtle .bg-gradient .text-emphasis-primary</div>
              <div class="p-3 mb-2 bg-gradient bg-secondary text-white">.bg-secondary .bg-gradient .text-white</div>
              <div class="p-3 mb-2 bg-gradient bg-secondary-subtle text-emphasis-secondary">.bg-secondary-subtle .bg-gradient .text-emphasis-secondary</div>
              <div class="p-3 mb-2 bg-gradient bg-success text-white">.bg-success .bg-gradient .text-white</div>
              <div class="p-3 mb-2 bg-gradient bg-success-subtle text-emphasis-success">.bg-success-subtle .bg-gradient .text-emphasis-success</div>
              <div class="p-3 mb-2 bg-gradient bg-danger text-white">.bg-danger .bg-gradient .text-white</div>
              <div class="p-3 mb-2 bg-gradient bg-danger-subtle text-emphasis-danger">.bg-danger-subtle .bg-gradient .text-emphasis-danger</div>
              <div class="p-3 mb-2 bg-gradient bg-warning text-dark">.bg-warning .bg-gradient .text-dark</div>
              <div class="p-3 mb-2 bg-gradient bg-warning-subtle text-emphasis-warning">.bg-warning-subtle .bg-gradient .text-emphasis-warning</div>
              <div class="p-3 mb-2 bg-gradient bg-info text-dark">.bg-info .bg-gradient .text-dark</div>
              <div class="p-3 mb-2 bg-gradient bg-info-subtle text-emphasis-info">.bg-info-subtle .bg-gradient .text-emphasis-info</div>
              <div class="p-3 mb-2 bg-gradient bg-light text-dark">.bg-light .bg-gradient .text-dark</div>
              <div class="p-3 mb-2 bg-gradient bg-light-subtle text-emphasis-light">.bg-light-subtle .bg-gradient .text-emphasis-light</div>
              <div class="p-3 mb-2 bg-gradient bg-dark text-white">.bg-dark .bg-gradient .text-white</div>
              <div class="p-3 mb-2 bg-gradient bg-dark-subtle text-emphasis-dark">.bg-dark-subtle .bg-gradient .text-emphasis-dark</div>
              <div class="p-3 mb-2 bg-gradient bg-body-secondary">.bg-body-secondary .bg-gradient</div>
              <div class="p-3 mb-2 bg-gradient bg-body-tertiary">.bg-body-tertiary .bg-gradient</div>
              <div class="p-3 mb-2 bg-gradient bg-body text-body">.bg-body .bg-gradient .text-body</div>
              <div class="p-3 mb-2 bg-gradient bg-black text-white">.bg-black .bg-gradient .text-white</div>
              <div class="p-3 mb-2 bg-gradient bg-white text-dark">.bg-white .bg-gradient .text-dark</div>
              <div class="p-3 mb-2 bg-gradient bg-transparent text-body">.bg-transparent .bg-gradient .text-body</div>
            </div>

            <div class="col-lg-7">

              <h3 class="my-5 text-secondary">Text & Links</h3>

              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-primary">.text-primary</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-primary">.link-primary</a></p></div>
              </div>            
              <p class="p-3 border border-2 text-primary-emphasis">.text-primary-emphasis</p>
              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-secondary">.text-secondary</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-secondary">.link-secondary</a></p></div>
              </div>
              <p class="p-3 border border-2 text-secondary-emphasis">.text-secondary-emphasis</p>
              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-success">.text-success</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-success">.link-success</a></p></div>
              </div>
              <p class="p-3 border border-2 text-success-emphasis">.text-success-emphasis</p>
              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-danger">.text-danger</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-danger">.link-danger</a></p></div>
              </div>
              <p class="p-3 border border-2 text-danger-emphasis">.text-danger-emphasis</p>
              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-warning">.text-warning</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-warning">.link-warning</a></p></div>
              </div>
              <p class="p-3 border border-2 text-warning-emphasis">.text-warning-emphasis</p>
              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-info">.text-info</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-info">.link-info</a></p></div>
              </div>
              <p class="p-3 border border-2 text-info-emphasis">.text-info-emphasis</p>
              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-light">.text-light</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-light">.link-light</a></p></div>
              </div>
              <p class="p-3 border border-2 text-light-emphasis">.text-light-emphasis</p>
              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-dark">.text-dark</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-dark">.link-dark</a></p></div>
              </div>
              <p class="p-3 border border-2 text-dark-emphasis">.text-dark-emphasis</p>
              <p class="p-3 border border-2 text-black">.text-black</p>
              <p class="p-3 border border-2 text-white">.text-white</p>
              <p class="p-3 border border-2 text-body">.text-body</p>
              <div class="row g-3">
                <div class="col-7"><p class="p-3 border border-2 text-body-emphasis">.text-body-emphasis</p></div>
                <div class="col-5"><p class="p-3 border border-2"><a href="#" class="link-body-emphasis">.link-body-emphasis</a></p></div>
              </div>
              <p class="p-3 border border-2 text-body-secondary">.text-body-secondary</p>
              <p class="p-3 mb-5 border border-2 text-body-tertiary">.text-body-tertiary</p>
            </div>

            <div class="col-lg-5">

              <h3 class="my-5 text-secondary">Borders</h3>

              <p class="p-3 border-2 border border-primary">.border-primary</p>
              <p class="p-3 border-2 border border-primary-subtle">.border-primary-subtle</p>
              <p class="p-3 border-2 border border-secondary">.border-secondary</p>
              <p class="p-3 border-2 border border-secondary-subtle">.border-secondary-subtle</p>
              <p class="p-3 border-2 border border-success">.border-success</p>
              <p class="p-3 border-2 border border-success-subtle">.border-success-subtle</p>
              <p class="p-3 border-2 border border-danger">.border-danger</p>
              <p class="p-3 border-2 border border-danger-subtle">.border-danger-subtle</p>
              <p class="p-3 border-2 border border-warning">.border-warning</p>
              <p class="p-3 border-2 border border-warning-subtle">.border-warning-subtle</p>
              <p class="p-3 border-2 border border-info">.border-info</p>
              <p class="p-3 border-2 border border-info-subtle">.border-info-subtle</p>
              <p class="p-3 border-2 border border-light">.border-light</p>
              <p class="p-3 border-2 border border-light-subtle">.border-light-subtle</p>
              <p class="p-3 border-2 border border-dark">.border-dark</p>
              <p class="p-3 border-2 border border-dark-subtle">.border-dark-subtle</p>
              <p class="p-3 border-2 border border-black">.border-black</p>
              <p class="p-3 border-2 border border-white">.border-white</p>
            </div>
          </div>

        </div>
      </section>

      <!-- Tables -->

      <section class="py-5" id="tables">
        <div class="container">

          <h2 class="mb-5">Tables</h2>

          <table class="table table-striped mb-5">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>

          <table class="table table-borderless mb-5">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>

          <table class="table table-hover table-bordered mb-5">
            <thead>
            <tr>
              <th scope="col">Class</th>
              <th scope="col">Heading</th>
              <th scope="col">Heading</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">Default</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-primary">
              <th scope="row">Primary</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-secondary">
              <th scope="row">Secondary</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-success">
              <th scope="row">Success</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-danger">
              <th scope="row">Danger</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-warning">
              <th scope="row">Warning</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-info">
              <th scope="row">Info</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-light">
              <th scope="row">Light</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-dark">
              <th scope="row">Dark</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            </tbody>
          </table>

          <table class="table table-sm table-bordered">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>

        </div>
      </section>

      <!-- Forms -->

      <section class="py-5" id="forms">
        <div class="container">

          <h2 class="mb-5">Forms</h2>

          <div class="row">
            <div class="col-lg-7">
              <form class="mb-5">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Input</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleSelect" class="form-label">Select menu</label>
                  <select class="form-select" id="exampleSelect">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <fieldset class="mb-3">
                  <legend>Radios buttons</legend>
                  <div class="form-check">
                    <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
                    <label class="form-check-label" for="exampleRadio1">Default radio</label>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
                    <label class="form-check-label" for="exampleRadio2">Another radio</label>
                  </div>
                </fieldset>
                <div class="mb-3">
                  <label class="form-label" for="customFile">Upload</label>
                  <input type="file" class="form-control" id="customFile">
                </div>
                <div class="mb-3 form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                </div>
                <div class="mb-3">
                  <label for="customRange3" class="form-label">Example range</label>
                  <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

            <div class="col-lg-5">
              <form>
                <fieldset disabled aria-label="Disabled fieldset example">
                  <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Disabled input</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                  </div>
                  <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Disabled select menu</label>
                    <select id="disabledSelect" class="form-select">
                      <option>Disabled select</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                      <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                      </label>
                    </div>
                  </div>
                  <fieldset class="mb-3">
                    <legend>Disabled radios buttons</legend>
                    <div class="form-check">
                      <input type="radio" name="radios" class="form-check-input" id="disabledRadio1" disabled>
                      <label class="form-check-label" for="disabledRadio1">Disabled radio</label>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="radio" name="radios" class="form-check-input" id="disabledRadio2" disabled>
                      <label class="form-check-label" for="disabledRadio2">Another radio</label>
                    </div>
                  </fieldset>
                  <div class="mb-3">
                    <label class="form-label" for="disabledCustomFile">Disabled Upload</label>
                    <input type="file" class="form-control" id="disabledCustomFile" disabled>
                  </div>
                  <div class="mb-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="disabledSwitchCheckChecked" checked disabled>
                    <label class="form-check-label" for="disabledSwitchCheckChecked">Disabled checked switch checkbox input</label>
                  </div>
                  <div class="mb-3">
                    <label for="disabledRange" class="form-label">Disabled range</label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="disabledRange">
                  </div>
                  <button type="submit" class="btn btn-primary">Disabled Submit</button>
                </fieldset>
              </form>
            </div>

            <div class="col-lg-7">

              <h3 class="py-5 text-secondary">Sizing</h3>

              <div class="mb-3">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
              </div>

              <div class="mb-3">
                <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="mb-5">
                <input type="file" class="form-control form-control-lg" aria-label="Large file input example">
              </div>

              <div class="mb-3">
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
              </div>

              <div class="mb-3">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
 
              <div class="mb-3">
                <input type="file" class="form-control form-control-sm" aria-label="Small file input example">
              </div>
            </div>

            <div class="col-lg-5">

              <h3 class="py-5 text-secondary">Input group</h3>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
 
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
              </div>

              <label for="basic-url" class="form-label">Your vanity URL</label>

              <div class="input-group mb-5">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>

              <div class="input-group">
                <span class="input-group-text">With textarea</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
            </div>

            <div class="col-lg-7">

              <h3 class="py-5 text-secondary">Floating labels</h3>         

              <form>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
              </form>
            </div>

            <div class="col-lg-5">

              <h3 class="py-5 text-secondary">Validation</h3>

              <div class="form-group mb-3">
                <input type="text" value="Valid input" class="form-control is-valid" id="inputValid">
                <div class="valid-feedback">Looks good!</div>
              </div>

              <div class="form-group">
                <input type="text" value="Invalid input" class="form-control is-invalid" id="inputInvalid">
                <div class="invalid-feedback">Please provide a valid input.</div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Images -->

      <section class="py-5" id="images">
        <div class="container">

          <h2 class="mb-5">Images</h2>

          <div class="row">            
            <div class="col-lg-7">
              <figure class="figure w-100">
                <svg class="figure-img rounded" xmlns="http://www.w3.org/2000/svg" width="100%" height="160">
                  <rect fill="#ddd" width="100%" height="160"/>
                  <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle">.figure-img</text>
                </svg>
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
              </figure>
            </div>

            <div class="col-lg-5">
              <svg class="img-thumbnail img-fluid" xmlns="http://www.w3.org/2000/svg" width="100%" height="150">
                <rect fill="#ddd" width="100%" height="150"/>
                <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle">.img-thumbnail</text>
              </svg>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Accordion -->

      <section class="py-5" id="accordion">
        <div class="container">

          <h2 class="mb-5">Accordion</h2>

          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
 
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
 
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Alerts  -->

      <section class="py-5" id="alerts">
        <div class="container">

          <h2 class="mb-5">Alerts</h2>

          <div class="row">
            <div class="col-6">
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                A simple primary alert with <a href="#" class="alert-link">an example link</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Alert heading!</h4>
                <p class="mb-0">A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div class="alert alert-success alert-dismissible fade show" role="alert">
                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p class="mb-0">A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>

            <div class="col-6">
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Alert heading!</h4>
                <p class="mb-0">A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div class="alert alert-info alert-dismissible fade show" role="alert">
                A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div class="alert alert-light alert-dismissible fade show" role="alert">
                A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div class="alert alert-dark alert-dismissible fade show" role="alert">
                A simple dark alert with <a href="#" class="alert-link">an example link</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Badge -->

      <section class="py-5">
        <div class="container">

          <h2 class="mb-5" id="badge">Badge</h2>

          <div class="row">
            <div class="col-md-6">
              <p>
                <span class="badge text-bg-primary">Primary</span>
                <span class="badge text-bg-secondary">Secondary</span>
                <span class="badge text-bg-success">Success</span>
                <span class="badge text-bg-danger">Danger</span>
                <span class="badge text-bg-warning">Warning</span>
                <span class="badge text-bg-info">Info</span>
                <span class="badge text-bg-light">Light</span>
                <span class="badge text-bg-dark">Dark</span>
              </p>

              <p>
                <span class="badge rounded-pill text-bg-primary">Primary</span>
                <span class="badge rounded-pill text-bg-secondary">Secondary</span>
                <span class="badge rounded-pill text-bg-success">Success</span>
                <span class="badge rounded-pill text-bg-danger">Danger</span>
                <span class="badge rounded-pill text-bg-warning">Warning</span>
                <span class="badge rounded-pill text-bg-info">Info</span>
                <span class="badge rounded-pill text-bg-light">Light</span>
                <span class="badge rounded-pill text-bg-dark">Dark</span>
              </p>
            </div>

            <div class="col-lg-6">
              <h1>Example heading <span class="badge bg-primary">New</span></h1>
              <h2>Example heading <span class="badge bg-primary">New</span></h2>
              <h3>Example heading <span class="badge bg-primary">New</span></h3>
              <h4>Example heading <span class="badge bg-primary">New</span></h4>
              <h5>Example heading <span class="badge bg-primary">New</span></h5>
              <h6>Example heading <span class="badge bg-primary">New</span></h6>

              <div class="my-4">
                <button type="button" class="btn btn-primary">Notifications <span class="badge text-bg-danger">4</span></button>
              </div>

              <div>
                <button type="button" class="btn btn-outline-primary position-relative">Inbox 
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">46 
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </button>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Breadcrumb  -->

      <section class="py-5" id="breadcrumb">
        <div class="container">

          <h2 class="mb-5">Breadcrumb</h2>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
          </nav>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>

        </div>
      </section>

      <!-- Components / Buttons  -->

      <section class="py-5" id="buttons">
        <div class="container">

          <h2 class="mb-5">Buttons</h2>

          <div class="mb-3">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-link">Link</button>
          </div>

          <div class="mb-5">
            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-outline-success">Success</button>
            <button type="button" class="btn btn-outline-info">Info</button>
            <button type="button" class="btn btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-outline-light">Light</button>
            <button type="button" class="btn btn-outline-dark">Dark</button>
          </div>

          <div class="mb-3">
            <button type="button" class="btn btn-primary disabled">Primary</button>
            <button type="button" class="btn btn-secondary disabled">Secondary</button>
            <button type="button" class="btn btn-success disabled">Success</button>
            <button type="button" class="btn btn-info disabled">Info</button>
            <button type="button" class="btn btn-warning disabled">Warning</button>
            <button type="button" class="btn btn-danger disabled">Danger</button>
            <button type="button" class="btn btn-light disabled">Light</button>
            <button type="button" class="btn btn-dark disabled">Dark</button>
            <button type="button" class="btn btn-link disabled">Link</button>
          </div>

          <div class="mb-5">
            <button type="button" class="btn btn-outline-primary disabled">Primary</button>
            <button type="button" class="btn btn-outline-secondary disabled">Secondary</button>
            <button type="button" class="btn btn-outline-success disabled">Success</button>
            <button type="button" class="btn btn-outline-info disabled">Info</button>
            <button type="button" class="btn btn-outline-warning disabled">Warning</button>
            <button type="button" class="btn btn-outline-danger disabled">Danger</button>
            <button type="button" class="btn btn-outline-light disabled">Light</button>
            <button type="button" class="btn btn-outline-dark disabled">Dark</button>
          </div>

          <div>
            <button type="button" class="btn btn-primary btn-lg me-3">Large button</button>
            <button type="button" class="btn btn-primary btn-sm">Small button</button>
          </div>

        </div>
      </section>

      <!-- Utilities / Shadows -->

      <section class="py-5" id="shadows">
        <div class="container">

          <h2 class="mb-5">Shadows</h2>

          <div class="shadow-sm p-5 mb-5 bg-body-tertiary rounded"><code>.shadow-sm</code></div>
          <div class="shadow p-5 mb-5 bg-body-tertiary rounded"><code>.shadow</code></div>
          <div class="shadow-lg p-5 mb-5 bg-body-tertiary rounded"><code>.shadow-lg</code></div>

        </div>
      </section>

      <!-- Utilities / Borders width and radius -->

      <section class="py-5" id="borders">
        <div class="container">

          <h2 class="mb-5">Borders width and radius</h2>

          <div class="border border-primary border-1 rounded-1 mb-5 p-5"><code>.border-1 .rounded-1</code></div>
          <div class="border border-primary border-2 rounded-2 mb-5 p-5"><code>.border-2 .rounded-2</code></div>
          <div class="border border-primary border-3 rounded-3 mb-5 p-5"><code>.border-3 .rounded-3</code></div>
          <div class="border border-primary border-4 rounded-4 mb-5 p-5"><code>.border-4 .rounded-4</code></div>
          <div class="border border-primary border-5 rounded-5 mb-5 p-5"><code>.border-5 .rounded-5</code></div>

        </div>
      </section>

      <!-- Utilities / Margin and padding -->

      <section class="py-5" id="spacing">
        <div class="container">

          <h2 class="mb-5">Margin and padding</h2>
 
          <div class="border mb-5"><div class="border border-primary m-1 p-1"><code class="border">.m-1 .p-1</code></div></div>
          <div class="border mb-5"><div class="border border-primary m-2 p-2"><code class="border">.m-2 .p-2</code></div></div>
          <div class="border mb-5"><div class="border border-primary m-3 p-3"><code class="border">.m-3 .p-3</code></div></div>
          <div class="border mb-5"><div class="border border-primary m-4 p-4"><code class="border">.m-4 .p-4</code></div></div>
          <div class="border mb-5"><div class="border border-primary m-5 p-5"><code class="border">.m-5 .p-5</code></div></div>

        </div>
      </section>

    </main>

    <footer class="bg-primary text-center py-5">
      <a class="btn btn-outline-light" href="https://getbootstrap.com/docs/5.3/getting-started/" target="_blank">Bootstrap 5.x Documentation</a>
    </footer>

    <?php include $inc_path . 'pages_body-notices.php';
          include $inc_path . 'pages_body-scripts.php'; ?>

  </body>
</html>
