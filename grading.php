<?php

if(isset($_POST["submit"])){
    
    $grade = $_POST["grade"];
    
    $above80 = $grade >= 80 && $grade <=100;
    $above60 = $grade >= 60 && $grade < 80;
    $above50 = $grade >= 50 && $grade < 60;
    $above40 = $grade >= 40 && $grade < 50;
    $below40 = $grade > 0 && $grade < 40;

    $possibleGrades = {
        1:"A",
        2:"B",
        3:"C",
        4:"D",
        5:"E",
    }
    
    switch($above80 ||  $above60 ||$above50||$above40||$below40){
        case $above80:
            echo "You scored an 'A'.";
            break;

        case $above60:
            echo "You scored an 'B'.";
            break;

        case $above50:
            echo "You scored an 'C'.";
            break;

        case $above40:
            echo "You scored an 'D'.";
            break;

        case $below40:
            echo "You scored an 'E'.";
            break;

        default:
            echo "Invalid Score entered.";
            break;
     }
?>