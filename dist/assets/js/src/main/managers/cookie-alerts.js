
// ------------------------------------------------------------------------------------------
//
// SETTLER COOKIE ALERTS
// Licensed under MIT (https://github.com/kiriniy/settler/blob/master/LICENSE)
//
// ------------------------------------------------------------------------------------------
//
// This script provides functionality for managing cookies used in displaying alerts
// on a webpage. It includes methods for creating and reading cookies as well as handling
// user interactions related to accepting/disregarding specific alerts. The main purpose
// is to prevent repetitive display of notifications once they have been acknowledged
// by the user. Perfect for notifications about cookies usage on the website.
//
// Features:
//
//   - Cookie creation ('createCookie') with custom expiration dates and secure flags.
//   - Reading existing cookies ('readCookie').
//   - Hiding/showing alert elements dynamically based on cookie values.
//   - Integration with HTML attributes like "alert-cookie-id" etc.
//
// Attributes supported:
//
//   - alert-cookie-id: Unique identifier for each alert element.
//   - alert-cookie-expiry: Number of days before cookie expires.
//   - alert-cookie-path: Path where cookie will be valid.
//
// Usage:
//
//   <div class="alerts-item" role="alert" alert-cookie-id="example" alert-cookie-expiry="7">
//     <span>Hello, world!</span>
//     <button class="alert-accept">Ok</button>
//   </div>
//
// ------------------------------------------------------------------------------------------

(function () {
    'use strict';

    function createCookie(name, value, days, path) {
        const date = new Date();
        date.setUTCDate(date.getUTCDate() + days);
        const cookieParts = [
            `${encodeURIComponent(name)}=${encodeURIComponent(value)}`,
            `expires=${date.toUTCString()}`,
            `path=${path || '/'}`,
            'SameSite=Lax'
        ];

        if (location.protocol === 'https:') {
            cookieParts.push('Secure');
        }

        document.cookie = cookieParts.join('; ');
    }

    function readCookie(name) {
        const encodedName = encodeURIComponent(name) + '=';
        const cookie = document.cookie
            .split(';')
            .map(c => c.trim())
            .find(c => c.startsWith(encodedName));

        return cookie ? decodeURIComponent(cookie.split('=')[1]) : null;
    }

    document.querySelectorAll('.alerts-item').forEach(alert => {
        const alertId = alert.getAttribute('alert-cookie-id');
        if (!alertId) return;

        const cookieName = `alert-seen-${alertId}`;
        const expiry = Math.abs(parseInt(alert.getAttribute('alert-cookie-expiry'), 10) || 30);
        const path = alert.getAttribute('alert-cookie-path') || '/';
        const acceptBtn = alert.querySelector('.alert-accept');

        if (readCookie(cookieName)) {
            alert.classList.add('hidden');
            return;
        }

        if (acceptBtn) {
            alert.classList.remove('hidden');
            acceptBtn.addEventListener('click', () => {
                createCookie(cookieName, 'yes', expiry, path);
                alert.classList.add('hidden');
            });
        }
    });
})();
