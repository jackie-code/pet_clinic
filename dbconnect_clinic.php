// connect to the database
<?php
$user = "jackie";
$password = "root";
$database = "clinic";


$conn_str = "mysql: host=localhost:3306; dbname=$database";
$db = new PDO($conn_str, $user, $password);


