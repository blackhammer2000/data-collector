<?php

$firstName = $lastName = $email =$course = $password = $confirmPassword = "";
$errors = array("firstname" => "", "lastname" => "", "email" => "", "password" => "", "confirmPassword" => "", "course" => "");

if(isset($_POST["submit"])){

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $course = $_POST["course"];

    $textRegex = '/^[\w\s]+$/';
    $emailRegex = '/^[\w@.]+$/';
    $passwordRegex = '/^[\w]/';

    if(empty($_POST["firstname"]))
        $errors["firstname"] =  "Firstname cannot be empty";
    
    if(!preg_match($textRegex, $firstName))
        $errors["firstname"] = "Invalid Firstname";

    if(empty($_POST["lastname"]))
        $errors["lastname"] =  "Lastname cannot be empty";
    
    if(!preg_match($textRegex, $lastName))
        $errors["lastname"] = "Invalid Lastname";
    
    if(empty($_POST["email"]))
        $errors["email"] =  "Email cannot be empty";
    
    if(!preg_match($emailRegex, $email))
        $errors["email"] = "Invalid Email";
    
    if(empty($password))
        $errors["password"] =  "Password cannot be empty";

    if(!preg_match($passwordRegex, $password))
        $errors["password"] = "Password must be letters and numbers only";

    if(strlen($password) < 8)
        $errors["password"] = "Password must be more than 8 characters";
    
    if(empty($confirmPassword))
        $errors["confirmPassword"] =  "Password cannot be empty";
    
    if(!preg_match($passwordRegex, $password))
        $errors["confirmPassword"] = "Password must be letters and numbers only";

    if(strlen($confirmPassword) < 8)
        $errors["confirmPassword"] = "password must be more than 8 characters";
    
    if($password !== $confirmPassword){
        $errors["password"] = "Passwords do not match";
        $errors["confirmPassword"] = "Passwords do not match";
    }

    if(empty($_POST["course"]))
        $errors["course"] =  "Course cannot be empty";
    
    if(!preg_match($textRegex, $course))
        $errors["course"] = "Invalid Course Name";

    // require("database.php");

    if(array_filter($errors))
        echo "There are errors in the form";

    try {
        $insertStudentDataQuery = "INSERT INTO students (firstname,lastname, email, password, course) VALUES (:firstname, :lastname, :email, :password, :course)"; 

        $studentDataUploadQueryPreperation = $dbconnection -> prepare($insertStudentDataQuery);

        $studentData = [
            ':firstname' => $firstName,
            ':lastname' => $lastName,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
            ':course' => $course,
        ];

        $studentDataUploadQueryExecute = $studentDataUploadQueryPreperation -> execute($studentData);

        if($studentDataUploadQueryExecute) echo "<script> alert('Student data saved successfully.')</script>";

        if(!$studentDataUploadQueryExecute) echo "<script> alert('Student data save failed.')</script>";

        
    } catch (PDOException $err) {
        echo $err->getmessage();
    }

}

?>