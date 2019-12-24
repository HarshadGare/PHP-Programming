<?php
define('HOSTNAME','localhost');
define('DB_USERNAME','username');
define('DB_PASSWORD','password');
define('DB_NAME', 'database-name');

//global $con;
$con = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("error");
// Check connection
if(mysqli_connect_errno($con))	echo "Failed to connect MySQL: " .mysqli_connect_error();
?>
