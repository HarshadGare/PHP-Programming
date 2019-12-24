<?php

class demo{

	public $no1=40;
	public $no2=60;

	function __construct($no1,$no2){         
		$this->addition($no1,$no2);
	}
	/*
	function __construct(){                    		we cannot create multiple constructor
		$this->addition($this->no1,$this->no2);
	} */

	function addition($no1,$no2){
		echo 'Addtion is:'.($no1+$no2);
	}
}


$obj= new demo(10,20);

//$obj= new demo;
?>