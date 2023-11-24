<?php
class DB{
   protected $servername = "localhost";
   protected $username = "root";
   protected $password = "";
   protected $dbname = "web_bluepeach";
   public $conn;
//     function __construct() {
//         $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
//         mysqli_set_charset($this->conn,"utf8");
//         mysqli_query($this->conn, "SET NAMES 'utf8'");

//         return $this->conn ;
//    }

    function __construct() {
        
        try {
            $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } 
          catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
          return $this->conn;
          }
    }