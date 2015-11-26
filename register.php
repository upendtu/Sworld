<?php
include('login1.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Small world-Candidate Login</title>
 <link rel="stylesheet" href="css/login.css">
</head>
<body>
<form action="" method="post" class="login">
<h1>SMALL WORLD</h1>
<h1>Candidate Login</h1>
<label>Email :</label>
<input id="name" name="email" class="login-input" placeholder="example@gmail.com" type="text">
<label>Password :</label>
<input id="password" name="password" class="login-input" placeholder="**********" type="password">
<input name="submit" type="submit" class="login-submit" value=" Login ">
<span class="error"><?php echo $error; ?></span>
</form>
</body>
</html>