<?php

if(isset($_POST['step1']))
{
$fname =  $_POST['fname'];
$lname =  $_POST['lname'];
$company =$_POST['company'];
$address1 =$_POST['address1'];
$address2 =$_POST['address2'];
$city = $_POST['city'];
$state =$_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$tel = $_POST['tel'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$donation =$_POST['donation'];
$otherDonation =$_POST['otherDonation'];
$regulardonate =$_POST['regulardonate'];
$dollar =$_POST['dollar'];
$months =$_POST['months'];


header ("Location: ../second.html");
}


else if(isset($_POST['step2']))
{
$Honorarirum=$_POST['Honorarirum'];
$name =$_POST['name'];
$acknowledge =$_POST['acknowledge'];
$address3 =$_POST['address3'];
$city2 =$_POST['city2'];
$state2 =$_POST['state2'];
$zip2 = $_POST['zip2'];

 header ("Location: ../third.html");
}
else if(isset($_POST['step3']))
{
  $coname=$_POST['coname'];
  $anonymous =$_POST['anonymous'];
  $mail_gift = $_POST['mail_gift'];
  $not_mail =$_POST['not_mail'];
  $comment = $_POST['comment'];
  $contact_mail =$_POST['contact_mail'];
  $contact_pmail= $_POST['contact_pmail'];
  $contact_tel = $_POST['contact_tel'];
  $contact_fax =  $_POST['contact_fax'];
  $newsletter_mail= $_POST['newsletter_mail'];
  $newsletter_pmail =$_POST['newsletter_pmail'];
  $volunteer=$_POST['volunteer'];


 header ("Location: ../confirmation.html");
}

else if(isset($_POST['confirm']))
{
 
$to = "tamjidahmed958@gmail.com";
$headers = "From: $email \r\n";
$cc = $email;
$email_subject ="Donation Form";

  $email_body="
               First Name: $fname 
               Last Name:  $lname
               Company Name: $company 
               Address1: $address1  
               Address2: $address2 
               City: $city 
               State: $state 
               Zip: $zip 
               Country: $country
               Phone Number: $tel
               Fax Number: $fax
               Email Address: $email
               Donation Amount: $donation / $otherDonation
               Regular Donation: $regulardonate 
               Regular Donation Amount: $dollar 
               Month: $months 
               I would like to make this dontation: $Honorarirum 
               Honor name : $name 
               Acknowledge Donation to : $acknowledge 
               Honor's Address : $address3 
               Honor's City = $city2 
               Honor's Sate = $state2 
               Honor's Zip code = $zip2  
               Name, Company or Organization to appear in our publicatipns: $coname 
               I would like my gift to remain anonymous: $anonymous 
               My Employer offers a matching gift program.I will mail the matching gift form: $mail_gift 
               Please save the cost acknowledge this gift by not mailing a thank you letter: $not_mail 
               Comment: $comment 
               How may we contact you?: $contact_mail , $contact_pmail, $contact_mail, $contact_fax 
               I would like to receive newsletters and Information about special events by: $newsletter_mail, $newsletter_pmail 
               I would like to get the information about volunteering with the email: $volunteer
               ";

  $email_body = wordwrap($email_body,1000);

  mail($to, $email_subject,$email_body);
  mail($cc, $email_subject,$email_body);
  var_dump($_POST);
  header ("Location: ../thanks.html");
}

else{
  var_dump($_POST);
  echo "error occured";

}
  ?>
