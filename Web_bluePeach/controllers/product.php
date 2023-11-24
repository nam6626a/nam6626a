<?php
    class product extends controller {
        function default() {
           $result = $this-> model("Product_class");
           $id = $_GET['product_id'];
           $kq = $result -> GetSPbyID($id);
           $this-> view("viewMaster", [
                'dl' => $kq,
                'page' => 'InfoProduct'
           ]);
        }
    }
 ?>