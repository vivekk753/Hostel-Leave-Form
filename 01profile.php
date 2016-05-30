<?php
include('01session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register Page</title>
		<link href="style.css" rel="stylesheet" type="text/css"> 
	</head>
	
<body background="image1.jpg">
	<div id="profile" >
	<b id="logout"><a href="logout.php">Log Out</a></b>
    
        <div id="profile1">
            <h3> Enter you OLD username and NEW password.</h3>
			<form action="" method="post">
				<label>Username:</label>
				<input id="_1" name="username"  placeholder="Enter Username" type="text"><br>
				<label>Password :</label>
				<input id="_2" name="password" placeholder="Enter Password" type="password"><br>
				<input id="_3" name="submit" type="submit" value=" submit "><br>
				<span><?php echo $error; ?></span>
				<span><?php echo $confirm; ?></span>
			</form>
		</div>

	</div>



</body>
</html>