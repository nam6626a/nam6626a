<?php
  class daychuyen extends controller{
    function default()
    {
       $result = $this-> model("Product_class");
       $category_name = 'Dây Chuyền';
       $DC = $result ->GetspByDM($category_name);
       $this-> view('viewMaster', [
        'page' => 'productDC',
        'dl' => $DC
       ]);
    }
  }
 ?>