<?php
session_start();

if (isset($_SESSION['fname'])) {
  $welcomeMessage = "Welcome " . $_SESSION["fname"];
}

?>
<!DOCTYPE html>
<html ng-app="busDirectory">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Around Vernon - Vernon, New Jersey</title>
  <meta name="keywords" content="vernon, vernon township, nj, new jersey, vernon nj, new jersey skiing, skiing, action park, wawayanda park, appalacchian mountains, vernon weather, hiking, parks in vernon, crystal springs, mineral hotel, spa" />
  <link href="bootstrap/css/_bootstrap.css" rel="stylesheet" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale = 1">


</head>

<body>


  <?php include 'includes/header.php'; ?>


  <div class="content container-fluid background-ltgreen extra-padd-btm" ng-controller="businessDirCtrl">
    <div class="container content">
      <div id="content" class="background-ltgreen">
        <div class="row">
          <h1>Business Directory:</h1>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearer"><!--column to list businesses-->
            <div class="form-group has-feedback smwidth" style="float:left;">
              <input type="text" class="form-control input-md smwidth" ng-model="searchBox" placeholder="Search">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
            &nbsp; <button class="btn btn-warning btn" ng-click="searchBox = ''">
              Clear
            </button>

            <div class="clearer"></div>
            <div class="row">


              <div ng-repeat="business in businesses | filter:searchBox">
                <h4 class="box-shadow--2dp"> &nbsp; {{business.bname}}</h4>
                <br />
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><b><span class="glyphicon glyphicon-road"></span> </b>
                  {{business.address1}} {{business.city}} {{business.state}}
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><b><span class="glyphicon glyphicon-earphone"></span></b> {{business.phone}} </div>
                <div>&nbsp;</div>
              </div>

            </div><!--nested row-->

          </div><!--/end column to list businesses-->



          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <figure style="margin-left:40px">
              <img src="images/bakery-business.png" alt="business directory" title="business directory" class="img-responsive pic-border" style="margin-bottom:20px" />
              <figcaption>Your business can be featured here whether your a store <br>proprietor, contractor or any other professional business owner,y<br> simply use the <a href="contact.php"><b>"Contact Us"</b></a> page and ask about getting your <br>business promoted on this page.<br>
              </figcaption>
            </figure>
          </div>



        </div><!--/row-->
      </div><!--/content-->
    </div><!--/container-->
  </div><!--/container fluid-->




  <div class="container-footer container-fluid2 green clearer">
    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>&copy; <?php echo date("Y") ?> Around Vernon</p>

      </div>


    </div><!--/row-->
  </div><!--/container-->

  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    document.write("<script type='text/javascript' src='js/modals.js?v=" + Date.now() + "'><\/script>");
  </script>
  <script src="js/angular.min.js"></script>
  <script>
    angular.module('busDirectory', [])
      .controller('businessDirCtrl', BusinessDirCtrl);

    function BusinessDirCtrl($scope, $http) {
      $http.get("dirbusinesses.php")
        .then(function(response) {
          $scope.businesses = response.data;
        });
    }
  </script>
  <?php
  include 'modalssub.php';
  include 'includes/modals.php';
  ?>
</body>

</html>