<?php

	if(!empty($_GET['string'])){
		$enc=md5($_GET['string']);
		echo "<br><b>Encrypted Data:- </b>".$enc."<br><br><br>";
	}
?>

<form method="get">
		Type any String:<input type="text" name="string">
		<br> <input type="submit" value="Encrypt">
</form>