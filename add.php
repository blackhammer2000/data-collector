<?php
         if(isset($_POST["submit"])){
    
          $num1 = $_POST["num1"];
          $num2 = $_POST["num2"];
    
          $ans = $num1 + $num2;
    
          echo "the sum is" .$ans;
         }
    ?>