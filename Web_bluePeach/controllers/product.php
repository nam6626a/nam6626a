<?php
    class product extends controller {
        function default() {
            $m=18;
           $result = $this-> model("Product_class");
           $id = $_GET['product_id'];
           $kq = $result -> GetSPbyID($id);
           $M_menu = $this->model('Category_class');
           $M_menu-> menu_g($m);
           $this-> view("viewMaster", [
                'dl' => $kq,
                'page' => 'InfoProduct',
                'menu' => $M_menu
           ]);
        }
    }
 ?>