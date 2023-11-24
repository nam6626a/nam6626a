<?php  
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 }  
    class UpdateProduct extends controller{
        function default() {
            $result = $this-> model("Product_class");
            $result2 = $this->model("Category_class");
            $product_id = $_GET['product_id'];
            $id = 21;
            $kq =$result ->GetSPbyID($product_id);
            $dl = $result2 -> GetDMbyParent_id($id);
            $this-> view("view",[
                "page" => "productUpdate",
                "dl" => $kq,
                "dt" => $dl
            ]);
            if( isset($_POST['sua']) && isset($_GET['product_id'])){
                $product_id = $_GET['product_id'];
                $product_name = $_POST['product_name'];
                $category_name = $_POST['category_name'];
                $price = $_POST['price'];
                $old_price = $_POST['old_price'];
                $description = $_POST['description'];
                $product_img = $_FILES['product_img'];
               $result-> updateSP($product_name, $category_name, $price, $old_price, $description, $product_img, $product_id);
                header('location:product');
            }
        }
    }