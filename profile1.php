<?php
include('session1.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Home Page</title>
	<link href="style.css" rel="stylesheet" type="text/css"> 
</head>
<body background="image1.jpg">
	<div id="profile">
		<div id="profile1">
			<b id="welcome">Welcome : <i><?php echo $name1; ?></i></b>
			<b id="logout"><a href="logout.php">Log Out</a></b>
			<h3> We have recorded your data as follows </h3>
			<p> Name : <?php echo $name; ?> </p>
			<p> Roll : <?php echo $roll; ?> </p>
			<p> Webmail : <?php echo $webmail; ?> </p>
			<p> Contact : <?php echo $contact; ?> </p>
			<p> From : <?php echo $from_; ?> </p>
			<p> To : <?php echo $to_; ?> </p>
			<h3 >Thanks !! </h3>
			<form action="" method="post" >
				<input name="submit1" type="submit" value="Oops!!! I want to edit "><br>
			
			</form>
					
		</div>
	</div>
</body>
</html>