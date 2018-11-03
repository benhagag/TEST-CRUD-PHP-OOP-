<?php
// require '../header.php';
// var_dump($_REQUEST);
$tablename=$_REQUEST['tablename'];
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$date=$_REQUEST['date'];

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>edit page</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>

 <div class="container">
   <?php echo '<h2> edit id number '. $id.'</h2>';?>
   <form action="update.php">
     <div class="form-group">
       <input type="hidden" class="form-control" value=<?php echo $tablename ?> name="tablename">
     </div>
     <div class="form-group">
       <input type="hidden" class="form-control" value=<?php echo $id;?> name="id">
     </div>
     <div class="form-group">
       <label for="title">name:</label>
       <input type="text" class="form-control" value=<?php echo $name;?> name="name">
     </div>
     <div class="form-group">
       <label for="content">date:</label>
       <br>
       <input type="date" class="form-control" value=<?php echo $date;?> name="date">
     </div>
     <button type="submit" class="btn btn-default">Submit</button>
     <a href="../index.php"><button class="btn btn-default">cancel</button></a>

   </form>
 </div>

 </body>
 </html>
