<?php

namespace Admin\Auth;

class Auth {

    /** Return true if the user is logged in */
    public static function isLoggedIn() {
        return isset($_SESSION["ID"]) && isset($_SESSION["Username"]);
    }

    public static function setSession($username, $id) {
        $_SESSION["ID"] = $id;
        $_SESSION["Username"] = $username;
    }

    public static function destroySession() {
        unset($_SESSION["ID"]);
        unset($_SESSION["Username"]);
    }

}

?>