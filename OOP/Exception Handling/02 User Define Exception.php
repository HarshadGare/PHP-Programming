<?php
		$age=21;
 
 class myexception30 Extends Exception{} 
 
  class myexception Extends Exception{
	  function udefine(){
		  return("Exception thrown on Line ".$this->getLine()." in ".$this->getFile());
	  }
  } 
 
try{
	if($age==20){
		echo"Age is 20";
	}
	else if($age==30){
		throw new myexception30('Exception Occures when age is 30');
	}
	else{
		throw new myexception();
	}
}
catch(myexception20 $e){
	echo"Error : ".$e->getMessage();
}
catch(myexception $e){
	echo"Error : ".$e->udefine();
}
?>