<?php

spl_autoload_register(function ($class_name) {
include 'clases/'.$class_name . '.php';
});

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test php crud</title>
  </head>
  <body>
    <?php
require 'header.php';
// var_dump($_REQUEST);

// spl_autoload_register(function ($class_name) {
// include 'clases/'.$class_name . '.php';
// });

$all=new employees();
$alldata=$all->alldata('employees');
// if($alldata==null){
// echo "<h1> please insert data</h1>";
// // die();
// }

 ?>
 <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>date</th>
        <th> actions </th>
      </tr>
    </thead>
    <tbody>


 <?php foreach ($alldata as $key => $value){
    $id=$value['id'];
    $name=$value['name'];
    $date=$value['date'];
  ?>
      <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo   $date; ?></td>
        <td> delete <?php echo "<a href='crud/delete.php?tablename=employees&id=$id'>";?><span class="glyphicon glyphicon-remove"></span></a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            edit <?php echo "<a href='crud/edit.php?tablename=employees&id=$id&name=$name&date=$date'>";?><span class="glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myModal"></span></a>
        </td>
      </tr>
      <?php } ?>

 </tbody>
 </table>










  <script src="js/js.js"></script>
  </body>
</html>
