<?php

header('Content-type:image/jpeg');

if(isset($_GET['image'])){
	$image=$_GET['image'];
	
	$i_size=getimagesize($image);
	
	$i_width=$i_size[0];
	$i_height=$i_size[1];
	
	$new_width=$i_width*10;
	$new_height=$i_height*10;
	
	$new_image=imagecreatetruecolor($new_width,$new_height);
	$old_image=imagecreatefromjpeg($image);
	
	imagecopyresized($new_image,$old_image,0,0,0,0,$new_width,$new_height,$i_width,$i_height);
	imagejpeg($new_image,$new_image.'thumb.jpg');
	
}


?>

