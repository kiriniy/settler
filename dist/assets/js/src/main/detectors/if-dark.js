
// -----------------------------------------------------------------------------
//
// This script checks if the system and/or site theme is dark.
// It uses window.matchMedia to detect the system theme and localStorage
// or the 'data-bs-theme' attribute to determine the site theme.
//
// Replace the console.log statements with your own logic
// to execute specific actions when the theme is dark.
//
// -----------------------------------------------------------------------------

const darkTheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
const currentTheme = localStorage.getItem('theme') || document.documentElement.getAttribute('data-bs-theme');

if (darkTheme) {
    console.log('System theme is dark.');
}

if (currentTheme === 'dark') {
    console.log('Site theme is dark.');
}
