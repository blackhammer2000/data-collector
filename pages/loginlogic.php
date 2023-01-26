<?php

 $email  = $password = "";
 $errors = array("email" => "","password" => "");

 if(isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

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
       
             // @mysql_connect("localhost", "root", "");
             // mysql_select_db("students");
       
             // $readStudentDataQuery = "SELECT * FROM students WHERE email = '$email' AND password = '$password' ";
       
             // $result = mysql_query($readStudentDataQuery);
       
             // if(!mysql_num_row($result)) echo "Incorrect email or password";
             
             // if(mysql_num_row($result)) echo "Login successfull";

   $readStudentDataQuery = "SELECT * FROM students WHERE email = ':email' AND password = ':password' ";

      $studentDataReadQueryPreperation = $dbconnection -> prepare($readStudentDataQuery);

      $studentData = [
         ':email' => $email,
         ':password' =>$password,
     ];

     $studentDataReadQueryExecute = $studentDataReadQueryPreperation -> execute($studentData);

     echo $studentDataReadQueryExecute;

     if($studentDataReadQueryExecute) echo "student found";
     if(!$studentDataReadQueryExecute) echo "student not found";

   } catch (PDOException $err) {
      echo $err->getmessage();
      }

   }
?>