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

    

    if(empty($_POST["firstname"])){
        $errors["firstname"] =  "Firstname cannot be empty <br/>";
        // echo "Firstname cannot be empty.";
    }

    if(!preg_match($textRegex, $firstName)){
        $errors["firstname"] = "Invalid First name";
        // echo "Firstname is invalid.";
    }

    if(empty($_POST["lastname"])){
        $errors["lastname"] =  "Lastname cannot be empty <br/>";
        // echo "Lastname cannot be empty.";
    }

    if(!preg_match($textRegex, $lastName)){
        $errors["lastname"] = "Invalid Lastname name";
        // echo "Lastname is invalid.";
    }

    if(empty($_POST["email"])){
        $errors["email"] =  "Email cannot be empty <br/>";
        // echo "Email cannot be empty.";
    }

    if(!preg_match($emailRegex, $email)){
        $errors["email"] = "Invalid Email";
        // echo "Email is invalid.";
    }

    if(empty($_POST["password"])){
        $errors["password"] =  "Password cannot be empty <br/>";
        // echo "Email cannot be empty.";
    }

    if(!preg_match($passwordRegex, $password)){
        $errors["password"] = "Password must be letters and numbers only";
        // echo "Email is invalid.";
    }

    if(empty($_POST["confirmPassword"])){
        $errors["confirmPassword"] =  "Password cannot be empty <br/>";
        // echo "Email cannot be empty.";
    }

    if(!preg_match($passwordRegex, $password)){
        $errors["confirmPassword"] = "Password must be letters and numbers only";
        // echo "Email is invalid.";
    }

    if($password !== $confirmPassword){
        $errors["password"] = "Passwords do not match";
        $errors["confirmPassword"] = "Passwords do not match";
        // echo "Email is invalid.";
    }

    if(empty($_POST["course"])){
        $errors["course"] =  "Course cannot be empty <br/>";
        // echo "Course cannot be empty.";
    }

    if(!preg_match($textRegex, $course)){
        $errors["course"] = "Invalid Email";
        // echo "Course is invalid.";
    }

}


?>