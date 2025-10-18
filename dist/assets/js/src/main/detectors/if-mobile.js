
// -----------------------------------------------------------------------------
//
// This script checks if the device is a mobile device.
// It uses the user agent string to detect mobile devices.
//
// Replace the console.log statement with your own logic
// to execute specific actions when the device is mobile or
// specific actions when the device is NOT mobile.
//
// -----------------------------------------------------------------------------

const deviceUserAgent = navigator.userAgent.toLowerCase();
const mobileDevice = deviceUserAgent.match(/android|iphone|ipad|ipod/);

if (mobileDevice) {
    console.log("We are on mobile!");
}

// IF NOT

if (!mobileDevice) {
    console.log("We are not on mobile!");
}
