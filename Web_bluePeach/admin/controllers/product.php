<?php 
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
   header('location:login');
}
    class product extends controller {
        function default() {
            $result = $this->model("Product_class");
            $dt = $result->Getsp();
            $this->view('view', [
                "page" => "productManagement",
                "dl" => $dt 
            ]);
        }
    }
?>