<?php
session_start();
?>
<!DOCTYPE html>
<html class="htmladmin" ng-app="maintenance">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Around Vernon | Admin</title>
<link href="../bootstrap/css/_bootstrap.css" rel="stylesheet" />
<meta http-equiv = "X-UA-Compatible"  content = "IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1">
</head>

<body>


<!--begin header admin-->
<nav class="navbar navbar-inverse navbar-inverse-admin navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#theNavBar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Around Vernon Maintenance
</a></div>

<div class="collapse navbar-collapse" id="theNavBar">
</div>
</div><!--container-fluid-->
</nav><!--end nav-->
<div id="adminbar">
Administration - Login
</div>
<!--end header admin-->
<div class="content container-fluid extra-padd-btm background-ltgreen" >
<div class="container content background-ltgreen admin-width" >
<div >&nbsp;</div>
<div id="alertsLogin" ></div>
<div id="content" class="col-lg-3 col-md-3 col-sm-4 col-xs-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-2">
<form action="directoryadmin.php" method="post" id="LoginForm">

<div class="form-group" id="loginID">
<label class="control-label" for="inputLoginID">User Name</label>
<input type="text" class="form-control smwidth" id="inputLoginID" name="inputLoginID" maxlength="35" placeholder="Enter Your User Name" />
</div><!--/loginID-->
<div class="form-group" id="loginPassword">
<label class="control-label" for="inputLoginPassword">Password</label>
<input type="password" class="form-control smwidth" id="inputLoginPassword" name="inputLoginPassword" maxlength="16" placeholder="Enter Your Password" />
</div><!--/loginPassword-->

<a href="http://www.aroundvernon.com" class="btn btn-default" role="button">Cancel</a> <button type="submit" id="Login" name="Login" class="btn btn-warning" value="Login">Login</button>
</form>
  <!--/div-->
  </div><!--content-->
</div><!--/container-->
</div><!--conent container fluid-->

<div class="clearer"></div>
<div class="container-footer container-fluid background-grey-admin">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p>&copy; 2015 Around Vernon</p>
</div>
</div><!--/row-->
</div><!--/container-->
  <script src="../js/jquery-2.1.4.min.js"></script>
<?php
include 'adminaccess.php';
?>
</body>
</html>