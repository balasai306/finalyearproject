<?php
include("db_config.php");

mysqli_select_db("drone");
	$q="SELECT `temperature`, `speed`, `position`, `pressure`, `regdate` FROM `mysensors`";
	$rec = $con->query($q);
	if(mysqli_num_rows($rec) > 0)
	{
		while($row = $rec->fetch_assoc()){
		$user_id = $row['id'];
		$user_temp = $row['temperature'];
		
		$user_tim=$row['regdate'];
		
		echo "$user_id";
		echo "<br>";
		echo "$user_temp";
		echo "<br>";
		$user_tim=$row['regdate'];

		
	

		}
	}
	

?>

