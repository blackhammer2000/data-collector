<?php
if(isset($_POST["submit"])){
    $firstName = $_POST["firstname"];

    if(empty($_POST["firstname"])){
        $errors["firstname"] =  "Firstname cannot be empty <br/>"
    }

    if(!preg_match(/^[a-zA-Z\s]+$/, $firstName)){
        // $errors["firstname"] = "Invalid First name"
        echo "Firstname is invalid."
    }

    $lastName = $_POST["lastname"];

    if(empty($_POST["lastname"])){
        $errors["lastname"] =  "Lastname cannot be empty <br/>"
    }

    if(!preg_match(/^[a-zA-Z\s]+$/, $firstName)){
        // $errors["firstname"] = "Invalid Lastname name"
        echo "Lastname is invalid."
    }

}


?>