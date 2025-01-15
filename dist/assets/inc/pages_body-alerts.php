
    <?php if ($page_alerts): ?>

    <aside class="alerts-box no-print">

      <!-- Example JS-OFF warning (markup based on Bootstrap 5 framework) -->

      <noscript>
        <div class="alert text-bg-danger d-flex align-items-center animated fadeInUp" role="alert">
          <i class="bi bi-exclamation-triangle display-1 pe-4"></i>
          <span>Warning! JavaScript is turned off and here's <a href="https://www.enable-javascript.com" class="alert-link" target="_blank" rel="nofollow">how to enable JavaScript</a> in your browser.</span>
        </div>
      </noscript>

      <!-- Example global messages (markup based on Bootstrap 5 framework) -->

      <div class="no-js animated fadeInUp" id="cookie-message" data-cookie-expiry="7">
        <div class="alert alert-primary alert-dismissible fade show d-flex align-items-center" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <i class="bi bi-cookie display-1 pe-3"></i>
          <span>We serve cookies on this site! This notice works with a help of JS and appears every 7 days.</span>
        </div>
      </div>

      <div class="no-js alert alert-info alert-dismissible fade show animated fadeInUp" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h4 class="alert-heading">Hello, world!</h4>
        <span>This is a sample notification for all pages.</span>
      </div>

      <?php if ($page_id == 'home'): ?>

      <!-- Example specific by page ID message (markup based on Bootstrap 5 framework) -->

      <div class="no-js alert alert-info alert-dismissible fade show animated fadeInUp" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span>This is a sample alert which appears on a specific (this) page only. Check <code>assets/inc/pages_body-alerts.php</code> for details.</span>
      </div>

      <?php endif; ?>

      <!-- END -->

    </aside>

    <?php endif; ?>
