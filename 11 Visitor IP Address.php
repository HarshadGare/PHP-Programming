<?php

	$ip=$_SERVER['REMOTE_ADDR'];

	echo $ip."<br><br>";
	
	if($ip == '127.0.0.1'){
		die("<br>IP Address $ip is Bloked");
	}
	
?>