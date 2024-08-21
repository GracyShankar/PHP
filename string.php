<?php
$str = "this is a string";
echo $str . "<br>";
$str_len = strlen($str);


// concatination operation by using dot(.) in the string . 

echo " the lenght of the string is :".$str_len.".Thankyou ";

// number of word in the string
echo "the number of word  of the string is :".str_word_count($str) . ".Thankyou<br>";

// reversing a string word by word 
echo "the reversed string is : ".strrev($str) . ".Thankyou<br>";

// postion of the string is
echo "the searing for is in the  string is : ".strpos($str , "is") .".Thankyou<br>";

// replace string
echo "the replacing string is :".str_replace("is" , "at " , $str) . ".Thankyou<br>";

//echo $str_len;
?>