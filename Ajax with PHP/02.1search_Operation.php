<?php


if(isset($_GET['stext'])){
	$stext=$_GET['stext'];
	
	if(!empty($_GET['stext'])){
		include"02.2 dbcon.php";
		$query="select name from reg where name like '$stext%'";
		if($result=mysql_query($query)){
		
			while($row = mysql_fetch_assoc($result)){
				$temp=$row['name'];
				echo"<br>".$temp;
			}
		}
		else{
			echo"Error";
		}
	
}


?>