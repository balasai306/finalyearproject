<?php
include("db_config.php");

mysqli_select_db("drone");
	$q="SELECT `temperature`, `speed`, `position`, `pressure`, `regdate` FROM `mysensors`";
	$rec = $con->query($q);
	if(mysqli_num_rows($rec) > 0)
	{
		while($row = $rec->fetch_assoc()){
		$user_id = $row['id'];
		$user_speed = $row['speed'];
		
		$user_tim=$row['regdate'];
		
		echo "$user_id";
		echo "$user_speed";
		echo "<br>";
		echo "$user_tim";

		echo "<br>";
	

		}
	}
	

?>

