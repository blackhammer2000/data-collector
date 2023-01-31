<?php
session_start();

 $email  = $password = "";
 $errors = array("email" => "","password" => "");

 if(isset($_POST["login"])) {

   if(isset($_POST["email"])) $email = $_POST["email"];

   if (isset($_POST["password"]))
    $password = $_POST["password"];
    
  //  password_hash($_POST["password"], PASSWORD_DEFAULT);

    $emailRegex = '/^[\w@.]+$/';
    $passwordRegex = '/^[\w]+$/';

    if(empty($email)) {
      $errors["email"] =  "Email cannot be empty";
      return;
    }

    if(!preg_match($emailRegex, $email)){
      $errors["email"] = "Invalid Email";
      return;
    }

    if(empty($password)){
      $errors["password"] =  "Password cannot be empty";
      return;
    }

    if(!preg_match($passwordRegex, $password)){
      $errors["password"] = "Password must be letters and numbers only";
      return;
    }

    if(strlen($password) < 8){
      $errors["password"] = "Password must be 8 characters or more";
      return;
    }


    try {

   $readStudentDataQuery = "SELECT * FROM students WHERE email = ':email' AND password = ':password' ";

      $studentDataReadQueryPreperation = $dbconnection -> prepare($readStudentDataQuery);

      $studentData = [
         ':email' => $email,
         ':password' =>$password,
     ];

     $studentDataReadQueryPreperation -> execute($studentData);

     if($studentDataReadQueryPreperation -> rowCount()  !== 1) return;

     $user = $studentDataReadQueryPreperation  -> fetch();

     echo $user;

     if($user) echo "student found";
     if(!$user) echo "student not found";

    $userID = $user['id'];
    $userFirstname = $user['firstname'];
    $userLastname = $user['lastname'];
    $userEmail = $user['email'];
    $userCourse = $user['course'];

   } catch (PDOException $err) {
      echo $err->getmessage();
      }

   }
?>