<?php 
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 }
    class AddCategory extends controller {
        function default()  {
            $this-> view('view',[
                'page' => "categoryAdd"
            ]);
            if(isset($_POST['them'])){
                $category = $_POST['category_name'];
                $parent_id = $_POST['parent_id'];
                  $category_class =  $this-> model('category_class');
               $category_class -> AddDm($category, $parent_id);
            }
        }
    }
 ?>