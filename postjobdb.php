<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "smallworld");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_POST['title']);
$url= mysqli_real_escape_string($link, $_POST['url']);
$location= mysqli_real_escape_string($link, $_POST['location']);
$info = mysqli_real_escape_string($link, $_POST['info']);
$country = mysqli_real_escape_string($link, $_POST['country']);
$language = mysqli_real_escape_string($link, $_POST['language']);
$skill = mysqli_real_escape_string($link, $_POST['work']);

// attempt insert query execution
$sql = "INSERT INTO companyinfo (title,url,location,info,country,language,work) VALUES ('$title','$url','$location','$info','$country','$language','$skill')";
 
if(mysqli_query($link, $sql)){
    echo "Your Company Information has been added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>












