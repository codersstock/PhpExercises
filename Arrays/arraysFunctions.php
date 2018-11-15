<?php 
function read($array){
	foreach($array as $x)
		echo $x . " ";
}



$cars = array("Ali","Zohaib",45,6,9,"Khalis",5);
echo "<h2>sort()</h2>";
sort($cars);
read($cars);


echo "<h2>rsort()</h2>";
rsort($cars);
read($cars);

echo "<h2>count()</h2>";
echo count($cars);


echo "<h2>explode()</h2>";
$x = "Hello World Mujeeb";
/*explode(delimiter, string,optional limit of peices);*/
$exploded_string = explode(' ', $x,2);

foreach ($exploded_string as $x) {
	echo $x . "</br>";
}


echo "<h2>Implode()</h2>";
$Fullname = array("Tim","Berner","Lee");
$x = implode(' ',$Fullname);
echo $x;

 ?>