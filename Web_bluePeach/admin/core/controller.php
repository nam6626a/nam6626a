<?php
    class controller {
        function model($model) {
            require_once("./models/".$model.".php");
            return new $model ;
        }

        function view($view, $data=[]) {
            require_once("./views/".$view.".php");
          
        }
        function DOAN_InfVar($v,$rd=false){
            $_ret = "<div style=' max-width: 100vw;overflow-x: scroll; font-family: monospace; background: #353d41; color:#94ff82; padding:8px;'>";
            $bt = debug_backtrace();
            $caller = array_shift($bt);
            $_ret.= "<span style='display:block;font-family: inherit; color:#a5ab53;padding:3px 0;'>Dòng <b style='font-family: inherit;color:#d2d96f'>".$caller['line']."</b> file <b style='font-family: inherit;color:#d2d96f'>".$caller['file']."</b></span>";
            $_ret.= "<b style='font-family: inherit;color: #64daff;'>Kiểu dữ liệu:</b> ".gettype($v)."</br>";
            $r = print_r($v,true);
            $r = str_replace("\n","<br>",$r);
            $r = str_replace(" ","&nbsp",$r);
            $_ret.= "<b style='font-family: inherit;color:#ffaa3d; display:block;'>Giá trị:</b><div style='font-family: inherit;margin-left:2.5rem;'>".$r."</div></div>";
        
            if($rd==false){
                echo $_ret;
            }else return $_ret;
        }
    }
?>