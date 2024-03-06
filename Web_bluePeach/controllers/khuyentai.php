<?php
    class khuyentai extends controller {
        function default() {
            $m = 0;
           $result = $this-> model("Product_class");
           $category_name = "Khuyên Tai";
           $kq = $result -> GetSpByDM($category_name);
           $M_menu = $this->model('Category_class');
           $M_menu-> menu_g($m);
           $this-> view("viewMaster", [
                'dl' => $kq,
                'page' => 'productKT',
                'menu' => $M_menu
           ]);
        }
    }
 ?>