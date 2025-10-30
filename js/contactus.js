// JavaScript Document
$(document).ready(function() {
	
	   
	$('#contactus').show();
	$('#messagesent').hide();

	var messageSent = getParameterByName('captcha') || "";
	if (messageSent == "y" ) {
	  $('#messagesent').show();
	  $('#contactus').hide();
	}
	

	$('#SendMessage').click(function(e) {

		console.log("got here!");
		$('#contact-alerts').removeClass("alert alert-warning");		
		$('#contact-alerts').html("");
		$('#contactFirstName').removeClass("has-error");
		$('#contactLastName').removeClass("has-error");
		$('#contactEmail').removeClass("has-error");
		$('#contactMessage').removeClass("has-error");

		
		var emailReg = "/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i"				
		var inputContactFirstName = $('#inputContactFirstName').val();
		inputContactFirstName = inputContactFirstName.replace(/^[ ]+|[ ]+$/g,'');
		var inputContactLastName = $('#inputContactLastName').val();;
		inputContactLastName = inputContactLastName.replace(/^[ ]+|[ ]+$/g,'');
		var inputContactLastName = $('#inputContactLastName').val();;
		inputContactLastName = inputContactLastName.replace(/^[ ]+|[ ]+$/g,'');
		var inputContactEmail = $('#inputContactEmail').val();;
		inputContactEmail = inputContactEmail.replace(/^[ ]+|[ ]+$/g,'');
		var inputContactMessage = $('#inputContactMessage').val();;
		inputContactMessage = inputContactMessage.replace(/^[ ]+|[ ]+$/g,'');
		
	  
		if(inputContactFirstName == ""){
		e.preventDefault();
		$('#contactFirstName').addClass("has-error");
		$('#contact-alerts').addClass("alert alert-warning");	
		$('#contact-alerts').html("Please enter your First Name. ");
		}	
		else if(inputContactLastName == ""){
		e.preventDefault();
		$('#contactLastName').addClass("has-error");
		$('#contact-alerts').addClass("alert alert-warning");	
		$('#contact-alerts').html("Please enter your Last Name. ");
		}
		else if(!validateEmail(inputContactEmail)){
		e.preventDefault();
		$('#contactEmail').addClass("has-error");
		$('#contact-alerts').addClass("alert alert-warning");	
		$('#contact-alerts').html("Email must be in correct format. ");
		}
		else if(inputContactMessage == ""){
		e.preventDefault();
		$('#contactMessage').addClass("has-error");
		$('#contact-alerts').addClass("alert alert-warning");	
		$('#contact-alerts').html("Please enter a Message. ");
		}
	});
});