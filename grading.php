<?php

if(isset($_POST["submit"])){
    
    $rawGrade = $_POST["grade"];

    function processGrade($grade){
        $above80 = $grade >= 80 && $grade <=100;
        $above60 = $grade >= 60 && $grade < 80;
        $above50 = $grade >= 50 && $grade < 60;
        $above40 = $grade >= 40 && $grade < 50;
        $below40 = $grade > 0 && $grade < 40;

        switch($above80 ||  $above60 ||$above50||$above40||$below40){
            case $above80:
                return "above80";
    
            case $above60:
                return "above60.";
                
            case $above50:
                return "above50";
    
            case $above40:
                return "above40";
    
            case $below40:
                return "below40";
    
            default:
                return "Invalid Score entered.";
         }
    }
    

    $gradePool = (object) [
        $above80 =>"You scored an 'A'.",
        $above60 =>"You scored an 'B'.",
        $above50 =>"You scored an 'C'.",
        $above40 =>"You scored an 'D'.",
        $below40 =>"You scored an 'E'.",
    ];

    $processedScore = processGrade($rawGrade);
    
    switch($processedScore){
        case "above80":
            echo $gradePool->$processedScore;
            break;

        case "above60":
            echo $gradePool->$processedScore;
            break;

        case "above50":
            echo $gradePool->$processedScore;
            break;

        case "above40":
            echo $gradePool->$processedScore;
            break;

        case "below40":
            echo $gradePool->$processedScore;
            break;

        default:
            echo $processedScore;
            break;
    
    }
}

    
?>