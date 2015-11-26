<html>
<title>Welcome to small world</title>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
<meta name="google-translate-customization" content="bd9e4f40f27ba763-69203f2dd5b122a1-g555086458fdd3674-11"></meta>
</head>

<body>
<div id="main">
 <header>
 
	  <div id="banner">
	    <div id="welcome">
	      <h3>Success Needs a Plan</h3>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h3>To be successful, the first thing to do is fall in love with your work.</h3>
	    </div><!--close welcome_slogan-->
		<div><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,es,fr,it,ja,ko,ru,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        </div>
		<div class="slideshow">
	      <ul class="slideshow">
            <li class="show"><img width="1300" height="500" src="image/1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
            <li><img width="1300" height="500" src="image/2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/3.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/4.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/5.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/5.png" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/7.png" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/8.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/9.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/10.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/11.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/12.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			<li><img width="1300" height="500" src="image/13.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          </ul> 
	    </div><!--close slideshow-->	
	  </div><!--close banner-->	
	</header>
	<nav>
	  <div id="menubar">
        <ul id="nav">
          <li class="current"><a href="index.html">Home</a></li>
          <li><a href="index.html">Our Work</a></li>
          <li><a href="showalljob.php">All Jobs</a></li>
		   <li><a href="projectcontact.php">Projects </a></li>
		    <li><a href="registration.php">Upload Resume</a></li>
          <li><a href="postjob.php">Post jobs</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		   <li><a href="showallresume.php">Find Resume</a></li>
        </ul>
      </div><!--close menubar-->	
    </nav>
	<div id="site_content">	
	
	<div class="sidebar_container">       
		
            <form class="form" action="showcompany.php" method="post"> 
   
    <p>
        <label for="language">Language:</label>
		<select name="language" class="select">
		<option value="0">Please Select Option</option>
<option value=english>  english</option>
<option value=japanese>  japanese</option>

</select>
		
		<!-- <input type="text" name="language" id="language"> -->
    </p>
	 <p>
        <label for="work">Work:</label><br>
		<select name="work" class="select">
		<option value="0">Please Select Option</option>
<option value="Accounting">Accounting</option>
<option value="Banking"> Banking</option>
<option value="Engineering & Manufacturing">Engineering & Manufacturing</option>
<option value="Health">Healthcare and Life Sciences</option>
<option value="HR">Human Resources</option>
<option value="IT">IT</option>
<option value="Legal" >Legal</option>
<option value="Marketing" >Marketing</option>
<option value="Procurement & Supply Chain" >Procurement & Supply Chain</option>
<option value="Sales" >Sales</option>
<option value="Secretarial" > Secretarial</option>
<option value="Teacher" > Teacher</option>
<option value="Graphic Design" > Graphic Design</option>
<option value="Journalism" > Journalism</option>
<option value="Jewellery">Jewellery jobs</option>
<option value="Yoga">Yoga job</option>
<option value="Architecture">Architecture job</option>
<option value="Baking">Baking jobs</option>
<option value="Astrology">Astrology Jobs</option>
<option value="Wine making">Wine making jobs</option>
<option value="film editing" >Film Editing Jobs</option>
<option value="Dance" >Dance jobs</option>
<option value="Visa Expat Management" >Visa Expat Management</option>
<option value="Vichle operating" >Vichle operating</option>
<option value="Cloth Design" >Cloth Design</option>
<option value="Education" > Education Jobs</option>
<option value="telemarketing" >Telemarketing Jobs</option>
<option value="Vendor management" >Vendor management Jobs</option>

</select>
        <!--<input type="text" name="work" id="work">-->
    </p>
	 <p>
        <label for="country">Country:</label><br>
		<select name="country" class="select">
		<option value="0">Please Select Option</option>
<option value="japan" >Japan</option>
<option value="india" >India</option>
<option value="korea" >korea</option>
<option value="usa"   > USA</option>
<option value="australia">Australia</option>
<option value="france">France</option>
</select>
        <!--<input type="text" name="work" id="work">-->
    </p>
	 
	<input type="submit" name="submit" class="submit" value="search"/>
   
</form>

          		
		
      </div><!--close sidebar_container-->	
	  
	   <div id="content">
	  
<?php
 /*Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 $link = mysqli_connect("localhost", "root", "", "smallworld");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM companyinfo";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
	
	while($row = mysqli_fetch_array($result)){
	
	echo "<a href=". $row['url']." id='morelinks'><div class='results' id='result'>"."</b></span><br><span id='title'> Job -". $row['title']."</span><br><span id='location'>Location -". $row['location']."<br><span id='info'>Company-". $row['info']."</span><br><span id='country'>Country-". $row['country']."</span><br> <span id='language'>Language-". $row['language']."</span><br><span id='key'>Key-". $row['work']."</span><br><span><input type='button' class='buton' value='View and apply'><a href=". $row['url']."></a></button></span><br></div><br><br></a>";
	}
     
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


 
// Close connection
mysqli_close($link); 
?>
	   </div>
	
	</div>	
	<div class="footer">
footer
</div>	
		
</div>


  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</body>
</html>