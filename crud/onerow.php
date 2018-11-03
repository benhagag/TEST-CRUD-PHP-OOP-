
<?php

spl_autoload_register(function ($class_name) {
include '../clases/'.$class_name . '.php';
});
// var_dump($_REQUEST);
$id=$_REQUEST['byid'];
// echo $id;

$one=new employees();
$onerow=$one->getrow($id);
if($onerow==false){
echo " <br>no results";
?>
 <a href="../index.php"><h1> prees here to go back to the main table</h1> </a>

<?php
die();}?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>one row</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>

     <table class="table table-hover">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>date</th>
          </tr>
        </thead>
        <tbody>


     <?php foreach ($onerow as $key => $value){
        $id=$value['id'];
        $name=$value['name'];
        $date=$value['date'];
      ?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo   $date; ?></td>
          </tr>
          <?php } ?>

     </tbody>
     </table>

     <a href="../index.php"><h1> prees here to go back to the main table</h1> </a>

   </body>
 </html>
