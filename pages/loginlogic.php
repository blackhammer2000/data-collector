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

 if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    try {
      $readStudentDataQuery = "SELECT (firstname,lastname, email, password, course) FROM students WHERE ( :email , :password )";

      $studentDataUploadQueryPreperation = $dbconnection -> prepare($insertStudentDataQuery);

      $studentData = [
         ':email' => $email,
         ':password' => password_hash($password, PASSWORD_DEFAULT),
     ];

     $studentDataUploadQueryExecute = $studentDataUploadQueryPreperation -> execute($studentData);

     if($studentDataUploadQueryExecute) echo "student found";
     if(!$studentDataUploadQueryExecute) echo "student not found";
     
   } catch (PDOException $err) {
      echo $err->getmessage();
      }

    
 }

?>