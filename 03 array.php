<?php

 echo "<b>Simple array</b><br>";
 $arr=array('php','is','scripting','language');
 
 echo $arr[0];
 
 echo "<br>";
 
 print_r($arr);
 
 foreach($arr as $temp){
	 echo"<br>".$temp;
 }
 echo "<br>";
 
 echo"<br><b>Array with user define key value</b><br>";
 
 $uarr=array('name'=>'Harshad','collegeN'=>'SVIT','MobNo'=>'9665289181');
 
 echo $uarr['name'];
 echo"<br>";
 
 
 print_r ($uarr);

 echo "<br><br><b>Multi Dimentional Array</b></br></br>";
 
 $marr=array('numbers'=>
						array('0','1','2','3','4','5'),
			 'alphabets'=>
						array('a','b','c','d','e')
			);
 print_r($marr);
 echo"<br>";
 echo $marr['numbers'][4];
  echo"<br>";
 echo $marr['alphabets'][2];
 echo"<br>";
 
 foreach($marr as $temp => $item){
	 echo"<br><b>$temp</b>";
	 foreach($item as $val){
		 echo"<br>$val";
	 }
 }
 
 
 
?>