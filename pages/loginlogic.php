<?php

 $email  = $password = "";
 $errors = array("email" => "","password" => "");

//  $sentence = "helloworld";

//  $alphabets = array(["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"]);

//  $count = 0;

//  for ($j=0; $j < array_count_values(array([$sentence])); $j++) { 
//    for ($i=0; $i < array_count_values([$alphabets]); $i++) { 
//       if($i === $j) $count++;
//    }
//  }

//  echo $count;

 if(!isset($_POST["submit"])) return;

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
      $readStudentDataQuery = "SELECT * FROM students WHERE email = ':email' AND password = ':password' ";

      @mysql_connect("localhost", "root", "dez");
      mysql_select_db("students");

   //    $studentDataReadQueryPreperation = $dbconnection -> prepare($readStudentDataQuery);

   //    $studentData = [
   //       ':email' => $email,
   //       ':password' =>$password,
   //   ];

   //   $studentDataReadQueryExecute = $studentDataReadQueryPreperation -> execute($studentData);

   //   if($studentDataReadQueryExecute) echo "student found";
   //   if(!$studentDataReadQueryExecute) echo "student not found";

   } catch (PDOException $err) {
      echo $err->getmessage();
      }

?>