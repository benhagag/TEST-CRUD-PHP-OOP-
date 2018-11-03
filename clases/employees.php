<?php

require 'conection.php';

class employees
{
    private $conntoclass;
    private $conn;

    public function __construct()
    {
      $this->conntoclass = conection::conection();
      $this->conn=$this->conntoclass->getConnection();
      // die();



        // $this->$conntodb=$this->$conntoclass;
      // var_dump($this->instance);
      // die();




    }
// the first poage
    public function alldata($tablename)
    {
      $tablename=mysqli_real_escape_string($this->conn,$tablename);

        $sql = "SELECT * FROM $tablename";
        $result = $this->conn->query($sql);
        $allrows = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($allrows, $row);
            }

        } else {
            echo "0 results";
        }
        return $allrows;
    }


    public function getmaxid(){

      $sql = "SELECT max(id)  FROM employees";
      $result = $this->conn->query($sql);


      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

                return $row;
          }

      } else {
          echo "0 results";
      }

  }



    public function insertorow($tablename,$id,$name,$date)
    {
      $tablename=mysqli_real_escape_string($this->conn,$tablename);
      $name=mysqli_real_escape_string($this->conn,$name);
      $date=mysqli_real_escape_string($this->conn,$date);

      $sql = "INSERT INTO $tablename (id, name, date)
      VALUES ('$id', '$name', '$date')";
      if (mysqli_query($this->conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
}
}

public function getrow($id){

  $sql = "SELECT * FROM employees where id =$id";
  $result = $this->conn->query($sql);
  $allrows = array();

  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          array_push($allrows, $row);
      }

  } else {
      echo "0 results";
  }
  return $allrows;
}


public function deleterow($tablename,$id){
  $tablename=mysqli_real_escape_string($this->conn,$tablename);

  $sql = "DELETE FROM $tablename WHERE id='$id'";

if ($this->conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $this->conn->error;
}


}
public function deleteuser($tablename,$name){
  $tablename=mysqli_real_escape_string($this->conn,$tablename);
  $name=mysqli_real_escape_string($this->conn,$name);

  $sql = "DELETE FROM $tablename WHERE name='$name'";

if ($this->conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " .$this->conn->error;
}


}

public function updaterow($tablename,$name,$date,$id){
  $tablename=mysqli_real_escape_string($this->conn,$tablename);
  $name=mysqli_real_escape_string($this->conn,$name);
  $date=mysqli_real_escape_string($this->conn,$date);
  // $id=int($this->conn,$id);


  $sql = "UPDATE $tablename SET name='$name',date ='$date'WHERE id='$id'";

  if ($this->conn->query($sql) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $this->conn->error;
  }


}
}

?>
