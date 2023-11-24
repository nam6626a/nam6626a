<?php 

$pre ="";
isset($_SERVER['HTTPS'])?$pre="https://":$pre="http://";
$xxx=$pre.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
preg_match('/^((?:(?:http:\/\/)|(?:https:\/\/)).+(?:[\/]|))(?:\/\w+.php)$/', $xxx, $linksvr);
define('dmn',$linksvr[1]);

require_once('./core/DB.php');
require_once('./core/app.php');


require_once('./core/controller.php');



?>