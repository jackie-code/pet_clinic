
<?php
$host = "localhost";
$port = "3306";
$user = "jmartin";
$password = "codeschool1";
$database = "jmartin_clinic";


$conn_str = "mysql: host=localhost:3306; dbname=$database";
$db = new PDO($conn_str, $user, $password); 


