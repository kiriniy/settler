
<?php $page_id         = '';
      $page_ver        = '?v=' . filemtime(__FILE__);
      $page_type       = '';
      $page_class      = '';
      $page_level      = '../';
      $page_path       = '';

      $page_notices    = false;

      $page_lang       = 'en';
      $page_title      = 'Bootstrap Theme Preview';
      $page_desc       = '';

      require $page_level . 'site.php';

      $page_csp        = '';
      $page_robots     = '';
      $page_autoformat = '';
      $page_canonical  = '';
      $page_head_attr  = '';
      $page_body_attr  = 'class="pt-5"';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php';

          ?>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <?php include $assets . 'inc/pages_body-nav.php'; ?>

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
            <li class="nav-item"><a class="nav-link" href="#typography">Typography</a></li>
            <li class="nav-item"><a class="nav-link" href="#colors">Colors</a></li>
            <li class="nav-item"><a class="nav-link" href="#tables">Tables</a></li>
            <li class="nav-item"><a class="nav-link" href="#forms">Forms</a></li>
            <li class="nav-item"><a class="nav-link" href="#images">Images</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Components</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#accordion">Accordion</a></li>
                <li><a class="dropdown-item" href="#alerts">Alerts</a></li>
                <li><a class="dropdown-item" href="#badge">Badge</a></li>
                <li><a class="dropdown-item" href="#breadcrumb">Breadcrumb</a></li>
                <li><a class="dropdown-item" href="#buttons">Buttons</a></li>
                <li><a class="dropdown-item" href="#card">Card</a></li>
                <li><a class="dropdown-item" href="#carousel">Carousel</a></li>
                <li><a class="dropdown-item" href="#list-group">List group</a></li>
                <li><a class="dropdown-item" href="#modal">Modal</a></li>
                <li><a class="dropdown-item" href="#navbar">Navbar</a></li>
                <li><a class="dropdown-item" href="#navs">Navs</a></li>
                <li><a class="dropdown-item" href="#pagination">Pagination</a></li>
                <li><a class="dropdown-item" href="#offcanvas">Offcanvas</a></li>
                <li><a class="dropdown-item" href="#placeholders">Placeholders</a></li>
                <li><a class="dropdown-item" href="#spinners">Spinners</a></li>
                <li><a class="dropdown-item" href="#progress">Progress</a></li>
                <li><a class="dropdown-item" href="#popovers">Popovers</a></li>
                <li><a class="dropdown-item" href="#tooltips">Tooltips</a></li>
                <li><a class="dropdown-item" href="#toasts">Toasts</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Utilities</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="#shadows">Shadows</a></li>
                <li class="nav-item"><a class="nav-link" href="#borders">Borders</a></li>
                <li class="nav-item"><a class="nav-link" href="#spacing">Spacing</a></li>
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
            <div class="col-md-6">
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

            <div class="col-md-6">
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
            <div class="col-xl-6">
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

            <div class="col-xl-6">
              <p class="h1">Example heading <span class="badge bg-primary">New</span></p>
              <p class="h2">Example heading <span class="badge bg-secondary">New</span></p>
              <p class="h3">Example heading <span class="badge bg-success">New</span></p>
              <p class="h4">Example heading <span class="badge bg-danger">New</span></p>
              <p class="h5">Example heading <span class="badge bg-warning">New</span></p>
              <p class="h6">Example heading <span class="badge bg-info">New</span></p>

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

          <div class="row">
            <div class="col-xl-8">
              <div class="mb-3">
                <button type="button" class="mb-2 btn btn-primary">Primary</button>
                <button type="button" class="mb-2 btn btn-secondary">Secondary</button>
                <button type="button" class="mb-2 btn btn-success">Success</button>
                <button type="button" class="mb-2 btn btn-info">Info</button>
                <button type="button" class="mb-2 btn btn-warning">Warning</button>
                <button type="button" class="mb-2 btn btn-danger">Danger</button>
                <button type="button" class="mb-2 btn btn-light">Light</button>
                <button type="button" class="mb-2 btn btn-dark">Dark</button>
                <button type="button" class="mb-2 btn btn-link">Link</button>
              </div>

              <div class="mb-5">
                <button type="button" class="mb-2 btn btn-outline-primary">Primary</button>
                <button type="button" class="mb-2 btn btn-outline-secondary">Secondary</button>
                <button type="button" class="mb-2 btn btn-outline-success">Success</button>
                <button type="button" class="mb-2 btn btn-outline-info">Info</button>
                <button type="button" class="mb-2 btn btn-outline-warning">Warning</button>
                <button type="button" class="mb-2 btn btn-outline-danger">Danger</button>
                <button type="button" class="mb-2 btn btn-outline-light">Light</button>
                <button type="button" class="mb-2 btn btn-outline-dark">Dark</button>
              </div>

              <div class="mb-3">
                <button type="button" class="mb-2 btn btn-primary disabled">Primary</button>
                <button type="button" class="mb-2 btn btn-secondary disabled">Secondary</button>
                <button type="button" class="mb-2 btn btn-success disabled">Success</button>
                <button type="button" class="mb-2 btn btn-info disabled">Info</button>
                <button type="button" class="mb-2 btn btn-warning disabled">Warning</button>
                <button type="button" class="mb-2 btn btn-danger disabled">Danger</button>
                <button type="button" class="mb-2 btn btn-light disabled">Light</button>
                <button type="button" class="mb-2 btn btn-dark disabled">Dark</button>
                <button type="button" class="mb-2 btn btn-link disabled">Link</button>
              </div>

              <div class="mb-5">
                <button type="button" class="mb-2 btn btn-outline-primary disabled">Primary</button>
                <button type="button" class="mb-2 btn btn-outline-secondary disabled">Secondary</button>
                <button type="button" class="mb-2 btn btn-outline-success disabled">Success</button>
                <button type="button" class="mb-2 btn btn-outline-info disabled">Info</button>
                <button type="button" class="mb-2 btn btn-outline-warning disabled">Warning</button>
                <button type="button" class="mb-2 btn btn-outline-danger disabled">Danger</button>
                <button type="button" class="mb-2 btn btn-outline-light disabled">Light</button>
                <button type="button" class="mb-2 btn btn-outline-dark disabled">Dark</button>
              </div>
            </div>

            <div class="col-xl-4">
              <div class="mb-3">
                <button type="button" class="btn btn-primary btn-lg me-3">Large button</button>
                <button type="button" class="btn btn-outline-primary btn-lg">Large button</button>
              </div>

              <div class="mb-5">
                <button type="button" class="btn btn-primary btn-sm me-3">Small button</button>
                <button type="button" class="btn btn-outline-primary btn-sm">Small button</button>
              </div>

              <div class="mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
              </div>

              <div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="button">Toggle button</button>
                <button type="button" class="btn btn-outline-primary active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">

              <h3 class="my-5 text-secondary">Button group</h3>

              <div class="mb-3">
                <div class="btn-group me-2" role="group" aria-label="First group">
                  <button type="button" class="btn btn-primary">1</button>
                  <button type="button" class="btn btn-primary">2</button>
                  <button type="button" class="btn btn-primary">3</button>
                  <button type="button" class="btn btn-primary">4</button>
                </div>

                <div class="btn-group me-2" role="group" aria-label="Second group">
                  <button type="button" class="btn btn-secondary">5</button>
                  <button type="button" class="btn btn-secondary">6</button>
                  <button type="button" class="btn btn-secondary">7</button>
                </div>

                <div class="btn-group" role="group" aria-label="Third group">
                  <button type="button" class="btn btn-info">8</button>
                </div>
              </div>

              <div class="mb-3">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                  <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>
                
                  <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>
                
                  <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                </div>
              </div>

              <div class="mb-3">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                  <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                </div>
              </div>

              <div class="mb-5">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-primary">Left</button>
                  <button type="button" class="btn btn-primary">Middle</button>
                  <button type="button" class="btn btn-primary">Right</button>
                </div>
              </div>
            </div>

            <div class="col-7 col-lg-3">

              <h3 class="my-5 text-secondary">Vertical</h3>

              <div class="btn-group-vertical me-3 mb-2" role="group" aria-label="Vertical button group">
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
              </div>

              <div class="btn-group-vertical mb-2" role="group" aria-label="Vertical button group">
                <button type="button" class="btn btn-outline-primary">Button</button>
                <button type="button" class="btn btn-outline-primary">Button</button>
                <button type="button" class="btn btn-outline-primary">Button</button>
                <button type="button" class="btn btn-outline-primary">Button</button>
                <button type="button" class="btn btn-outline-primary">Button</button>
              </div>
            </div>

            <div class="col-5 col-lg-3">

              <h3 class="my-5 text-secondary">Dropdowns</h3>

              <div class="btn-group mb-2">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Single
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>

              <div class="btn-group mb-2">
                <button type="button" class="btn btn-outline-primary">Split</button>
                <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Card  -->

      <section class="py-5" id="card">
        <div class="container">

          <h2 class="mb-5">Card</h2>

          <div class="row">
            <div class="col-xl-6">

              <div class="card mb-5">
                <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="100%" height="200">
                  <rect fill="#ddd" width="100%" height="100%"/>
                  <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle">Image</text>
                </svg>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              <div class="card mb-5">
                <div class="card-header">Featured</div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-body-secondary">2 days ago</div>
              </div>

              <div class="card text-bg-dark mb-5">
                <svg class="card-img" xmlns="http://www.w3.org/2000/svg" width="100%" height="186">
                  <rect fill="#333" width="100%" height="100%"/>
                  <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle">Image Overlay</text>
                </svg>
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small>Last updated 3 mins ago</small></p>
                </div>
              </div>

              <div class="card mb-5">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <div class="card mb-5">
                <div class="row g-0">
                  <div class="col-md-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="250">
                      <rect fill="#ddd" width="100%" height="100%"/>
                      <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle">Image</text>
                    </svg>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-xl-3">

              <div class="card text-bg-primary mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card text-bg-secondary mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Secondary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card text-bg-success mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Success card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card text-bg-danger mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Danger card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card text-bg-warning mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Warning card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card text-bg-info mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Info card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card text-bg-light mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Light card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card text-bg-dark mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Dark card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>

            <div class="col-6 col-xl-3">

              <div class="card border-primary mb-3">
                <div class="card-header">Header</div>
                <div class="card-body text-primary">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card border-secondary mb-3">
                <div class="card-header">Header</div>
                <div class="card-body text-secondary">
                  <h5 class="card-title">Secondary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card border-success mb-3">
                <div class="card-header">Header</div>
                <div class="card-body text-success">
                  <h5 class="card-title">Success card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card border-danger mb-3">
                <div class="card-header">Header</div>
                <div class="card-body text-danger">
                  <h5 class="card-title">Danger card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card border-warning mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Warning card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card border-info mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Info card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card border-light mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Light card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card border-dark mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Dark card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Components / Carousel  -->

      <section class="py-5" id="carousel">
        <div class="container">

          <h2 class="mb-5">Carousel</h2>

          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="460">
                  <rect fill="#666" width="100%" height="100%"/>
                  <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle">First slide image</text>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>

              <div class="carousel-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="460">
                  <rect fill="#666" width="100%" height="100%"/>
                  <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle">Second slide image</text>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>

              <div class="carousel-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="460">
                  <rect fill="#666" width="100%" height="100%"/>
                  <text fill="rgba(0,0,0,0.5)" font-family="sans-serif" font-size="30" dy="10.5" font-weight="bold" x="50%" y="50%" text-anchor="middle">Third slide image</text>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>
      </section>

      <!-- Components / List group  -->

      <section class="py-5" id="list-group">
        <div class="container">

          <h2 class="mb-5">List group</h2>

          <div class="row">
            <div class="col-xl-4">
              <ul class="list-group mb-5">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  A list item
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  A second list item
                  <span class="badge bg-primary rounded-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  A third list item
                  <span class="badge bg-primary rounded-pill">1</span>
                </li>
              </ul>

              <ul class="list-group list-group-flush mb-5">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
              </ul>
            </div>

            <div class="col-xl-4">
              <div class="list-group mb-5">
                <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
              </div>
            </div>

            <div class="col-xl-4">
              <div class="list-group mb-5">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small>And some small print.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-body-secondary">3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small class="text-body-secondary">And some muted small print.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-body-secondary">3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small class="text-body-secondary">And some muted small print.</small>
                </a>
                  <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-body-secondary">3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small class="text-body-secondary">And some muted small print.</small>
                </a>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Modal -->

      <section class="py-5" id="modal">
        <div class="container">

          <h2 class="mb-5">Modal</h2>

          <button type="button" class="btn btn-primary me-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">Launch demo modal</button>
          <button type="button" class="btn btn-primary me-3 mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">Static & backdrop</button>
          <button type="button" class="btn btn-primary me-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Vertically centered & scrollable</button>
          <button type="button" class="btn btn-primary me-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>

        </div>
      </section>

      <!-- Components / Navbar -->

      <section class="py-5" id="navbar">
        <div class="container">

          <h2 class="mb-5">Navbar</h2>

          <div class="mb-3">
            <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Home
                        <span class="visually-hidden">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </li>
                  </ul>
                  <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
          </div>

          <div class="mb-3">
            <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Home
                        <span class="visually-hidden">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </li>
                  </ul>
                  <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
          </div>

          <div class="mb-3">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor04">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Home
                        <span class="visually-hidden">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </li>
                  </ul>
                  <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
          </div>

        </div>
      </section>

      <!-- Components / Navs & Pagination -->

      <section class="py-5">
        <div class="container">

          <div class="row">
            <div class="col-xl-6">

              <h2 class="my-5" id="navs">Navs</h2>

              <div class="mb-5">
                <nav>
                  <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                  </div>
                </nav>
      
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p>This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                  </div>
      
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                  </div>
      
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p>This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                  </div>
                </div>
              </div>
      
              <div class="mb-5">
                <nav class="nav">
                  <a class="nav-link active" aria-current="page" href="#">Active</a>
                  <a class="nav-link" href="#">Link</a>
                  <a class="nav-link" href="#">Link</a>
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </nav>
              </div>
      
              <div class="mb-5">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
      
              <div>
                <ul class="nav nav-underline">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-5 offset-xl-1">

              <h2 class="my-5" id="pagination">Pagination</h2>

              <div class="mb-5">
                <nav aria-label="Pagination example">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                  </ul>
                </nav>
              </div>

              <div class="mb-5">
               <nav aria-label="Standard pagination example">
                 <ul class="pagination">
                   <li class="page-item">
                     <a class="page-link" href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item">
                     <a class="page-link" href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>
              </div>

              <div class="mb-5">
               <nav aria-label="Another pagination example">
                 <ul class="pagination pagination-lg flex-wrap">
                   <li class="page-item disabled">
                     <a class="page-link">Previous</a>
                   </li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                   <li class="page-item active" aria-current="page">
                     <a class="page-link" href="#">2</a>
                   </li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item">
                     <a class="page-link" href="#">Next</a>
                   </li>
                 </ul>
               </nav>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Offcanvas -->

      <section class="py-5" id="offcanvas">
        <div class="container">

          <h2 class="mb-5">Offcanvas</h2>

          <div class="btn-group me-2 mb-3" role="group">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Left</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Top</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Right</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Bottom</button>
          </div>

          <button class="btn btn-primary me-2 mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Scrolling</button>

          <button class="btn btn-primary me-2 mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Scrolling & backdrop</button>

          <button class="btn btn-primary me-2 mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">Static</button>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <p>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</p>
            </div>
          </div>

          <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <p>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</p>
            </div>
          </div>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <p>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</p>
            </div>
          </div>

          <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small">
              <p>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</p>
            </div>
          </div>

          <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <p>Try scrolling the rest of the page to see this option in action.</p>
            </div>
          </div>

          <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <p>Try scrolling the rest of the page to see this option in action.</p>
            </div>
          </div>

          <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div>
                <p>I will not close if you click outside of me.</p>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Placeholders -->

      <section class="py-5" id="placeholders">
        <div class="container">

          <h2 class="mb-5">Placeholders</h2>

          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="card mb-5" aria-hidden="true">
                <svg class="card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#868e96"></rect>
                </svg>
                <div class="card-body">
                  <h5 class="card-title placeholder-glow">
                    <span class="placeholder col-6"></span>
                  </h5>
                  <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                  </p>
                  <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-7 offset-xl-1">
              <div class="mb-5">
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12 bg-primary"></span>
                <span class="placeholder col-12 bg-secondary"></span>
                <span class="placeholder col-12 bg-success"></span>
                <span class="placeholder col-12 bg-danger"></span>
                <span class="placeholder col-12 bg-warning"></span>
                <span class="placeholder col-12 bg-info"></span>
                <span class="placeholder col-12 bg-light"></span>
                <span class="placeholder col-12 bg-dark"></span>
              </div>

              <div class="placeholder-wave">
                <span class="placeholder col-12 placeholder-lg"></span>
                <span class="placeholder col-12"></span>
                <span class="placeholder col-12 placeholder-sm"></span>
                <span class="placeholder col-12 placeholder-xs"></span>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Spinners & Progress -->

      <section class="py-5">
        <div class="container">

          <div class="row">
            <div class="col-md-6 col-xl-4">

              <h2 class="my-5" id="spinners">Spinners</h2>

              <div class="mb-3">
                <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-border text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-border text-success" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-border text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-border text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-border text-info" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div>
              </div>

              <div class="mb-3">
                <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-grow text-secondary" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-grow text-success" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-grow text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-grow text-warning" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-grow text-info" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-grow text-light" role="status"><span class="visually-hidden">Loading...</span></div>
                <div class="spinner-grow text-dark" role="status"><span class="visually-hidden">Loading...</span></div>
              </div>
            </div>

            <div class="col-md-6 col-xl-7 offset-xl-1">

              <h2 class="my-5" id="progress">Progress</h2>

              <div class="progress mb-3" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar">0%</div>
              </div>

              <div class="progress mb-3" role="progressbar" aria-label="Success example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-success w-25">25%</div>
              </div>

              <div class="progress mb-3" role="progressbar" aria-label="Info example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar text-bg-info w-50">50%</div>
              </div>

              <div class="progress mb-3" role="progressbar" aria-label="Warning example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar text-bg-warning w-75">75%</div>
              </div>

              <div class="progress mb-3" role="progressbar" aria-label="Danger example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-danger w-100">100%</div>
              </div>

              <div class="progress-stacked">
                <div class="progress" role="progressbar" aria-label="Segment one - default example" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar"></div>
                </div>
                <div class="progress" role="progressbar" aria-label="Segment two - animated striped success example" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Popovers -->

      <section class="py-5" id="popovers">
        <div class="container">

          <h2>Popovers</h2>

          <div class="row">
            <div class="col-md-6 col-xl-4">
              <p>Popovers rely on the third party library Popper for positioning. Popovers are opt-in for performance reasons, so you must initialize them yourself</p>
            </div>

            <div class="col-md-6 col-xl-7 offset-xl-1">
              <button type="button" class="btn btn-primary me-1 mb-2" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">With title</button>
              <button type="button" class="btn btn-secondary me-1 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">On top</button>
              <button type="button" class="btn btn-secondary me-1 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">On right</button>
              <button type="button" class="btn btn-secondary me-1 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">On bottom</button>
              <button type="button" class="btn btn-secondary me-1 mb-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">On left</button>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Tooltips -->

      <section class="py-5" id="tooltips">
        <div class="container">

          <h2>Tooltips</h2>

          <div class="row">
            <div class="col-md-6 col-xl-4">
              <p>Tooltips rely on the third party library Popper for positioning. Tooltips are opt-in for performance reasons, so you must initialize them yourself</p>
            </div>

            <div class="col-md-6 col-xl-7 offset-xl-1">
              <button type="button" class="btn btn-primary me-1 mb-2" data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">With HTML</button>
              <button type="button" class="btn btn-secondary me-1 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">On top</button>
              <button type="button" class="btn btn-secondary me-1 mb-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">On right</button>
              <button type="button" class="btn btn-secondary me-1 mb-2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">On bottom</button>
              <button type="button" class="btn btn-secondary me-1 mb-2" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">On left</button>
            </div>
          </div>

        </div>
      </section>

      <!-- Components / Toasts -->

      <section class="py-5" id="toasts" style="background-color: #333">
        <div class="container">

          <h2 class="mb-5 text-light">Toasts</h2>

          <div class="toast fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <svg class="rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
              <strong class="me-auto">Bootstrap</strong>
              <small>11 mins ago</small>
            </div>
            <div class="toast-body">Toasts are opt-in for performance reasons, <strong>so you must initialize them yourself.</strong></div>
          </div>

          <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <svg class="rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
              <strong class="me-auto">Bootstrap</strong>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
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

    <div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Hello, world! This is a modal message.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLiveLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>I will not close if you click outside me. Don't even try to press escape key.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalCenteredScrollableTitle">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p style="margin-bottom: 1600px">This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.</p>
            <p>This content should appear at the bottom after you scroll.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Full screen modal</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Hello, world! This is a modal message.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <?php include $assets . 'inc/pages_body-notices.php';
          include $assets . 'inc/pages_body-scripts.php'; ?>

    <script>

      // Initialize popovers

     const popoverElements = document.querySelectorAll('[data-bs-toggle="popover"]');

     for (const popover of popoverElements) {
       new bootstrap.Popover(popover);
     }

     // Initialize tooltips

     const tooltipElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');

     for (const tooltip of tooltipElements) {
       new bootstrap.Tooltip(tooltip);
     }
 
    </script>

  </body>
</html>
