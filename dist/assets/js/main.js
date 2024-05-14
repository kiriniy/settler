(function () {
    'use strict';

    /**
     * Cookie Message
     * Copyright 2016 Simon R Jones
     * Licensed under MIT (https://github.com/studio24/cookie-message/blob/master/LICENSE.md)
     * About script (http://www.quirksmode.org/js/cookies.html)
     */

    (function() {

        function createCookie(name,value,days,path) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime()+(days*24*60*60*1000));
                var expires = "; expires="+date.toGMTString();
            }
            else var expires = "";
            document.cookie = name+"="+value+expires+"; path="+path;
        }

        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

        var cookieMessage = document.getElementById('cookie-message');
        if (cookieMessage == null) {
            return;
        }
        var cookie = readCookie('seen-cookie-message');
        if (cookie != null && cookie == 'yes') {
            cookieMessage.style.display = 'none';
        } else {
            cookieMessage.style.display = 'block';
        }

        var cookieExpiry = cookieMessage.getAttribute('data-cookie-expiry');
        if (cookieExpiry == null) {
            cookieExpiry = 30;
        }
        var cookiePath = cookieMessage.getAttribute('data-cookie-path');
        if (cookiePath == null) {
            cookiePath = "/";
        }
        createCookie('seen-cookie-message','yes',cookieExpiry,cookiePath);

    })();

    /**
     * Color mode toggler for Bootstrap 5 (https://getbootstrap.com/)
     * Copyright 2011-2024 The Bootstrap Authors
     * Licensed under the Creative Commons Attribution 3.0 Unported License.
     */

    (() => {

        const getStoredTheme = () => localStorage.getItem('theme');
        const setStoredTheme = theme => localStorage.setItem('theme', theme);

        const getPreferredTheme = () => {
            const storedTheme = getStoredTheme();
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        };

        const setTheme = theme => {
            if (theme === 'auto') {
                document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'));
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme);
            }
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme, focus = false) => {
            const themeSwitcher = document.querySelector('#bd-theme');
            if (!themeSwitcher) {
                return
            }
            const themeSwitcherText = document.querySelector('#bd-theme-text');
            const activeThemeIcon = document.querySelector('.theme-icon-active use');
            const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`);
            const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href');
            document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                element.classList.remove('active');
                element.setAttribute('aria-pressed', 'false');
            });
            btnToActive.classList.add('active');
            btnToActive.setAttribute('aria-pressed', 'true');
            activeThemeIcon.setAttribute('href', svgOfActiveBtn);
            const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
            themeSwitcher.setAttribute('aria-label', themeSwitcherLabel);
            if (focus) {
                themeSwitcher.focus();
            }
        };

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            const storedTheme = getStoredTheme();
            if (storedTheme !== 'light' && storedTheme !== 'dark') {
                setTheme(getPreferredTheme());
            }
        });

        window.addEventListener('DOMContentLoaded', () => {
            showActiveTheme(getPreferredTheme());
            document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value');
                    setStoredTheme(theme);
                    setTheme(theme);
                    showActiveTheme(theme, true);
                });
            });
        });
    })();

    // Bootstrap 5 color mode switch button

    document.getElementById('themeSwitch').addEventListener('click', () => {
        if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
            document.getElementById('themeSwitch').setAttribute('data-bs-theme-value', 'light');
        } else {
            document.getElementById('themeSwitch').setAttribute('data-bs-theme-value', 'dark');
        }
    });

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

})();
