<?php 
    class modal extends controller {
        function default() {
             
           $cartsp = $this->model("Product_class");
          
            $this->view("viewMaster",[
                'page'=> 'container',
               
            ]

        );
        }
    }