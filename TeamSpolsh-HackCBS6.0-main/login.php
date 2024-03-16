<?php include "db.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>


  <title>Document</title>
</head>

<body>
  <div class="row">
    <div class=col-sm-2></div>
    <div class=col-sm-8>

      <form action="savelogin.php" method="post" enctype="multipart/form-data">
        <h1>
          <center>SIGN IN</center>
        </h1>
        <div class="row" style="padding:20px;">
          <div class="form-group col-sm-6">
            <lable style="align:left;font-weight:bold;">Email</lable>
            <input type="email" class="form-control" name="emailid" />
          </div>
          <div class="form-group col-sm-6">
            <lable style="align:left;font-weight:bold;">Password</lable>
            <input type="password" class="form-control" placeholder="Enter password " name="password" />
          </div>

          <div class="form-group col-sm-6">
            <input type="submit" class="btn btn-success btn-block" value="Register" 
            class="form-control" />
          </div>

          <div class="form-group col-sm-6">
            <input type="submit" class="btn btn-danger btn-block" 
            value="Clear All" class="form-control" />
          </div>
        </div>
      </form>
    </div>
    <div class=col-sm-2></div>

    <br><br>

</html>