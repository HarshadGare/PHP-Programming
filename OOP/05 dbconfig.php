<?php

class database{
	
	public function __construct($host,$uname,$pass){
		if(!@$this->connectserver($host,$uname,$pass)){
			echo"Connection Failed";
		}
		else{
			echo"Connect to ".$host;
		}
	}
	
	public function connectserver($host,$uname,$pass){
		if(!@mysql_connect($host,$uname,$pass)){
			return false;
		}
		else{
			return true;
		}
	}	
}


$connect = new database('localhost','root','');
	

?>