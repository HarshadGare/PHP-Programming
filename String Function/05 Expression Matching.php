<?php
	
	$str="Hi i am crazy developer. & Programmer.";
			echo $str."<br><br>";
			
			if(preg_match('/crazy/',$str)){
				echo "Match Found";
			}
			else{
				echo "Match Not Found";
			}

?>