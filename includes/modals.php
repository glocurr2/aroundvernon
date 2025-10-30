<?php 



$page = basename($_SERVER['PHP_SELF']);



?>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">

<div class="modal-content">
<form action="<?php echo($page)?>?modal=login" method="post" id="LoginForm">
<div class="modal-header">Login<button type="button" class="close" data-dismiss="modal">x</button></div>
<div class="modal-body">
<div id="alertsLogin" ></div>
<div class="form-group" id="loginID">
<label class="control-label" for="inputLoginID">User Name</label>
<input type="text" class="form-control" id="inputLoginID" name="inputLoginID" maxlength="35" placeholder="Enter Your User Name" />
</div><!--/loginID-->
<div class="form-group" id="loginPassword">
<label class="control-label" for="inputLoginPassword">Password</label>
<input type="password" class="form-control" id="inputLoginPassword" name="inputLoginPassword" maxlength="16" placeholder="Enter Your Password" />
</div><!--/loginPassword-->
</div><!--/modal-body-->
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> <button type="submit" id="Login" name="Login" class="btn btn-warning" value="Login">Login</button>
</div>
</form>
</div><!--/modal-content-->

</div><!--/modal-dialog-->
</div><!--/Modal-->


<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-md">
<form action="<?php echo($page)?>?modal=signup" method="post" id="SignupForm">
<div class="modal-content">
<div class="modal-header signup" >Sign Up with Around Vernon!<button type="button" class="close" data-dismiss="modal">x</button></div>
<div class="modal-body">
<div id="alerts" ></div>
<div class="col-md-5 col-lg-5">
<div class="form-group" id="firstName">
<label class="control-label" for="inputFirstName">First Name</label>
<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" maxlength="35" placeholder="Enter Your First Name"/>
</div><!--/firstName-->
</div>
<div class="col-md-5 col-lg-5">
<div class="form-group" id="lastName">
<label class="control-label" for="inputLastName">Last Name</label>
<input type="text" class="form-control" id="inputLastName" name="inputLastName" maxlength="35" placeholder="Enter Your Last Name" />
</div><!--/lastName-->
</div>
<div class="col-md-5 col-lg-5">
<div class="form-group" id="email">
<label class="control-label" for="inputEmail">Email Address</label>
<input type="email" class="form-control" id="inputEmail" name="inputEmail" maxlength="60" placeholder="Enter Your Email Address" />
</div><!--/email-->
</div>
<div class="col-md-5 col-lg-5 clearer" >
<div class="form-group" id="town">
<label class="control-label" for="inputTown">Town</label>
<input type="text" class="form-control" id="inputTown" name="inputTown" maxlength="45" placeholder="Enter Your Town" />
</div><!--/town-->
</div>
<div class="col-md-5 col-lg-5">
<div class="form-group" id="state">
<label class="control-label" for="inputState">State</label>
<select class="form-control" id="inputState" name="inputState">
<option value="" selected="selected">Choose State</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
</div><!--/state-->
</div>
<div class="col-md-5 col-lg-5">
<div class="form-group" id="userID">
<label class="control-label" for="inputUserID">Choose Your Username</label>
<input type="text" class="form-control" id="inputUserID" name="inputUserID" maxlength="16" placeholder="Enter a Username" />
</div><!--/user id-->
</div>
<div class="col-md-5 col-lg-5 clearer">
<div class="form-group" id="password">
<label class="control-label" for="inputPassword">Choose Your Password</label>
<input type="password" class="form-control" id="inputPassword" name="inputPassword" maxlength="16" placeholder="Enter a Password" />
</div><!--/password-->
</div>
<div class="col-md-5 col-lg-5">
<div class="form-group" id="reenterPassword">
<label class="control-label" for="inputReenterPassword">Re-enter Password</label>
<input type="password" class="form-control" id="inputReenterPassword" maxlength="16" placeholder="Re-Enter Your Password" />
</div><!--/password-->
</div>
</div><!--/modal-body-->
<div class="modal-footer clearer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> <button type="submit" id="Signup" name="Signup"  class="btn btn-warning" value="Signup">Submit</button>
</div>
</div><!--/modal-content-->
</form>
</div><!--/modal-dialog-->
</div><!--/Modal-->



<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-body centertxt" >
Thank you for Signing Up!
</div><!--/modal-body-->
</div><!--/modal-content-->
</div><!--/modal-dialog-->
</div><!--/Modal-->

<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-body centertxt">
<?php 
if ($_SESSION['login_correct'] == true) {
	echo "Welcome to Around Vernon!";
} else {
	echo "<span style='color:red'>Your Username/Password is incorrect. Please try again.</span>";
}

?>

</div><!--/modal-body-->
</div><!--/modal-content-->
</div><!--/modal-dialog-->
</div><!--/Modal-->


