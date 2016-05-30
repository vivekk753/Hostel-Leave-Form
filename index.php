<?php
	include('login.php'); // Includes Login Script
    
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>IITG Hostel Leave Form</title>
			<link href="style.css" rel="stylesheet" type="text/css">
		</head>
		<body background="image2.jpg" style="background-repeat: no-repeat; background-position: center;background-size:cover;
		                                     background-size: 100% 210%;" >

			<div id="main">

				<h1>IITG Hostel Leave Form</h1>
					<div id="login" align="center">
						<h1>Login Form</h2>
							<form action="" method="post" >

								<label>UserName :</label>
								<input id="name" name="username" placeholder="Enter Username" type="text"><br>

								<label>Password :</label>
								<input id="password" name="password" placeholder="Enter Password" type="password">

								<input name="submit" type="submit" value=" Login ">
								<input name="submit2" type="submit" value="Forgot Password!! ">
								<input name="submit1" type="submit" value=" Register"><br>
								<span><?php echo $error; ?></span>

							</form>
					</div>
						
	 
			</div>
			
		</body>
	</html>