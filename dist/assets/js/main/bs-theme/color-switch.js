
// Bootstrap 5 color mode switch button

document.getElementById('themeSwitch').addEventListener('click', () => {
    if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
        document.getElementById('themeSwitch').setAttribute('data-bs-theme-value', 'light');
    } else {
        document.getElementById('themeSwitch').setAttribute('data-bs-theme-value', 'dark');
    }
});
