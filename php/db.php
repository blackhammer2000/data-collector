<?php

$host = "localhost";
$database = "students";
$username = "root";
$password = "";

$dbURL = "mysql:host=$host;dbname=$database;";

try {

 $dbconnection = new PDO($dbURL, $username, $password);
 $dbconnection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Connection to the database is successfull";

} catch (PDOException $err) {
echo "Database connection failed =>" .$err->getMessage();
}

?>