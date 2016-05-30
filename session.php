<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("company", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
/*$ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);*/
$login_session =$_SESSION['login_user'];
$error='';

if (isset($_POST['submit'])) 
{
	if (empty($_POST['name']) || empty($_POST['roll']) || empty($_POST['webmail']) || empty($contact=$_POST['contact'] 
		|| empty($_POST['from_']) || empty($_POST['to_'])  )                          ) 
	{
	$error = "Please fill all the boxes.";
	}
	else
	{
		$name=$_POST['name'];
		 $roll=$_POST['roll'];
		 $webmail=$_POST['webmail'];
		 $contact=$_POST['contact'];
		 $from_=$_POST['from_'];
		 $to_=$_POST['to_'];

	    $connection = mysql_connect("localhost", "root", "");
	    $db = mysql_select_db("company", $connection);
	    $query = mysql_query("insert into data (name,roll,webmail,contact,from_,to_)  
	    	                  values('$name' , '$roll','$webmail','$contact','$from_','$to_')", $connection);
		mysql_close($connection);

		$_SESSION['user_name']=$name;
		$_SESSION['user_roll']=$roll;
        $_SESSION['user_webmail']=$webmail;
        $_SESSION['user_contact']=$contact;
        $_SESSION['user_from_']=$from_;
        $_SESSION['user_to_']=$to_;


        header("location: profile1.php");
	}
}

/*if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: input.php'); // Redirecting To Home Page
}*/



?>