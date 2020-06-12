<?php
include("config.php");
$con =mysqli_connect('localhost','root','123456','drone');
if($con)
{
	echo "...";	
}
else
{ 
   echo "<br>connection failed";
}
?>
 