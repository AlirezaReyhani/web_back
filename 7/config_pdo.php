<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "test";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 //echo "Connected successfully <br />";
 
 }catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage(); }

?>