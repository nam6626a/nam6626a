<?php
    class lactay extends controller {
        function default() {
           $result = $this-> model("Product_class");
           $category_name = "Lắc Tay";
           $kq = $result -> GetSpByDM($category_name);
           $this-> view("viewMaster", [
                'dl' => $kq,
                'page' => 'productLT'
           ]);
        }
    }
 ?>