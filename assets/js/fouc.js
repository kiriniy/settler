
// -----------------------------------------------------------------------------
//
// SETTLER FOUC PREVENTION
// Licensed under MIT (https://github.com/kiriniy/settler/blob/master/LICENSE)
//
// -----------------------------------------------------------------------------
//
// This script eliminates the flash of unstyled content (FOUC) that occurs
// when using theme switching based on localStorage or system preference.
// It reads the user's theme choice (or falls back to system setting)
// and applies the 'data-bs-theme' attribute to the <html> element
// before CSS is parsed, ensuring immediate visual consistency.
//
// -----------------------------------------------------------------------------

const t = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
document.documentElement.setAttribute('data-bs-theme', t);
