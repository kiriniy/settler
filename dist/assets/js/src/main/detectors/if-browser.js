
// -----------------------------------------------------------------------------
//
// This script checks the browser type.
// It uses the user agent string to detect the browser.
//
// Replace the console.log statement with your own logic
// to execute specific actions based on the browser type
// with Google Chrome as an example.
//
// -----------------------------------------------------------------------------

const deviceUserAgent = navigator.userAgent.toLowerCase();

if (deviceUserAgent.includes('chrome')) {
    console.log("Are we on Chrome? Yes!");
} else {
    console.log("Are we on Chrome? No!");
}
