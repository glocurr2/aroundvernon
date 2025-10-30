<?php
session_start();

	if ($_SESSION['adminuser'] != "yes"){
	header("Location: http://www.aroundvernon.com/test/");	
	}
 
?>
<!DOCTYPE html>
<html class="htmladmin" ng-app="maint">
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
<ul id="navbar" class="nav navbar-nav background-dkgreen-admin">
<li id="businessdirectory"><a href="directoryadmin.php"> <span class="glyphicon glyphicon-chevron-right"></span> Business Directory</a></li>
<li id="places" ><a href="classifiedsadmin.php" > <span class="glyphicon glyphicon-chevron-right"></span> Classifieds</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="http://www.aroundvernon.com" data-toggle="modal">Logout <span class="glyphicon glyphicon-log-in"></span></a></li>
</ul>
</div>
</div><!--container-fluid-->
</nav><!--end nav-->
<div id="adminbar">
Administration - Business Directory
</div>
<!--end header admin-->
<div class="content container-fluid extra-padd-btm background-ltgreen" >
<div class="container content background-ltgreen admin-width " >
<div class="row">
<div id="admincontent">
<form name="formData" novalidate>
   <div ng-view>
   </div>
</form>
  <!--/div-->
  </div><!--content-->
</div><!--/row-->
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


  <script src="js/angular.min.js"></script>
  <script src="js/angular-route.min.js"></script>
  <script src="js/controller.js?v=6"></script>
</body>
</html>