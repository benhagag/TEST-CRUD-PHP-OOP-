<?php
spl_autoload_register(function ($class_name) {
include '../clases/'.$class_name . '.php';
});



$tablename=$_REQUEST['tablename'];
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$date=$_REQUEST['date'];
// var_dump($_REQUEST);

 // echo $content.'<BR>';

$update=new employees();
$updateid=$update->updaterow($tablename,$name,$date,$id);

header('Location: ../index.php');



?>
