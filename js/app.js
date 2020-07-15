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
  if (fname.value == "")                                  
  { 
      window.alert("Please enter your name."); 
      fname.focus(); 
      return false; 
  } 
  return true;
 
}

