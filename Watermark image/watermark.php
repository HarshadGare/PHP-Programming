<?php
header('Content-type: image/jpeg');

if(isset($_GET['source'])){
	$source= $_GET['source'];
	
	$watermark=imagecreatefrompng('Atitude.png');
	
	$w_width=imagesx($watermark);
	$w_height=imagesy($watermark);
	
	$image=imagecreatetruecolor($w_width,$w_height);
	$image=imagecreatefromjpeg($source);
	
	$image_size=getimagesize($source);
	$x = $image_size[0]-$w_width - 10;
	$y = $image_size[1]-$w_height - 10;
	
	imagecopymerge($image,$watermark,$x,$y,0,0,$w_width,$w_height,20);
	imagejpeg($image);
}

?>