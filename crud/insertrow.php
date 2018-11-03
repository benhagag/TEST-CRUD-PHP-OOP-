<?php
spl_autoload_register(function ($class_name) {
include '../clases/'.$class_name . '.php';
});

$insertrow=new employees();
$id=$insertrow->getmaxid();
$id= $id ["max(id)"];
$id++;

$tablename=$_REQUEST['tablename'];
// $id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$date=$_REQUEST['date'];

$insertrow=new employees();
$insertok=$insertrow->insertorow($tablename,$id,$name,$date);


header('Location: ../index.php');


 ?>
