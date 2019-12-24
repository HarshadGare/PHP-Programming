<?php
	error_reporting(0);
	include"dbcon.php";

	$sql="SELECT * FROM reg";
	$result=$db->query($sql) or die($db->error);

	print_r($result);

	$nrow=$result->num_rows;
	echo "<br><br>No. of Rows Affected: ",$nrow;
	echo"<br><br>";

/*  ------ Fetch result in form of Associated Array -------
	$row=$result->fetch_assoc();
	echo '<pre>',print_r($row),'</pre>';
*/

$row=$result->fetch_all(MYSQLI_BOTH); //Default value is MYSQLI_NUM, MYSQLI_ASSOC,MYSQLI_BOTH
 	echo '<pre>',print_r($row),'</pre>';

 	foreach($row as $rows){
 		echo $rows['name']." <br>";
 	}

 	echo"<br><br>";
 	$sql="SELECT * FROM reg";
	$result1=$db->query($sql) ;
	
	echo $db->affected_rows.'<br>'; //Print the no. of Rows affected by last query. if query failed it returns -1 value

 	while($row1=$result1->fetch_object()){
 			echo ' '.$row1->name,' ',$row1->rollno;
 	}









?>