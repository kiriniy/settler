
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
 'use strict';
 
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
