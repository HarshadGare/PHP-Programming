<?php

$db = new mysqli('localhost','root','','wow_php');

$eno=$db->connect_errno;

//echo $eno."<br><br>";

if($db->connect_errno){
	die($db->connect_error);
}

?>