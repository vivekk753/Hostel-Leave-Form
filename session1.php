<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$var4='';
$var5='';

if(isset($_POST['submit1']))
	{
		header("location: profile.php");
	}

$name1=$_SESSION['user_name'];
$roll1=$_SESSION['user_roll'];

$webmail1=$_SESSION['user_webmail'];
$contact1=$_SESSION['user_contact'];
$from_1=$_SESSION['user_from_'];
$to_1=$_SESSION['user_to_'];



$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("company", $connection);
$query = mysql_query("select * from data where roll='$roll1' AND name='$name1'  
	                  AND webmail='$webmail1' AND contact='$contact1' AND from_='$from_1' AND to_='$to_1'  ", $connection); 


$row = mysql_fetch_assoc($query);

$name=$row['name'];
$roll=$row["roll"];
$webmail=$row['webmail'];
$contact=$row["contact"];
$from_=$row['from_'];
$to_=$row['to_'];

?>