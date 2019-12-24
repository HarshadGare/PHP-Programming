<?php

	$xml=simplexml_load_file('company.xml');
	
	echo $xml->company[0]->name." ".$xml->company[0]->ceo;
	
	echo"<br><br>";
	
	foreach($xml as $temp){
		echo "CEO of ".$temp->name." is ".$temp->ceo;
		echo"<br><br>";
	}


?>