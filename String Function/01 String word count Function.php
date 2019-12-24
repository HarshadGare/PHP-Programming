<?php
		$str="Hi i am crazy developer. & Programmer.";
		echo $str."<br>";
		
		$str_ln=strlen($str);
		echo "<br>String Lenght is :- <b>".$str_ln;
		
		$str_w_count=str_word_count($str);
		echo "</b><br><br><b>String word count:- </b>".$str_w_count;
		
		echo'<br><br><b>Using str_word_count($str,1) :- </b>';
		print_r(str_word_count($str,1));

		echo'<br><br><b>Using str_word_count($str,2) :- </b>';
		print_r(str_word_count($str,2));
		
		echo'<br><br><b>Using str_word_count($str,1,".&") :- </b>';
		print_r(str_word_count($str,1,".&"));
		
		echo'<br><br><b>Using str_word_count($str,2,".&") :- </b>';
		print_r(str_word_count($str,2,"&."));
		
		
		
?>