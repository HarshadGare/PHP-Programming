<?php

$no1=10;

$no2=0;
try{
if($no2==0){
	throw new Exception('Divide By Zero Exception');
}
else{
	echo $no1/$no2;
}
}
catch(Exception $e){
	echo"Error :".$e->getMessage();
}



?>