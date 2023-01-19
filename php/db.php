<?php

$host = "localhost";
$database = "Students";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$database";

try {

 $dbconnection = new PDO($dsn, $username, $password);
 $dbconnection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Connection to the database is successfull";

} catch (PDOException $err) {
echo "Database connec tion failed".$err->getMessage();
}

?>