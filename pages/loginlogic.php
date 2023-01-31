<?php
 require("../php/db.php");

 $email  = $password = "";
 $errors = array("email" => "","password" => "");

 if(isset($_POST["login"])) {

   if(isset($_POST["email"])) $email = $_POST["email"];

   if(isset($_POST["password"])) $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $emailRegex = '/^[\w@.]+$/';
    $passwordRegex = '/^[\w]/';

    if(empty($email))
    $errors["email"] =  "Email cannot be empty";

   if(!preg_match($emailRegex, $email))
    $errors["email"] = "Invalid Email";

    if(empty($password))
    $errors["password"] =  "Password cannot be empty";

  if(!preg_match($passwordRegex, $password))
    $errors["password"] = "Password must be letters and numbers only";

  if(strlen($password) < 8)
    $errors["password"] = "Password must be more than 8 characters";


    try {

   $readStudentDataQuery = "SELECT * FROM students WHERE email = ':email' AND password = ':password' ";

      $studentDataReadQueryPreperation = $dbconnection -> prepare($readStudentDataQuery);

      $studentData = [
         ':email' => $email,
         ':password' =>$password,
     ];

     $studentDataReadQueryExecute = $studentDataReadQueryPreperation -> execute($studentData);

     if($studentDataReadQueryExecute -> fetchColumn() < 1) return;

     $user = $studentDataReadQueryExecute  -> query();

     echo $user;

     if($user) echo "student found";
     if(!$user) echo "student not found";

   } catch (PDOException $err) {
      echo $err->getmessage();
      }

   }
?>