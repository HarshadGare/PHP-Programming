<?php
error_reporting(0);
require"dbcon.php";

	if(!empty($_POST)){
		if(isset($_POST['name'],$_POST['collegename'],$_POST['rollno'])){
			$name=trim($_POST['name']);
			$collegename=trim($_POST['collegename']);
			$rollno=trim($_POST['rollno']);

			  if(!empty($name) && !empty($collegename) && !empty($rollno)){
					
					$query="INSERT INTO reg (name,rollno,collegename) VALUES('$name','$rollno','$collegename')";
					if($result=$db->query($query)){
						header("Location:03 Application.php");
					}

			 }
			 else{
				      echo "<center>Enter All Feild & Correct Data</center>";
			 }
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Basic Application</title>
</head>
<body>

<center>
	<h3>Students Name</h3>
<?php
$sql="SELECT * FROM reg";
$result=$db->query($sql);

$count=$result->num_rows;


if(!$count){
 echo "<center>NO Record</center>";
 }
	else{
			
?>

	<table cellspacing="10">
		<thead align="center">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Roll No.</th>
				<th>College Name</th>
			</tr>
		</thead>
		<tbody align="center">
			<?php 
					while($row=$result->fetch_object()){

				
			?>
			<tr>
				<td><?php echo $row->id; ?></td>
				<td><?php echo $row->name; ?></td>
				<td><?php echo $row->rollno; ?></td>
				<td><?php echo $row->collegename; ?></td>
			</tr>
			<?php 
				}
			?>
		</tbody>
	</table>
<?php
}
?>
<hr>
<form method="post">
	<label for="name">Name:</label>
	<input type="text" name="name" id="name">

	<label for="rollno">Roll No.:</label>
	<input type="number" name="rollno" id="rollno">

	<label for="colname">College Name:</label>
	<input type="text" name="collegename" id="colname">

	<input type="submit" value="Insert">
</form>

</center>
</body>
</html>