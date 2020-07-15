<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$company =$_POST['company'];
$address1 =$_POST['address1'];
$address2 =$_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$tel = $_POST['tel'];
$fax = $_POST['fax'];
$email =$_POST['email'];
$donation = $_POST['donation'];
$otherDonation = $_POST['otherDonation'];
$regulardonate = $_POST['regulardonate'];
$dollar = $_POST['dollar'];
$months = $_POST['months'];


    $email_from = 'admin@technologea.com';

	$email_subject = "New Form submission";

    $email_body = "$company";
    

  $to = "tamjidahmed958@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);
 
?>