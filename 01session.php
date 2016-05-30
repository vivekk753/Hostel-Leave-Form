<?php
	session_start();
	$error='';
	$error1='';
	$confirm='';

	if (isset($_POST['submit'])) 
	{
		if (     empty($_POST['username']) || empty($_POST['password'])  ) 
			{
			$error = "Please fill all the boxes.";
			}
		else
		{
			 $username=$_POST['username'];
			 $password=$_POST['password'];
			 

		    $connection = mysql_connect("localhost", "root", "");
		    $db = mysql_select_db("company", $connection);
            $query1 = mysql_query("select * from login where username='$username'", $connection);
			$rows = mysql_num_rows($query1);
			if ($rows == 1)
			{
               $query = mysql_query("update login set password='$password' 
		    	                     where username='$username' ", $connection);

				mysql_close($connection);
				$confirm='Your password has been changed successfully,click on log out';
			    //header("location: logout.php"); 
			} 
			else 
			{
				
			   $error="Username do not exit,please register yourselg";
			}
			


			
		}
}

/*if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: input.php'); // Redirecting To Home Page
}*/



?>s