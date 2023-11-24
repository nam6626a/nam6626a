<?php 
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 }
    class delProduct extends controller {
        function default() {
           $result = $this-> model("Product_class");
           $id = $_GET['product_id'];
         $result ->DelProduct($id);
            header('location: product');
        }
    }
?>