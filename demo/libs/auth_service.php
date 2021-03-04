<?php
    session_start();
    function checkLogin(){
        if(!isset($_SESSION['user'])){
            header('location: login.php');
        }
    }

    function getUser(){
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        return [];
    }

    function handleLogin($user, $redirectPath='index.php'){
        $_SESSION["user"] = $user;
        header('location: '.$redirectPath);
    }

    function getMe(){
        return $_SESSION["user"] ;
    }
?>