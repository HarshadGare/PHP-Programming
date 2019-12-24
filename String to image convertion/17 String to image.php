<?php


header('content-type: image/jpeg');

$string='Hi i am Harshad';

$strlen=strlen($string);

$font_size=20;
$image_height=ImageFontHeight($font_size);
$image_width=ImageFontWidth($font_size)* $strlen;

$image=ImageCreate($image_width,$image_height);

Imagecolorallocate($image,255,255,255);

$text_color=Imagecolorallocate($image,0,0,255);

Imagestring($image,$font_size,0,0,$string,$text_color);
Imagejpeg($image);



?>