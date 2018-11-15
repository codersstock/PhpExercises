<?php 

if(isset($_POST['submit'])){


if($_FILES['img']['size']<500000){

$path_temp = $_FILES['img']['tmp_name'];
$name = $_FILES['img']['name'];
if(file_exists("img/" .$name)){
echo "File exists plz try another file";
}

else{
	move_uploaded_file($path_temp, "img/".$name);
}


}


else{
	echo "Sorry File Limit 2500 Bytes Exceeds</br>";
}


}

 ?>


<!DOCTYPE html>
 <html>
 <head>
 	<title>Img</title>
 </head>
 <body>
 <form method="POST" action="" enctype="multipart/form-data">

<input type="file" name="img">

<input type="submit" name="submit" value="Submit">

 </form>
 </body>
 </html>