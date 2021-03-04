<?php
    session_start();
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        unset($_SESSION['user']);
        header('location: login.php');
    }
?>