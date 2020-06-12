<?php
include("log_check.php");
?>
<!doctype html>
<html>
<head>
<title> login form</title>
<link rel="stylesheet" href="ua.css">

<script type="text/javascript">
    function submitForm1(action)
    {
        
		document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }
    
</script>
</head>

<body>
    <div class="loginbox">
	<img src="dow.jpeg" class="avatar">
	<h1 style="color:orange">Login </h1>
	<form id="form1" method="post">
	<p style="color:orange">username</p>
	<input type="text" name="username" size="30" placeholder ="enter user name" >
	<p style="color:orange">password</p>
	<input type="password" name="password" size="30" placeholder ="enter password" >
	<br>
	<br>
	<input onclick=submitForm1("log_check.php") type="submit" value="submit" > 
	</form>
	</div>
</body>
</html>