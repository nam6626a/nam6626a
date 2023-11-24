<?php
    class App{
        protected $class = "homeController";
        protected $controller = "Home";
        protected $action = "default";
        protected $params =[];
        
        function __construct() {
            // array[(0)-> home, (1)-> action, (2) -> param]
         $arr= $this->Urlprocess();
      
        //  print_r($arr);
            //xử lý controller
            if (!empty($arr)) {
                if (file_exists("./controllers/".$arr[0].".php")) {
                    $this->controller = $arr[0];
                    array_shift($arr);
                }
            }
            
            require_once("./controllers/".$this-> controller.".php");
            
                //xử ký action
                if(isset($arr[1])){
                    if(method_exists($this->controller, $arr[1])){
                        // var_dump(method_exists($this->controller, $arr[1]));
                        $this-> action = $arr[1];
                        array_shift($arr);
                    }
                   

                }
                // xử lý param
                $this-> params = $arr?array_values($arr):[];
                
                call_user_func_array([new $this-> controller, $this-> action], $this->params);
            }
          
        function Urlprocess() {   
            if(isset($_GET["url"])){
               return explode("/",trim($_GET["url"], "/"));
              
            }
           
        }
    }
?>