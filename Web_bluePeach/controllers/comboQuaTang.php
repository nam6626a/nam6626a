<?php 
class comboQuaTang extends controller{
    function default() {
       $result = $this-> model('product_class');
       $category_name = 'Combo Quà Tặng';
       $DC = $result ->GetspByDM($category_name);
       $this-> view('viewMaster', [
        'page' => 'productCB',
        'dl' => $DC
       ]);
    }
}