<?php
    class Home extends controller {
        function default($p = 1) {
            $Model = $this->model('Product_class');
            $phantrang = $this->model('phantrang');
            $ab = $phantrang ->tim_bai_viet($p,15);
            $ca = $phantrang ->tim_bai_viet();
            $kq = $Model -> GetSp();
            $this-> view("viewMaster" , [
                'page' => 'container',
                'banner' => 'slider',
                'dl' => $kq,
                'ab' =>$ab,
                'ca' =>$ca
            ]);
        }
    }
 ?>