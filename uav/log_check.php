<?php

include("db_config.php");

mysqli_select_db("drone");

if (isset($_POST['username'])) {
	$email = $_POST['username'];
    $password=$_POST['password'];
	
    $q = "select * from log where USERNAME='".$email."' and PASSWORD='".$password."';";
	$rec = $con->query($q);
	if(mysqli_num_rows($rec) > 0)
	{
		while($row = $rec->fetch_assoc()){
		$user_id = $row['ID'];
		$user_email = $row['USERNAME'];
		$Pass=$row['PASSWORD'];
		
		echo "$user_id";
		//echo "$user_email";
		//echo "$Pass";
		
		echo "..";//Authentication Sucess
		echo "<br>";
		include("about.html");

		}
	}
	else 
	{
		header("Location: /uav/index.php?msg=Invalid Username/Password!");
	}
	 
}
?>
