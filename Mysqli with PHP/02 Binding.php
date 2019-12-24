<?php
	error_reporting(0);
	require"dbcon.php";

	if(isset($_GET['id'],$_GET['name'],$_GET['rollno'])){
			$id=$_GET['id'];
			$name=$_GET['name'];
			$rno=$_GET['rollno'];
			$result=$db->prepare("SELECT name,rollno FROM reg WHERE id=? AND name=? AND rollno=?");
			$result->bind_param('sii',$id,$name,$rno); //i for integer, s for string
			$result->execute();
			$result->bind_result($name,$rno);

			if($result->fetch()){
				echo $name.' '.$rno;
			}

	}
	else{

		echo"<a href='02 Binding.php?id=1&name=harshad&rollno=17'>Click Here To See Result</a>";
	}
?>