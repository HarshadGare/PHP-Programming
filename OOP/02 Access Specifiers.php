<?php

class demo{
	private $no1=10;  
	protected $no2=20;
	public $no3;
	
	public function addition(){
		$this->no3=$this->no1+$this->no2;
		return ($this->no3);
	}
}

$obj= new demo;

echo 'Addtion is:'.$obj->addition();

echo'<br>';
//echo $obj->no1; it will gives the error
//echo $obj->no2; it will gives the error
echo $obj->no3;


?>