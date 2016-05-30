<?php
	session_start();
	$error='';
	$error1='';
 
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
                $error="Username already exit,please try another";
			} 
			else
			{
				$query = mysql_query("insert into login (password,username)  
		    	                  values('$password','$username')", $connection);

				mysql_close($connection);
			   $error="Successfully registered !!! Click on log out to exit.";
			}

			
		}
}

/*if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: input.php'); // Redirecting To Home Page
}*/



?>s