$(document).ready(function(){
 $("input[name='donation']").change(function(){
    if($(this).val()=="other")
    {
      $("#otherDonation").show();
      TweenMax.from("#otherDonation", 1, {y:-10,scale:0.85});
      TweenMax.to("#otherDonation", 1, { opacity:1 , delay:2 });
    }
    else
    {
    $("#otherDonation").hide();
    }
  });

 


	$('input.bcheck').change(function(){
    if ($(this).is(':checked')) 
    {
      $('div.div1').show();
    TweenMax.from(".div1", 1, {y:-10,scale:0.85});
    TweenMax.to(".div1", 1, { opacity:1 , delay:2 });
    }
		else $('div.div1').hide();
    }).change();   
  }

  

);

function validateStep1()
{
  var fname =document.forms["step1"]["fname"];
  var lname =document.forms["step1"]["lname"];
  var company=document.forms["step1"]["company"];
  var address1=document.forms["step1"]["address1"];
  var city =document.forms["step1"]["city"];
  var state =document.forms["step1"]["state"];
  var zip =document.forms["step1"]["zip"];
  var country =document.forms["step1"]["country"];
  var email =document.forms["step1"]["email"];
  var donation =document.forms["step1"]["donation"];
  var otherDonation = document.forms["step1"]["otherDonation"];
  if (fname.value == "")                                  
  { 
      window.alert("Please enter your first name."); 
      fname.focus();
      return false; 
  } 

  if (lname.value == "")                                  
  { 
      window.alert("Please enter your Last name."); 
      fname.focus(); 
      return false; 
  } 
  if (company.value == "")                                  
  { 
      window.alert("Please enter your company name."); 
      fname.focus(); 
      return false; 
  } 

  if (address1.value == "")                                  
  { 
      window.alert("Please enter your Address."); 
      fname.focus(); 
      return false; 
  } 
  
    if(donation.value =="other")
    {
      if(otherDonation.value == "")
      {
        window.alert("Please enter your Donation Amount."); 
        otherDonation.focus(); 
        return false;    
      }
   
    }      

  window.open('./second.html', '_self');
  return true;
}