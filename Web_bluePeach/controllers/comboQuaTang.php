<?php 
class comboQuaTang extends controller{
    function default() {
        $m = 0;
       $result = $this-> model('Product_class');
       $category_name = 'Combo Quà Tặng';
       $DC = $result ->GetspByDM($category_name);
       $M_menu = $this->model('Category_class');
       $M_menu-> menu_g($m);
       $this-> view('viewMaster', [
        'page' => 'productCB',
        'dl' => $DC,
        'menu' => $M_menu
       ]);
    }
}