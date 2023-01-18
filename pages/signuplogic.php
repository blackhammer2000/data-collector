<?php
if(isset($_POST["submit"])){
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    // $textRegex = /^[a-zA-Z\s]+$/;
    // $emailRegex = /^[a-zA-Z0-9]+$/;

    if(empty($_POST["firstname"])){
        // $errors["firstname"] =  "Firstname cannot be empty <br/>";
        echo "Firstname cannot be empty.";

    }

    if(!preg_match($textRegex, $firstName)){
        // $errors["firstname"] = "Invalid First name";
        echo "Firstname is invalid.";
    }


    if(empty($_POST["lastname"])){
        // $errors["lastname"] =  "Lastname cannot be empty <br/>";
        echo "Lastname cannot be empty.";

    }

    if(!preg_match($textRegex, $lastName)){
        // $errors["lastname"] = "Invalid Lastname name"
        echo "Lastname is invalid.";
    }


    if(empty($_POST["email"])){
        // $errors["email"] =  "Email cannot be empty <br/>"
        echo "Email cannot be empty.";

    }

    if(!preg_match($emailRegex, $email)){
        // $errors["email"] = "Invalid Email"
        echo "Email is invalid.";
    }



    if(empty($_POST["course"])){
        // $errors["course"] =  "Course cannot be empty <br/>"
        echo "Course cannot be empty.";

    }

    if(!preg_match($textRegex, $course)){
        // $errors["course"] = "Invalid Email"
        echo "Course is invalid.";
    }

}


?>