<?php

session_start();

if (isset($_POST['login_btn'])) {
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];

    // Database Connection
    $con = new mysqli('localhost', 'root', '', 'bus_system');

    if ($con->connect_error) {
        echo'not connecting';
        die('Connection Failed: ' . $con->connect_error);
        
    } 
    else {
        // Retrieve the hashed password from the database
        $query = "SELECT Password FROM admins WHERE Username='$username_login' LIMIT 1";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['Password'];

        // Verify the password using password_verify
        if (password_verify($password_login, $hashedPassword)) {
            $_SESSION['Username'] = $username_login;
            header('Location: index.php');
        } 
        else {
            $_SESSION['error_message'] = "Username / Password is Invalid";
            header('Location: adminlogin.php');
        }

    }
}

?>