<?php

$username = $email = $message = "";
$errors = array( "username" => "", "email" => "", "message" => "");

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

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
    
    if(empty($_POST["password"]))
        $errors["password"] =  "Password cannot be empty";

    if(!preg_match($passwordRegex, $password))
        $errors["password"] = "Password must be letters and numbers only";
    
    if(empty($_POST["confirmPassword"]))
        $errors["confirmPassword"] =  "Password cannot be empty";
    
    if(!preg_match($passwordRegex, $password))
        $errors["confirmPassword"] = "Password must be letters and numbers only";
    
    if($password !== $confirmPassword){
        $errors["password"] = "Passwords do not match";
        $errors["confirmPassword"] = "Passwords do not match";
    }

    if(empty($_POST["course"]))
        $errors["course"] =  "Course cannot be empty";
    
    if(!preg_match($textRegex, $course))
        $errors["course"] = "Invalid Course Name";

    // require("database.php");

}

?>