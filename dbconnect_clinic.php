
<?php
//default for localhost values
$host = "localhost";
$port = "3306";
$user = "jmartin";
$pw = "codeschool1";
$dbname = "jmartin_clinic";

// for PBCS server
if (gethostname() == "server.pbcs.us")
{
$host = "localhost";
$port = "3306";
$user = "jmartin";
$password = "codeschool1";
$database = "jmartin_clinic";
}

$connection_info = 
"mysql" 
.": host=" . $host
.":" . $port
. "; dbname=" . $dbname
;
 
$db = new PDO($connection_info, $user, $pw);






$conn_str = "mysql: host=localhost:3306; dbname=$database";
$db = new PDO($conn_str, $user, $password); 


