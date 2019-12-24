<?php

 class demo{
	 const pi=3.14;
	 
	 function area($r){
		 return self::pi * ($r*$r);
	 }
 }

 $obj=new demo;
 
 echo demo::pi;
 
 echo"<br>";
 
 echo $obj->area(4);
 
?>