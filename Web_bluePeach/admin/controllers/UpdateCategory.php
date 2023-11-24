<?php 
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 }
    class UpdateCategory extends controller{
        function default() {
            $result = $this->model("Category_class");
            $category_id = $_GET['category_id'];
            $kq = $result ->GetDMbyID($category_id);
            $this-> view('view', [
                "dl" => $kq,
                "page"=> "categoryUpdate"
            ]);
            if( isset($_POST['sua']) && isset($_GET['category_id'])){
                $category_id = $_GET['category_id'];
                $category_name = $_POST['category_name'];
                $parent_id = $_POST['parent_id'];
               $result-> updateDM($category_name, $parent_id, $category_id);
                header('location:category');
            }
        }
    }
?>