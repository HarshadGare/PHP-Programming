<?php
	
	
		if(isset($_POST['submit'])){
		$name=$_FILES['file']['name'];
		$size=$_FILES['file']['size'];
		$type=$_FILES['file']['type'];
		
		echo $type;
		die();

		$tmp_name=$_FILES['file']['tmp_name'];
			if(!empty($name)){
					$loc="upload/$name";
					$up=copy($tmp_name,$loc);
					print("$tmp_name");
					echo"<br>File Successfully Uploaded";
			}
			else {
				echo "Please Select file";
			}
		}

?>
<br>
<h1>Upload any file </h1>
<form method="post" enctype="multipart/form-data">
		<input type="file" name="file"><br><br>
		<input type="submit" name="submit" value="Upload">
</form>
<br><br>
<?php
	
	
		if(isset($_POST['submit2'])){
		$name=$_FILES['name']['name'];
		$size=$_FILES['name']['size'];
		$type=$_FILES['name']['type'];
		
		$tmp_name=$_FILES['name']['tmp_name'];
			if(!empty($name)){
				if($type=='image/jpeg'){
					$loc="upload/$name";
					$up=move_uploaded_file($tmp_name,$loc);
					echo"<br>File Successfully Uploaded";
				}
				else{
					echo"File must be jpeg or jpg";
				}
			}
			else {
				echo "Please Select file";
			}
		}

?>

<h1>Upload only jpg or jpeg file </h1>
<form method="post" enctype="multipart/form-data">
		<input type="file" name="name"><br><br>
		<input type="submit" name="submit2" value="Upload">
</form>