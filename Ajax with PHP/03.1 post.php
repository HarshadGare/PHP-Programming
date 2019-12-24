<?php

	if(isset($_POST['text'])){
	$text=$_POST['text'];
	echo"Hi $text";
	}
	else{
		echo"Error";
	}
	
?>