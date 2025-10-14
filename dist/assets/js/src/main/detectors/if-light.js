
// Executes a scripts if a system theme is light

const lightTheme = window.matchMedia('(prefers-color-scheme: light)').matches;

if (lightTheme) {
    console.log('System theme is light.');
}
