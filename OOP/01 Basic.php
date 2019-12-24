<?php

class demo{
	var $no1=10;  
	var $no2=20;
	
	function addition(){
		return ($this->no1+$this->no2);
	}
}

$obj= new demo;
echo $obj->no1;

echo'<br>';

echo 'Addtion is:'.$obj->addition();

?>