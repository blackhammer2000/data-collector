<?php
if(isset($_POST["submit"])){
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    if(empty($_POST["firstname"])){
        $errors["firstname"] =  "Firstname cannot be empty <br/>"
    }

    if(!preg_match(/^[a-zA-Z\s]+$/, $firstName)){
        // $errors["firstname"] = "Invalid First name"
        echo "Firstname is invalid."
    }


    if(empty($_POST["lastname"])){
        $errors["lastname"] =  "Lastname cannot be empty <br/>"
    }

    if(!preg_match(/^[a-zA-Z\s]+$/, $lastName)){
        // $errors["lastname"] = "Invalid Lastname name"
        echo "Lastname is invalid."
    }


    if(empty($_POST["email"])){
        $errors["email"] =  "Email cannot be empty <br/>"
    }

    if(!preg_match(/^[a-zA-Z0-9]+$/, $email)){
        // $errors["email"] = "Invalid Email"
        echo "Email is invalid."
    }



    if(empty($_POST["course"])){
        $errors["course"] =  "Course cannot be empty <br/>"
    }

    if(!preg_match(/^[a-zA-Z0-9]+$/, $course)){
        // $errors["course"] = "Invalid Email"
        echo "Course is invalid."
    }

}


?>