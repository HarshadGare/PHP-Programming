<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	
		<form method="get">
			Your Name:<input type="text" name="uname"><br>
			College Name: <input type="text" name="cname"><br>	
			<input type="submit" name="ok" value="Click">
		</form>

		<?php  
			if(isset($_GET['ok']))
			{
				$uname=$_GET['uname'];
				$collegeName=$_GET['cname'];
				
				echo $uname;
				echo"<br>$collegeName";
			}
			?>
			
	
</body>
</html>