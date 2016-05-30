<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Home Page</title>
	<link href="style.css" rel="stylesheet" type="text/css"> 
</head>
<body background="image1.jpg">
	<div id="profile" >
	<!-- <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b> -->
	<b id="logout"><a href="logout.php">Log Out</a></b>
	<!-- <h2 > Please enter your details </h2> -->
    
        <div id="profile1">
			<form action="" method="post">
				<label>Name :</label>
				<input id="_1" name="name"  placeholder="Enter Name" type="text"><br>
				<label>Roll :</label>
				<input id="_2" name="roll" placeholder="Enter Roll no." type="number"><br>
				<label>Webmail :</label>
				<input id="_3" name="webmail" placeholder="Enter Webmail" type="text"><br>
				<label>Contact :</label>
				<input id="_4" name="contact" placeholder="Enter Contact" type="number"><br>
				<label>From : like 2016-03-29</label>
				<input id="_5" name="from_" placeholder="From" type="text"><br>
				<label>To : like 2016-05-16</label>
				<input id="_6" name="to_" placeholder="To" type="text"><br>

				<input id="_7" name="submit" type="submit" value=" submit ">
				<span><?php echo $error; ?></span>
			</form>
		</div>

	</div>



</body>
</html>