<?php
    class checkout extends controller {
        function default() {
            $this-> model("Product_class");
            $this-> view("viewMaster",[
               'page' => 'checkoutSP',
                
            ]);
        }
    }