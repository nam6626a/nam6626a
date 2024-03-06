<?php
  class daychuyen extends controller{
    function default()
    { 
      $m = 0;
       $result = $this-> model("Product_class");
       $category_name = 'Dây Chuyền';
       $DC = $result ->GetspByDM($category_name);
       $M_menu = $this->model('Category_class');
       $M_menu-> menu_g($m);
       $this-> view('viewMaster', [
        'page' => 'productDC',
        'dl' => $DC,
        'menu' => $M_menu
       ]);
    }
  }
 ?>