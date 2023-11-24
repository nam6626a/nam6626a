<?php
    class khuyentai extends controller {
        function default() {
           $result = $this-> model("Product_class");
           $category_name = "Khuyên Tai";
           $kq = $result -> GetSpByDM($category_name);
           $this-> view("viewMaster", [
                'dl' => $kq,
                'page' => 'productKT'
           ]);
        }
    }
 ?>