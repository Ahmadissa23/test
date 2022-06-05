<?php 
if(isset($_POST['submit'])){


$name = $_POST['Your Name'];
$subject = $_POST['Subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "abuissa200096@gmail.com";
$headers = "From: ".$mailFrom

$txt = "you have received an email from ".$name".\n\n".$message;
mail($mailTo,$subject,$txt,$headers);
header("location: index.html?mailsend");

  echo $contact->send();
?>
