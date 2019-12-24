<?php

		$find=array('crazy','coder');
		$replace=array('****','crazy');
			
		if(isset($_POST['ta']) && !empty($_POST['ta'])){
			$ta=$_POST['ta'];
			$str_r=str_ireplace($find,$replace,$ta); // i means insensitive 
			
			echo $str_r;
		}

?>

<br>
<hr>
	<br>	
	<form  action="08 Search and Repalce Applicaton.php" method="POST">
		<textarea name="ta" cols="15" rows="3"><?php if(isset($_POST['ta']) && !empty($_POST['ta'])){echo $ta;}?>
		</textarea><br>
		<input type="submit" value="submit">
	</form>
	

<?php
		
		if(isset($_POST['text']) && !empty($_POST['text'])){
			$ta=$_POST['text'];
			$find=$_POST['search'];
			$replace=$_POST['replace'];
			$str_r=str_ireplace($find,$replace,$ta); // i means insensitive 
			}

?>	
	
	<br>
<hr>
	<br>	
	<form  action="08 Search and Repalce Applicaton.php" method="POST">
		<textarea name="text" cols="30" rows="6"><?php if(isset($_POST['text']) && !empty($_POST['text'])){echo $str_r;}?>
		</textarea><br>
		Search:<br><input type="text" name="search"><br><br>
		Replace:<br><input type="text" name="replace"><br>
		<input type="submit" value="submit">
	</form>
	
