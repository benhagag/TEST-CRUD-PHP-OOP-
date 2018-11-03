<?php


spl_autoload_register(function ($class_name) {
include '../clases/'.$class_name . '.php';
});



var_dump($_REQUEST);

if(isset($_REQUEST['id'])){

$tablename=$_REQUEST['tablename'];
$id=$_REQUEST['id'];
$delete=new employees();
$deleteuser=$delete->deleterow($tablename,$id);

}else{

$name=$_REQUEST['name'];
$tablename=$_REQUEST['tablename'];
$delete=new employees();
$deleteuser=$delete->deleteuser($tablename,$name);
}


header('Location: ../index.php');





// array(2) { ["byuser"]=> string(3) "ben" ["tablename"]=> string(8) "articles" }
 ?>
