<?php
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 }
    class home extends controller {
        function default(){
            $this-> view('view', [
        
                "page"=>"dashboard"
            ]);
        }
        function show(){
         
            $this-> view('view', [
                "page"=>"themdm"
            ]);
        }

    }
?>