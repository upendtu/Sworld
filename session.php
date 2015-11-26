<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("test", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
//$data = mysql_query("SELECT * FROM upload") or die(mysql_error());
$ses_sql=mysql_query("select * from upload where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);

$login_session =$row['email'];
//Puts it into an array 

 if(isset($login_session)){
  //Outputs the image and other data 
  $profileheadline = $row['profileheadline'] ;
  $name = $row['name'] ;
  $email = $row['email'] ; 
  $phone = $row['phone'] ; 
  $experience=$row['experience'];
  $skill=$row['skill'] ;  
  $education=$row['education'];
  $country=$row['country'] ;  
  $resume=$row['resume'];
 // Echo "<a href= 'images/".$info['resume'] ." '> View Resume </a>" . "<hr>"; */
  }

if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>