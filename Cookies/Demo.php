<?php

	if(isset($_COOKIE['name'])){
		echo "Hi i am ".$_COOKIE['name'];
	}
	else {
		echo "Cookie Deleted";
	}
?>