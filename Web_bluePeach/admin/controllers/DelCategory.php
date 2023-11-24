<?php 
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 }
    class delCategory extends controller {
        function default() {
           $result = $this-> model("Category_class");
           $id = $_GET['category_id'];
         $result ->DelCategory($id);
           header("location:category");
        }
    }
?>