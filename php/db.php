<?php

$host = "localhost";
$database = "students";
$username = "root";
$password = "";

$dbURL = "mysql:host=$host;dbname=$database;";

try {

    $dbconnection = mysqli_connect($host, $username, $password, $database);
//  new PDO($dbURL, $username, $password);

    if (!$dbconnection)
        throw new ErrorException("connection failed.");

//  $dbconnection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Connection to the database is successfull";

} catch (PDOException $err) {
echo "Database connection failed =>" .$err->getMessage();
}

?>