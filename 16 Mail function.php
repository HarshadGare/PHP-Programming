<?php

$to='bhushanshahane1998@gmail.com';
$header='From: harshadgare@gmail.com';
$subject='This is subject';
$body='This is body part';

if(mail($to,$subject,$body,$header)){
	echo"Email send successfully";
}
else{
	echo"Email not send";
}
?>