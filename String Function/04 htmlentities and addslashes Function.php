<?php
						
			$str='Hi i am crazy developer. & Programmer. <img src="image.jpg">';
			echo $str."<br><br>";
			
			echo "<br><b>Using htmlentities Function:</b><br>";
			$str_he=htmlentities($str);
			echo $str_he;
			
			echo "<br><br><br><b>Using addslashes Function:<br></b>";
			$str_as=htmlentities(addslashes($str));
			echo $str_as;
		
?>