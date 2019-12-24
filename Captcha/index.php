
<html>
<head>
	
	<title>Captcha</title>
</head>
<body>
	<img src="image.php"><br><br><br>
	
	<form method="post">
		Type Above catcha: <input type="text" name="no" required><br>
		<input type="submit" value="check">
	
	</form>
</body>
</html>

<?php

session_start();
if(!isset($_POST['no'])){
$_SESSION['no']=rand(10000,99999);
}
else{
				$utext=$_POST['no'];
				$gtext=$_SESSION['no'];
				if($utext==$gtext){
					echo"Match";
				}
				else{
					 echo"Not Match";
					 $_SESSION['no']=rand(10000,99999);
				} 
}

?>



