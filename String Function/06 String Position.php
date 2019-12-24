<?php
	$str="Hi i am crazy developer. & Programmer.";
			echo $str."<br><br>";
			
		$find='am';	
		echo '<br><br>Using strpos($str,"am") :- ';
		$str_p=strpos($str,$find);
		echo "<br>";
		echo $str_p;
		echo "<br><br>";
		
		echo '<br><br>Using strpos($str,"am",7) :- ';
		$str_p=strpos($str,$find,7);
		echo "<br>";
		echo $str_p;
		echo "<br><br><br><br> ";
		
		$f=0;
		$str_l=strlen($find);
		while($str_pos = strpos($str,$find,$f)){
			
			echo $find." at ".$str_pos."position <br>";
			$f=$str_pos+$str_l;
			
		}
		
		

?>