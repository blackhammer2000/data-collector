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
  <header class="header container border-bottom d-flex justify-content-between mt-4">
      <div class="heading w-50 text-left align-items-center">
      <h1><span class="text-danger">DATA</span> COLLECTOR<sup>&reg;</sup></h1>
      </div>
    <nav class="nav d-flex justify-content-end align-items-center">
      <ul class="d-flex container-fluid list-unstyled font-weight-bold text-dark">
        <li class="mr-4"><a href="../index.php">HOME</a></li>
        <li><a href="./login.php">LOGIN</a></li>
        <li class="ml-4"><a href="./contact.php">CONTACT</a></li>
      </ul>
    </nav>
    </header>

    <section class="border-bottom  pb-3 container section hero-section mt-5 d-flex flex-column justify-content-between align-items-between text-center">
    <fieldset class="container border-top">
      <legend  class="text-center bg-danger w-50 mb-5"><span class="text-white">DATA</span> COLLECTOR <sup>&reg;</sup></legend>
    <form action="" method="POST" class="form container ">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Firstname"  name="firstname" value="<?php echo htmlspecialchars($firstname);?>"/>
        <div class="text-danger"><?php echo $errors["firstname"];?></div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Lastname"  name="lastname"/>
        <div class="text-danger"><?php echo $errors["lastname"];?></div>

      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email"  name="email"/>
        <div class="text-danger"><?php echo $errors["email"];?></div>

      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Course"  name="course"/>
        <div class="text-danger"><?php echo $errors["course"];?></div>

      </div>
      <div class="form-group">
        <button class="btn btn-success container" type="submit">SIGN UP</button>
      </div>
    </form>
    </fieldset>

      
    </section>

    <footer
      class="w-100 mt-5 row justify-content-around align-items-center h-auto"
    >
      <div
        class=" border-left px-5 payments font-italic font-weight-light w-auto h-100"
      >
        <h6><span>2023</span> DATA-COLLECTOR&reg;</h6>
      </div>
      <ul
        class=" border-right px-5 row justify-content-around w-auto h-100 align-items-center list-unstyled"
      >
        <li class="mr-4"><a href="">PRIVACY POLICY</a></li>
        <li><a href="">TERMS OF SERVICE</a></li>
        <li class="ml-4"><a href="">API</a></li>
      </ul>
    </footer>
  </body>
</html>

<?php
include("signuplogic.php")?>
