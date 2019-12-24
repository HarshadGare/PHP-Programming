<?php
	session_start();
	unset($_SESSION["name"]); //destroy only single session.
	// we can also use "session_destrory()" method to destroy all sessions. 
?>