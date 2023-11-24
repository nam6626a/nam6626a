<?php 
define("dn",$_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define("rf",str_replace('\\','/',__DIR__));

    require_once('./core/app.php');
    require_once('./core/connDB.php');
    require_once('./core/controller.php');