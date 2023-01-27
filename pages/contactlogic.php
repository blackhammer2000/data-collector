<?php

$username = $email = $message = "";
$errors = array( "username" => "", "email" => "", "message" => "");

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $textRegex = '/^[\w\s]+$/';
    $emailRegex = '/^[\w@.]+$/';
    // $passwordRegex = '/^[\w]/';

    if(empty($username))
        $errors["firstname"] =  "Firstname cannot be empty";
    
    if(!preg_match($textRegex, $username))
        $errors["username"] = "Invalid Username";

    if(empty($email))
        $errors["lastname"] =  "Email cannot be empty";
    
    if(!preg_match($emailRegex, $email))
        $errors["email"] = "Invalid Email";
    
    if(empty($message))
        $errors["message"] = "Message cannot be empty";
    
    if(!preg_match($textRegex, $message))
        $errors["message"] = "Invalid Message";
    
    // require("database.php");

}

?>