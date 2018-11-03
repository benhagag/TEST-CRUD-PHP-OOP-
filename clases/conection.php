<?php

class conection {
  private $conn;
  private $servername;
  private $username;
  private $password;
  private $dbname;
  static $instance=null;

  static function conection(){
      if(self::$instance==null){

        return self::$instance=new conection();

      }else{

        return self::$instance;
      }

  }

 public function getConnection() {
   return $this->conn;
   // echo "string";
 }

  public function __construct()
{
  $this->servername="localhost";
  $this->username="root";
  $this->password=123123;
  $this->dbname="test";

  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  // Check connection
  if ($this->conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
  }
    // echo "Connected successfully";
    // return $this->conn;
  }

 public function __destruct(){

   $this->conn->close();
}
}

?>
