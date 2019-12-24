<?php 

	include'02 Equality.php';

	echo"<b>After include using Exiting file name</b><br><br>";
	
	require'02 Equality.php';

	echo"<b>After Require using Exiting file name</b><br><br>";
	
	include'02 temp.php';

	echo"<br><br><b>After include using Non-Exiting file name<b><br><br>";
	
	require'02 temp.php';

	echo"<br><b>After Require using Non-Exiting file name</b><br>";
?>