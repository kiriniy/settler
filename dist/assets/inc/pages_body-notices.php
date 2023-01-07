
    <?php if ($page_notices): ?>

    <aside class="notices-box no-print">

      <!-- Example JS-OFF warning (markup based on Bootstrap 5 framework) -->

      <noscript>

        <div class="js-off alert alert-warning" role="alert">
          <h4 class="alert-heading">JavaScript is turned off!</h4>

          Why? Here's <a href="http://www.enable-javascript.com" class="alert-link" target="_blank" rel="nofollow">how to enable JavaScript</a> in your browser.

        </div>

      </noscript>

      <!-- Example global messages (markup based on Bootstrap 5 framework) -->

      <div id="cookie-message" class="alert alert-info alert-dismissible" role="alert" data-cookie-expiry="7">
        <h4 class="alert-heading">Free cookies to everyone!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        We use cookies. Ok, not yet, but we will. Probably.
        This notice works with a help of JS and appears every 7 days.

      </div>

      <!--[if IE]>		

      <div class="ie-browser alert alert-warning alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Necromancer!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 
        You are using a dead browser!
        But there is a <a href="https://browsehappy.com/" class="alert-link" target="_blank" rel="nofollow">choice.</a>

      </div>

      <![endif]-->

      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Hello, world!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        This is a sample notice on all pages.

      </div>

      <!-- Example specific by page ID message (markup based on Bootstrap 5 framework) -->

      <?php if ($page_id == 'home'): ?>

      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 
        This is a sample notice which appears on a specific page only.
        Check <code>assets/inc/pages_body-notices.php</code> for details.
 
      </div>

      <?php endif; ?>

    </aside>

    <?php endif; ?>
