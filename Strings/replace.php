<?php 

if(isset($_POST['submit'])){



$str = str_replace($_POST['find'],$_POST['replace'] , $_POST['subject']);

echo $str;

}
 ?>


 <html>
 <head>
 	<title></title>
 	<style type="text/css">

input {
	margin:10px;
	display: block;
}

 	</style>
 </head>
 <body>
 <form action="" method="POST">
<input type="text" placeholder="Find Text" name="find">    
<input type="text" placeholder="Replace with" name="replace">
<textarea cols="40" rows="7" name="subject"></textarea>
 <input type="submit" name="submit">

 </form>
 </body>
 </html>