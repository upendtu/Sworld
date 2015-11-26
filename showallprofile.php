<?php  
// Connects to your Database  
mysql_connect("localhost", "root", "") or 
die(mysql_error()) ; 
 mysql_select_db("test") or 
 die(mysql_error()) ;   
 //Retrieves data from MySQL  
 $data = mysql_query("SELECT * FROM upload") or die(mysql_error());
//Puts it into an array 
while($info = mysql_fetch_array( $data ))
 {
 
  //Outputs the image and other data 
  Echo "<b>Headline:</b> ".$info['profileheadline'] . "<br>";
  Echo "<b>Name:</b> ".$info['name'] . "<br> ";
  Echo "<b>Email:</b> ".$info['email'] . " <br>"; 
  Echo "<b>Phone:</b> ".$info['phone'] . "<br>"; 
  Echo "<b>Experience:</b> ".$info['experience'] . "<br> ";
  Echo "<b>Skills:</b> ".$info['skill'] . " <br>";  
  Echo "<b>Education:</b> ".$info['education'] . "<br> ";
  Echo "<b>Country:</b> ".$info['country'] . " <br>";  
  Echo "<a href= 'images/".$info['resume'] ." '> View Resume </a>" . "<hr>"; 
 }
   ?>

