<?php  
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 } 
    class User extends controller{
        function default () {
            $result = $this->model('User_class');
            $kq = $result ->renderUser();
            $this-> view("view", [
                "page" => "userLogin",
                "dl" => $kq
                                ]);
        }
    }