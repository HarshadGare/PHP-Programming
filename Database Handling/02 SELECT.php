<?php
   include"01 dbcon.php";
   
   $query="select * from reg where collegename = 'svit' and id = 2 order by rollno asc";
   
   
   
   if($result=mysql_query($query)){
	   
	   if(mysql_num_rows($result)==NULL){
		   echo"No result found";
	   }
	   else{
		while($row = mysql_fetch_array($result)){
	   
			echo $row['id']." ";
			echo $row['name']." ";
			echo $row['rollno']." ";
			echo $row['collegename']." <br> 	";
		}
	   }
   }
   else{
	   echo"query failed";
   }
   
   
?>