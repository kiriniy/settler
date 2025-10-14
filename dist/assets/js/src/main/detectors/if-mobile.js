
// Executes a scripts if on mobile device

const deviceUserAgent = navigator.userAgent.toLowerCase();
const mobileDevice = deviceUserAgent.match(/android|iphone|ipad|ipod/);

if (mobileDevice) {
    console.log("We are on mobile!");
}
