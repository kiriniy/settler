
// -----------------------------------------------------------------------------
//
// This script checks if the system and/or site theme is light.
// It uses window.matchMedia to detect the system theme and localStorage
// or the 'data-bs-theme' attribute to determine the site theme.
//
// Replace the console.log statements with your own logic
// to execute specific actions when the theme is light.
//
// -----------------------------------------------------------------------------

const lightTheme = window.matchMedia('(prefers-color-scheme: light)').matches;
const currentTheme = localStorage.getItem('theme') || document.documentElement.getAttribute('data-bs-theme');

if (lightTheme) {
    console.log('System theme is light.');
}

if (currentTheme === 'light') {
    console.log('Site theme is light.');
}
