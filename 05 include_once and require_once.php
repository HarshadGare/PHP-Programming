<?php 

	include'02 Equality.php';
	echo"<br><b>After include</b><br>";
	
	include_once'02 Equality.php';
	echo"<br><b>After include_once</b><br><br>";
	
	echo"-------------------------------------------------------<br><br>";
	
	require_once'01 echo and print.php';
	echo"<br><br><b>After require_once</b><br><br>";
	
	require'01 echo and print.php';
	echo"<br><br><b>After require</b>";
	
?>