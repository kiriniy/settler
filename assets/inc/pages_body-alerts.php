
    <?php if ($page_alerts): ?>

    <aside class="alerts-box no-print">

      <!-- Example JS-OFF warning (markup based on Bootstrap 5 framework) -->

      <noscript>
        <div class="alert text-bg-danger d-flex align-items-center animated fadeInUp" role="alert">
          <i class="bi bi-exclamation-triangle display-1 pe-4"></i>
          <span>Warning! JavaScript is turned off and here's <a href="https://www.google.com/httpservice/retry/enablejs" class="alert-link" target="_blank" rel="nofollow">how to enable JavaScript</a> in your browser.</span>
        </div>
      </noscript>

      <!-- Example global messages (markup based on Bootstrap 5 framework) -->

      <div class="no-js animated fadeInUp alerts-item" alert-cookie-id="exampleAlertWithCookie" alert-cookie-expiry="7">
        <div class="alert alert-primary alert-dismissible fade show d-flex align-items-center" role="alert">
          <button class="btn-close alert-accept" type="button" data-bs-dismiss="alert" aria-label="Accept and Close"></button>
          <i class="bi bi-cookie display-1 pe-3"></i>
          <span>This alert notification works with JS and cookies and will appear on all pages (if alerts are enabled) until it's closed. It will reappear after 7 days. Check <code>assets/inc/pages_body-alerts.php</code> for details.</span>
        </div>
      </div>

      <?php if ($page_id == 'main-index'): ?>

      <!-- Example specific by page ID message (markup based on Bootstrap 5 framework) -->

      <div class="no-js alert alert-info animated fadeInUp" role="alert">
        <span>This is a sample alert which appears on a specific (this) page only. Check <code>assets/inc/pages_body-alerts.php</code> for details.</span>
      </div>

      <?php endif; ?>

      <!-- END -->

    </aside>

    <?php endif; ?>
