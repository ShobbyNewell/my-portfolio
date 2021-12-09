<?php
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "shoaib.hasan@ryerson.ca";
$subject = "Mail From portfolio website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@myportfoliosite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}


//redirect
header("Location:contact.html");
?>