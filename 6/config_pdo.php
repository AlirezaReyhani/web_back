<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "test";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "SELECT * FROM users";
 echo "Connected successfully";
 
 }catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage(); }

?>