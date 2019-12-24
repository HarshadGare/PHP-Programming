<?php

	$time=time();
	
	echo $time; // display seconds count from 1970
	
	echo "<br><br>Using date('d m Y h:i:s',$time)<br>";
	echo date('d m Y h:i:s',$time);
	
	echo "<br><br>Using date('D M Y h:i:s',$time)<br>";
	echo date('D M Y h:i:s',$time);

?>