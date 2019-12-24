<?php

		$str='Google,Microsoft,Apple,Oracle,IBM';
		
		
		echo"$str<br><br>";
		
		
		$arr=explode(',',$str); //by default limit is less than 0
		print_r($arr);
		
		echo"<br><br>limit 0<br>";
		
		$arr=explode(',',$str,0); //(seperator,string,limit) limit value=greter than 0 or less than 0 or 0
		print_r($arr);
		
		echo"<br><br>limit greter than 0<br>";
		
		$arr=explode(',',$str,2); 
		print_r($arr);
		
		echo"<br><br>limit less than 0<br>";
		
		$arr=explode(',',$str,-1);
		print_r($arr);

?>