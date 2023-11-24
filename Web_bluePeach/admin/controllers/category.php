<?php
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["password"])){
    header('location:login');
 }
class category extends controller{
    function default()
    {
            $nam = $this->model('Category_class');
            $result = $nam -> GetDM();
            $this-> view('view', [
                "page"=>"categoryManagement",
                "dl"=> $result
            ]);
    }
   
}
   