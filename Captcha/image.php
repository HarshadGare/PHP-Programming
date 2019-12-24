<?php

session_start();
$no=$_SESSION['no'];

header('Content-type:image/jpeg');

$font_size=20;
$i_width=500;
$i_height=200;

$image=imagecreate($i_width,$i_height);

imagecolorallocate($image,255,255,255);

$text_color=imagecolorallocate($image,0,0,0);

for($i=1;$i<=50;$i++){
	$x1=rand(1,100);
	$y1=rand(1,100);
	$x2=rand(1,100);
	$y2=rand(1,100);
	
	imageline($image,$x1,$y1,$x2,$y2,$text_color);	
}

imagettftext($image,$font_size,0,0,50,$text_color,'font1.ttf',$no);

imagejpeg($image);

?>