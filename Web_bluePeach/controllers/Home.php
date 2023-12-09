<?php
    class Home extends controller {
        function default($p = 1) {
            if(isset($_GET['addCart'])){
                $this->view('CartMaster', [
                    'x' => '$data["contairner"]',
                    'U' => '$data["slider"]'
                ]);
                exit;
            }
            $m =0;

            $Model = $this->model('Product_class');
            $phantrang = $this->model('phantrang');
            $ab = $phantrang ->tim_bai_viet($p,15);
            $ca = $phantrang ->tim_bai_viet();
            $kq = $Model -> GetSp();
            $M_menu = $this->model('Category_class');
             $M_menu-> menu_g($m);
            $this-> view("viewMaster" , [
                'page' => 'container',
                'banner' => 'slider',
                'dl' => $kq,
                'ab' =>$ab,
                'ca' =>$ca,
                'menu' => $M_menu
            ]);
        }
    }
 ?>