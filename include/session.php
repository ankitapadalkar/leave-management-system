<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (!function_exists('checkLogin')) {
    function checkLogin() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit();
        }
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin() {
        return isset($_SESSION['role']) && $_SESSION['role'] == 'Admin';
    }
}

if (!function_exists('isHOD')) {
    function isHOD() {
        return isset($_SESSION['role']) && $_SESSION['role'] == 'HOD';
    }
}

if (!function_exists('isStaff')) {
    function isStaff() {
        return isset($_SESSION['role']) && ($_SESSION['role'] != 'HOD' && $_SESSION['role'] != 'Admin');
    }
}
?>
