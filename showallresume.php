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
       <!-- <input type="text" name="country" id="country"> -->
    </p>
	<input type="submit" name="submit" class="submit" value="search"/>
   
</form>

          		
		
      </div><!--close sidebar_container-->	
	  
	   <div id="content">
	   
	   <div class="mailjobseeker">
	
   <?PHP
require_once('popup contact/popup-contactform.php');
?>

<head>
      <link rel='STYLESHEET' type="text/css" href="popup contact/popup-contact.css">
</head>
<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">

<a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'><h5 style="color:#000033; position:fixed; margin-left:650px; margin-top:-300px; font-size:30px;">Mail to Right Candidate</h5></a>


<?PHP
require_once('popup contact/contactform-code.php');
?>

</body>
</div> <!-----close mailjobseeker--->
	
	
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
 echo "<div id='results'>";
  Echo "<span id='title'><b>profile headline:--</b> ".$info['profileheadline'] . "<br></span>";
  Echo "<span id='resume'><b>Name:---------------------</b> ".$info['name'] ."<br></span> ";
  Echo "<span id='resume'><b>Email:---------------------</b> ".$info['email'] . " <br></span>"; 
  Echo "<span id='resume'><b>Phone:---------------------</b> ".$info['phone'] . "<br></span>"; 
  Echo "<span id='resume'><b>Experience:---------------</b> ".$info['experience'] . "years" . "<br></span> ";
  Echo "<span id='resume'><b>Skills:----------------------</b> ".$info['skill'] . " <br></span>";  
  Echo "<span id='resume'><b>Education:----------------</b> ".$info['education'] . "<br></span> ";
  Echo "<span id='resume'><b>Country:-------------------</b> ".$info['country'] . " <br></span>";  
  Echo "<span id='link'>-------<b><a href= 'resume/".$info['resume'] ." '> <button>View Resume </button></a>-----------------------------------------------------------------------------------------------------------------------------------</span>" ;
 

   echo "</div>";
 }
   ?>

 </div> 
 

 
</div>	

	
	<div class="footer">
<div class="content">
          
		  <h3 align="center">contact us on our number-07016251211</h3>
		  <h5 align="center"><b>OR click here to write a email</b><br><a href="contact.php">Contact Us</a></h5>
		  <h6 align="center">All Rights reserved @ crafts 2015</h6>
		  </div>
</div>	
		
</div>


  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</body>
</html>