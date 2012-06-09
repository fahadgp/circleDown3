<?php

// CHANGE THE TWO VARIABLES BELOW

$EmailFrom = "YOUR-EMAIL@DOMAIN.COM";  //change it to your website's name.
$EmailTo = "YOUR-EMAIL@DOMAIN.COM";  //change it to your Email adress.


$Subject = "Subscription";
  
$Body = "";
$Body .= Trim(stripslashes($_POST['SuscribeEmail']));
$Body .= " :Wants to suscribe";

// send email
mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");




?>