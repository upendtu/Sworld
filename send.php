<?php
$to= $_POST['to'];
$from= $_POST['from'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$body = "$message";
$from_new="From:$from";

mail($to,$subject,$body,$from_new);
echo "message sebt ! <a href='email.php'> click here </a> to send another mail";
?>