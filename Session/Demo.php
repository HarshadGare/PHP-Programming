<?php
	session_start();
	if(isset($_SESSION['name'])){
			echo "Hi i am ". $_SESSION['name'];
	}
	else{
			echo "Session Expired";
	}

?>