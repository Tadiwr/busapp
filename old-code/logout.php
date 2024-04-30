<?php
session_start();

if (isset($_POST['logout_btn'])) {
    session_destroy();
    unset($_SESSION['Username']);
    echo 'Session has been destroyed.';
    echo '<script>setTimeout(function(){ window.location.href = "booking.php"; }, 3000);</script>';
    header('Location: http://localhost/Project/index.php');
    exit;
}
?>