<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORM VALIDATOR</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/signup.css" />
    <link rel="stylesheet" type="text/css" href="../css/universal.css" />
  </head>
  <body>
    <fieldset class="container  bg-danger">
      <legend  class="text-center bg-danger w-50"><span class="text-white">DATA</span> COLLECTOR <sup>&reg;</sup></legend>
    <form action="" method="POST" class="form container">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Firstname" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Lastname" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Course" />
      </div>
      <div class="form-group">
        <button class="btn btn-outline-success" type="submit">SIGN UP</button>
      </div>
    </form>
    </fieldset>

  </body>
</html>

<?php
include("signuplogic.php")?>
