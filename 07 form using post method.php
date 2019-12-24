<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>

		<form action="07 form using post method.php" method="post">
			Username:<input type="text" name="uname"><br>
			Password: <input type="password" name="pass"><br>	
			<input type="submit" name="ok" value="Click">
		</form>

		<?php  
		 include"Database Handling/01 dbcon.php";
			if(isset($_POST['ok']))
			{
				$uname=$_POST['uname'];
				$password=$_POST['pass'];
				
				$query="select * from reg where 'name'='$uname' and 'rollno'='$password'";
				
				/* This Query Avoid SQL injection
				$query="select * from reg where 'name'='".mysql_real_escape_string($uname)."' and 'rollno'='".mysql_real_escape_string($password)."'";
				*/			
					
				$result=mysql_query($query);
				
				if(@mysql_num_rows($result)>=1)
				{
					echo"<br>Login successfully<br>";
					echo"UserName is $uname <br>";
					echo"Password is $password <br>";
				}
				else {
					echo"<br>Username or Password Incorrect<br>";
					echo"UserName is $uname <br>";
					echo"Password is $password <br>";
				}
			}
			?>
	
</body>
</html>