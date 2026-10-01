<?php 
try {
    $pdo = new PDO('mysql:host=localhost;dbname=week6;charset=utf8mb4', 'root', '');
    $output = "Database Connection Established";
}
catch(PDOException $e) {
    $output = "Unable to connect to the database" . $e; //dev version 1

}