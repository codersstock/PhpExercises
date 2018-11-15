<?php 
function read($array){
	foreach($array as $Key => $value)
		echo $Key . " " . $value . "</br>";
}



$Marksheet = array("Name"=>"Ali Mughal","Class"=>'Nine',"Seat"=>4562);
read($Marksheet);

echo $Marksheet['Name'];



 ?>