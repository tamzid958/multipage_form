<?php
if(isset($_POST['next']))
{
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


  $msg="Hello My Name is $fname $lname . My Company is $company which is located in $address1 . The Second address is $address2. I live in $city city, $state state, $zip zip, $country.
  My Phone number is $tel. My Fax number is $fax. My email is $email. I want to donate $other. My Custom Donate is $otherDonation. I want to donate regular=$regulardonate for $dollar dollar
  per $months";

  mail("tamjidahmed958@gmail.com","Donation",$msg);
}
?>