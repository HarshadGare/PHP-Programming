<?php

			$str="Hi i am crazy developer. & Programmer.";
			echo $str."<br><br>";
			
			echo '<br><b>Using substr_replace($str,"lazy",8,5) function </b><br>';
			$str_rep=substr_replace($str,'lazy',8,5);
			echo $str_rep;
			
			echo '<br><br><br><b>Using str_replace("crazy","lazy",$str) function</b><br>';
			$str_r=str_replace('crazy','lazy',$str);
			echo $str_r;
			
			
			echo '<br><br><br><b>Using str_replace($find,$replace,$str) function $find and $replace are array to find and replace multipale string</b><br><br>';
			
			$find=array('am','developer','&');
			$replace=array(' ','programer','and');
			$str_r=str_replace($find,$replace,$str);
			echo $str_r;
			
			
?>