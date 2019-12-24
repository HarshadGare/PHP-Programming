<?php
require 'dbconfig.php';

$user_ip= $_SERVER['REMOTE_ADDR'];

function ip_exist($ipaddr){
	global $user_ip;
	$query = "SELECT ip FROM hit_ip WHERE ip = '$user_ip'";
	
	$query_run = mysql_query($query);
    $query_num_row = mysql_num_rows($query_run);
	if($query_num_row==0){
		return false;
	}
	else if($query_num_row>=1){
		return true;
	}
}
function ip_add($ip){
	$query="insert into hit_ip values ('$ip')";
	$query_run=mysql_query($query);
}

function update_count(){
		$query="select count from hit_count";
		if($query_run=mysql_query($query)){
			echo"run<br>";
			@$count=mysql_result($query_run,0);
			echo $count;
			$count_inc=$count+1;
			$query_update="UPDATE hit_count SET count = '$count_inc'";
			mysql_query($query_update);
		}
		else{
			echo"fail";
		}
}

if(!ip_exist($user_ip)){
	echo"exist";
	update_count();
	ip_add($user_ip);
}


?>