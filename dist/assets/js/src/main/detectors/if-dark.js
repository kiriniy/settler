
// Executes a scripts if a system theme is dark

const darkTheme = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (darkTheme) {
    console.log('System theme is dark.');
}