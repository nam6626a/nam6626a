<?php 
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 }
class AddProduct extends controller {
    function default() {
        $result = $this->model("Category_class");
        $id = 21;
        $dl = $result -> GetDMbyParent_id($id);
        $this-> view("view", [
            "page" => "ProductAdd",
            "dl" => $dl,
        ]);
        if(isset($_POST['them'])){
            $product_name = $_POST['product_name'];
            $category_name = $_POST['category_name'];
            $price = $_POST['price'];
            $old_price = $_POST['old_price'];
            $description = $_POST['description'];
            $product_img = $_FILES['product_img'];
             $product_class = $this-> model("Product_class");
            $kq = $product_class -> AddSp($product_name, $category_name, $price, $old_price, $description, $product_img );
        }
       
    }
}