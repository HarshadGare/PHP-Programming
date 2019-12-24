<?php

		$arr=array('Google','Microsoft','Apple','Oracle','IBM');
		
		print_r($arr);
		echo"<br><br>";
		
		$str=implode($arr); //(seperator,array) by default seperator value is ""
		echo $str;
		
		echo"<br><br>";
		
		$str=implode(' , ',$arr); 
		echo $str;
		

?>