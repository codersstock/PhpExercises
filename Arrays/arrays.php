<?php


$car = array("Hello",65,98,"W");



function readarray($array){
foreach($array as $x)
echo $x. "</br>";
}





array_push($car,6985);

echo "<h1>Push array Example</h1></br>";
readarray($car);

echo "<h1>array_pop() <br/> Pop means Delete Last Value From array</h1></br>";


array_pop($car);
array_pop($car);
readarray($car);











?>