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
    
    // require("database.php");

}

?>