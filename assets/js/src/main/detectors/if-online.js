
// -----------------------------------------------------------------------------
//
// This script checks if the device is online.
// It uses the navigator.onLine property to detect the online status.
//
// Replace the console.log statement with your own logic
// to execute specific actions when the device is online or
// specific actions when the device is offline.
//
// -----------------------------------------------------------------------------

if (navigator.onLine) {
    console.log("We are online!");
} else {
    console.log("We are offline!");
}
