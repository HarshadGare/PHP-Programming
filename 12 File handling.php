<?php
	if(empty($_POST['name'])){
		
		$filename='harshad.txt';
		if(file_exists($filename)){
				echo'<br>File already Exist<br><br>';
		}
		else{
		$fo=fopen($filename,'w');
		fwrite($fo,"foolish \n");
		fclose($fo);
		}
		
		if(file_exists($filename)){
				$fo=fopen('harshad.txt','r');
				$fs=filesize($filename);
			$fr=fread($fo,$fs);
			echo $fr;
			fclose($fo);
			echo"<br>";
				
		}
		else{
				echo'<br>File does not Exist<br><br>';
		}
	}
	else{
		if(isset($_POST['name']) && !empty($_POST['name'])){
			$fo=fopen('harshad.txt','a');
			$name=$_POST['name'];
			fwrite($fo,$name."\n");
			fclose($fo);
				
			
			$readname=file('harshad.txt');
			$count=count($readname);
			$c=1;
			foreach($readname as $temp){
				echo"$temp";
				if($c!=$count)
					echo" , ";
				$c++;
			}  
						
		}
	}
	
	//rename('harshad.txt','harsh.txt');
	
	@unlink('harsh.txt');
	
	
	
?>

<form method="post">
			<input type="text" name="name"><br>
			<input type="submit" value="submit">

</form>