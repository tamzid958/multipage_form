$(document).ready(function(){
 $("input[name='donation']").change(function(){
    if($(this).val()=="other")
    {
      $("#otherDonation").show(); 
    }
    else
    {
    $("#otherDonation").hide(); 
    }
    });


	$('input.bcheck').change(function(){
		if ($(this).is(':checked')) $('div.div1').show();
		else $('div.div1').hide();
    }).change();
    
    function validateForm() {
      var x = document.forms["step1"]["fname"].value;
      if (x == "" || x == null) {
        alert("Name must be filled out");
        return false;
      }
    }
    
});

