<?php 
 session_start();
class logout extends controller {
    function __construct()
    {
            unset($_SESSION['user_email']);
            unset($_SESSION['password']);
            header('location:login');
    }
}