<?php
require 'dbconfig.php';

$user_ip= $_SERVER['REMOTE_ADDR'];

function ip_exist($ip){
	global $user_ip;
	$query="select 'ip' from 'hit_ip' where 'ip'='$user_ip'";
	
	$query_run=mysql_query($query);
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0){
		return false;
	}
	else if($query_num_rows>=1){
		return true;
	}
}
function ip_add($ip){
	$query="insert into 'hit_ip' value ('$ip')";
	@$query_run=mysql_query($query);
}

function update_count(){
		$query="selct 'count' from 'hit_count'";
		if(@$query_run=mysql_query($query)){
			$count=mysql_result($quer)
		}
}

if(ip_exist($user_ip)){
	echo'Exist';
}
else{
	echo'Doesn\'t Exist';
}

?>