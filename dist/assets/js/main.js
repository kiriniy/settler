(function (factory) {
    typeof define === 'function' && define.amd ? define(factory) :
    factory();
})((function () { 'use strict';

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

        function createCookie(name, value, days, path) {
            const date = new Date();
            date.setUTCDate(date.getUTCDate() + days);
            const cookieParts = [
                `${encodeURIComponent(name)}=${encodeURIComponent(value)}`,
                `expires=${date.toUTCString()}`,
                `path=${path}`,
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

    // -----------------------------------------------------------------------------
    //
    // SETTLER THEME SWITCHER
    // Licensed under MIT (https://github.com/kiriniy/settler/blob/master/LICENSE)
    //
    // -----------------------------------------------------------------------------
    //
    // This script provides dynamic theming functionality for websites,
    // enabling seamless switching between light and dark modes.
    // It supports automatic detection of user's preferred color scheme
    // and persists selected theme using Local Storage. Designed primarily for
    // use with Bootstrap and Bootstrap Icons but works independently too.
    //
    // Features:
    //
    //   - Light/Dark mode switching via button interaction.
    //   - Automatic theme detection based on OS settings.
    //   - Persistent storage of chosen theme across sessions.
    //   - Icon updates reflecting current theme state.
    //
    // Optional dependencies:
    //
    //   - Bootstrap 5.3+
    //   - Bootstrap Icons
    //
    // Default configuration:
    //
    //   - Theme attribute: data-bs-theme (HTML root element)
    //   - Button selector: #themeSwitch (toggle button)
    //   - Icon class: .bi (Bootstrap Icons)
    //
    // Usage:
    //
    //   <button id="themeSwitch">
    //       <i class="bi bi-sun"></i>
    //   </button>
    //
    // -----------------------------------------------------------------------------

    (function() {
     
        const THEME_ATTR = 'data-bs-theme';
        const STORAGE_KEY = 'theme';
        const ICON_CLASS = '.bi';
        const THEMES = {
            LIGHT: 'light',
            DARK: 'dark',
            AUTO: 'auto'
        };

        const ICONS = {
            LIGHT: 'bi-sun',
            DARK: 'bi-moon'
        };

        const themeButton = document.getElementById('themeSwitch');
        let iconElement = null;

        if (themeButton) {
            iconElement = themeButton.querySelector(`${ICON_CLASS}`);
        }

        const getCurrentTheme = function() {
            const saved = localStorage.getItem(STORAGE_KEY);
            const systemIsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (saved === THEMES.LIGHT) return THEMES.LIGHT;
            if (saved === THEMES.DARK) return THEMES.DARK;
            return systemIsDark ? THEMES.DARK : THEMES.LIGHT;
        };

        const applyTheme = function(theme) {
            let resolvedTheme = theme;

            if (theme === THEMES.AUTO) {
                resolvedTheme = window.matchMedia('(prefers-color-scheme: dark)').matches
                    ? THEMES.DARK
                    : THEMES.LIGHT;
            }

            document.documentElement.setAttribute(THEME_ATTR, resolvedTheme);
        };

        const updateIcon = function(theme) {
            if (!iconElement) return;

            const isDark = theme === THEMES.DARK || 
                (theme === THEMES.AUTO && window.matchMedia('(prefers-color-scheme: dark)').matches);

            iconElement.classList.remove(ICONS.LIGHT, ICONS.DARK);
            iconElement.classList.add(isDark ? ICONS.LIGHT : ICONS.DARK);
        };

        const handleThemeToggle = function() {
            const current = getCurrentTheme();
            const newTheme = current === THEMES.DARK ? THEMES.LIGHT : THEMES.DARK;

            localStorage.setItem(STORAGE_KEY, newTheme);
            applyTheme(newTheme);
            updateIcon(newTheme);
        };

        const handleSystemChange = function() {
            if (!localStorage.getItem(STORAGE_KEY)) {
                applyTheme(THEMES.AUTO);
                updateIcon(THEMES.AUTO);
            }
        };

        const init = function() {
            if (!themeButton || !iconElement) {
                console.warn('Theme switcher elements missing');
                return;
            }

            const initialTheme = localStorage.getItem(STORAGE_KEY) || THEMES.AUTO;
            applyTheme(initialTheme);
            updateIcon(initialTheme);

            themeButton.addEventListener('click', handleThemeToggle);
            window.matchMedia('(prefers-color-scheme: dark)')
                .addEventListener('change', handleSystemChange);
        };

        if (document.readyState === 'complete') {
            init();
        } else {
            document.addEventListener('DOMContentLoaded', init);
        }
    })();

    // Executes a scripts if a system theme is dark

    const darkTheme = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (darkTheme) {
        console.log('System theme is dark.');
    }

    // Executes a scripts if a system theme is light

    const lightTheme = window.matchMedia('(prefers-color-scheme: light)').matches;

    if (lightTheme) {
        console.log('System theme is light.');
    }

    // Executes a scripts if on mobile device

    const deviceUserAgent = navigator.userAgent.toLowerCase();
    const mobileDevice = deviceUserAgent.match(/android|iphone|ipad|ipod/);

    if (mobileDevice) {
        console.log("We are on mobile!");
    }

}));
