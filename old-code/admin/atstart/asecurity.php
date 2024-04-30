<?php
session_start();
//if (session_status() !== PHP_SESSION_ACTIVE) {
    // Session has not been started, so redirect to login page
   // header("Location: adminlogin.php");
  //  exit;
//}
function isLoggedIn() {
    return isset($_SESSION["Username"]);
}


if (!isLoggedIn()) {
    header("Location: adminlogin.php");
    exit;
}
include('database/dbconfig.php');
if ($connection) {
    // Database is connected
} else {
    // Handle database connection error (if needed)
    // ...
}
?>