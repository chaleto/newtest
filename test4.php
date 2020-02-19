<?php

$servername = "localhost";
$user = "root";
$password = "";
$db = "database";
try{
$conn = new PDO("mysql:host=$servername,$db",$user,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo $e->getMessage();
}
?>