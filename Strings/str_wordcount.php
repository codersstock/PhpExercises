<?php 

$str = "hello world mujeeb here world i'm world here.";
echo $str . "</br>";

//echo str_word_count($str);//1st overload

$kr = str_word_count($str,1,'.');//2nd overload

foreach ($kr as $xy=>$y) {
echo ($y) . "</br>";
}

echo "</br></br>";

$kr = str_word_count($str,2,'.');
foreach ($kr as $xy=>$y) {
echo ($xy . " " . $y) . "</br>";
}


 ?>