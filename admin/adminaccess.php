<script type="text/javascript">
$( document ).ready(function() {

	$('#Login').click(function(e) {
		
		$('#alertsLogin').removeClass("alert alert-warning");		
		$('#alertsLogin').html("");
		$('#loginID').removeClass("has-error");
		$('#loginPassword').removeClass("has-error");
		var result2 ="";
		
		var inputLoginID = $('#inputLoginID').val();
		inputLoginID = inputLoginID.replace(/^[ ]+|[ ]+$/g,'');
		var inputLoginPassword = $('#inputLoginPassword').val();
		inputLoginPassword = inputLoginPassword.replace(/^[ ]+|[ ]+$/g,'');

		if(inputLoginID == ""){
		e.preventDefault();
		$('#loginID').addClass("has-error");
		$('#alertsLogin').addClass("alert alert-warning");
		$('#alertsLogin').html("Please Enter Your Username. ");
		}
		else if(inputLoginPassword == ""){
		e.preventDefault();
		$('#loginPassword').addClass("has-error");
		$('#alertsLogin').addClass("alert alert-warning");
		$('#alertsLogin').html("Please Enter Your Password. ");
		}
		else if (inputLoginID != "" && inputLoginPassword != "") {
   		$.get("http://www.aroundvernon.com/admin/testadminpass.php?un="+inputLoginID+"&pass="+inputLoginPassword, function(data){
			var thedata2 = jQuery.parseJSON(data);
			result2 = thedata2.result;
			if (result2 != "okay") {
				$('#alertsLogin').addClass("alert alert-warning");		
				$('#alertsLogin').html("The Username/Password Combination does not exist. Please try again.");
			 } else {
				 <?php
				 $_SESSION['adminuser'] = "yes";
		         ?>
				 $( "#LoginForm" ).submit();
			 }
			});
		e.preventDefault();
		}
});
});
</script>
