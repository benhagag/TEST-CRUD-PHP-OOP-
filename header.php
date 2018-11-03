
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>headermvc</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">employees</a>

        </div>
        <ul class="nav navbar-nav">
          <li class="active"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">insert</button></li>
          <li style="margin-left: 40px;"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#byusers">delete by user</button></li>
          <li>
            <form style="margin-left:50px;" action="crud/onerow.php">
            <div class="form-group">
            <input type="text" class="form-control" id="id" placeholder="Enter id" name="byid" required>
            <button type="submit" class="btn btn-default">search</button>
          </div>
        </form>
        </li>
        </ul>
      </div>
    </nav>

    <div id="myModal" class="modal fade" role="form">
      <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body"style="overflow:hidden;">


           <h2>insert</h2>
           <form action="crud/insertrow.php">
             <div class="form-group">
               <label for="pwd">insert to employees</label>
               <input type="hidden" class="form-control" id="tablename" value="employees" name="tablename" required>
             </div>
             <!-- <div class="form-group">
               <label for="id">id:</label>
               <input type="number" class="form-control" id="id" placeholder="Enter id" name="id" required>
             </div> -->
             <div class="form-group">
               <label for="content">name:</label>
               <br>
               <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
             </div>
             </div>
             <div class="form-group">
               <label for="date">date start:</label>
               <input type="date" class="form-control" id="date" name="date" required>
             </div>
             <button type="submit" class="btn btn-default">Submit</button>
           </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ///////////////////////////////// -->
<div id="byusers" class="modal fade" role="form">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Modal Header</h4>
  </div>
  <div class="modal-body"style="overflow:hidden;">


       <h2>delete</h2>
       <form action="crud/delete.php">
         <div class="form-group">
           <label for="byuser">name:</label>
           <input type="text" class="form-control"  placeholder="Enter username" name="name" required>
         </div>
         <div class="form-group">
           <label for="byuser"> delet from employees</label>
           <input type="hidden" class="form-control" placeholder="Enter username" name="tablename" value="employees" required>
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
       </form>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>
