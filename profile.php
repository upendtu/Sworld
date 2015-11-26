<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Small world</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
Name:<?php echo $name; ?> <br>
Email:<?php echo $email; ?><br>
Phone:<?php echo $phone; ?><br>
Profileheadline:<?php echo $profileheadline; ?><br>
Country:<?php echo $country; ?> <br>
Education:<?php echo $education; ?><br>
Experience:<?php echo $experience; ?><br>
Skill:<?php echo $skill; ?><br>
<?php echo "<a href= 'images/".$resume ." '> View Resume </a>" ?> <hr>
<div>
</div>
</body>
</html>