<?php

// CHANGE THE TWO VARIABLES BELOW

$EmailFrom = "YOUR-EMAIL@DOMAIN.COM"; //change it to your website's name.
$EmailTo = "YOUR-EMAIL@DOMAIN.COM";  //change it to your Email Adress.


$Subject = "Contact Form Submission";

$Name = Trim(stripslashes($_POST['Name']));
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message'])); 

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");


?>