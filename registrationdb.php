<?php   
//This is the directory where images will be saved 
   $target = "resume/";  
   $target = $target . basename( $_FILES['resume']['name']);   
 //This gets all the other information from the form  
   $name=$_POST['name']; 
   $email=$_POST['email']; 
   $phone=$_POST['phone']; 
   $resume=($_FILES['resume']['name']);
   $experience=$_POST['experience'];
   $skill=$_POST['skill'];  
   $profileheadline=$_POST['profileheadline']; 
   $education=$_POST['education'];
   $country= $_POST['country'];
   //$password=$_POST['password'];
   
  
   
  
  
   
  
   
   // Connects to your Database  
    mysql_connect("localhost", "root", "") or 
    die(mysql_error()) ; 
     mysql_select_db("test") or 
	 die(mysql_error()) ;  
	 //Writes the information to the database 
	   mysql_query("INSERT INTO `upload` VALUES ('$name', '$email', '$phone', '$resume', '$experience', '$skill', '$profileheadline', '$education' , '$country')") ;  
	   //Writes the photo to the server 
	    if(move_uploaded_file($_FILES['resume']['tmp_name'], $target))  
		{   
		//Tells you if its all ok  
		echo "<b style='color:green;'>" ."The file ". basename( $_FILES['resume']['name']). " has been uploaded sucessfully, and your information has been added to the directory" ."</style><br>"; 
		echo "<b>Click here to search a job</b>----" . "<a href='index.html'>Search Jobs</a></li>" ; }  
		else 
		{   
		//Gives and error if its not  
		
		echo "<b style='color:red;'>" . "Sorry, there was a problem uploading your Resume. Please Go Back and Upload your resume Again" ."</style>"; 
		echo "<a href='registration.php'>Upload Resume</a></li>" ;
		} 
		

		 
		

		 ?>
		 
		 
		