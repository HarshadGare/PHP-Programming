<?php
  $path = $_SERVER['REQUEST_URI'];
// echo $path;
// this gives you /folder1/folder2/THIS_ONE/file.php 
// $folders = preg_split('/', $path);

  $folders=explode("/", $path);
 // splits folders in array
  $what_we_need = $folders[2];
  
  echo $what_we_need;

?>