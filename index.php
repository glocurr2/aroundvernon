<?php
session_start();
$_SESSION['adminuser'] = "";
if (isset($_SESSION['fname']) &&  strlen($_SESSION['fname']) > 1) {
  $welcomeMessage = "Welcome " . $_SESSION["fname"];
}
?>
<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Around Vernon - Vernon, New Jersey</title>
  <meta name="keywords" content="vernon, vernon township, nj, new jersey, vernon nj, new jersey skiing, skiing, action park, wawayanda park, appalacchian mountains, vernon weather, hiking, parks in vernon, crystal springs, mineral hotel, spa" />
  <link href="bootstrap/css/_bootstrap.css" rel="stylesheet" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale = 1">
</head>

<body>

  <?php include 'includes/header.php' ?>


  <div class="lt-green">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="slide1"></div>
        </div>

        <div class="item">
          <div class="slide2"></div>
        </div>

        <div class="item">
          <div class="slide3"></div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div><!--/carousel-->
  </div><!--/lt-green-->


  <div class="container content">
    <div class="row">

      <div id="content">
        <h1>Vernon Township, NJ</h1>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <p>Vernon Township is the largest township within Sussex County, New Jersey, which is located within the north-west corner of the state. This particularly scenic, rural portion of NJ and holds tremendous appeal to those who appreciate the great outdoors. About an hour or so away from New York City, it is considered a part of the New York Metropolitan Area, and is home to approximately 20,000 residents.</p>

          <p>Geographically, Vernon is divided into a number of communities: Glenwood and McAfee are situated in the western part of the township, Glenwood is to the North and McAfee is to the South. In the Eastern portion is Highland Lakes. Within the Southwest section of the township is Pleasant Valley Lake.
          </p>

          <p>Other lake communities within Vernon are Barry Lakes, Cliffwood Lake, High Breeze, Lake Conway, Lake Wanda, Laurel Lake, Lake Wildwood, Lake Glenwood, Lake Panorama, Lake Pochung, Lake Wallkill, Pleasant Valley Lake, Scenic Lakes, and Vernon Valley Lake. </p>


        </div>


        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <p>Pastoral Vernon offers a wealth of outdoor activities such as hiking, fishing, skiing, mountain biking, and golfing. </p>

          <p>Two of Vernon's notable attractions are Mountain Creek, a ski resort and water park and Crystal Springs Resort's Minerals Hotel and Elements Spa. Mountain Creek skiing was formerly Great Gorge and Vernon Valley. However, Great Gorge closed in 2013 after almost 40 years in operation. Today Mountain Creek, situated within the Kittatinny Mountains, offers plenty of ski trails in the winter months, in addition to snowboarding and snow tubing. In the summer months, outdoor enthusiasts can enjoy Mountain Creek Bike Park and Mountain Creek Water Park replete with its Action Park thrill rides and amusements.</p>

          <p>Crystal Springs Mineral Hotel &amp; Spa offers accommodations with magnificent mountain views. Featured are the reknown mineral spa, a 6000 sq. ft. fitness facility containing heated pools, restaurants and fun family entertainment.</p>

        </div>



      </div><!--content-->
    </div><!--/row-->
  </div><!--/container-->




  <div class="container-footer container-fluid green">
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
  <script>
    $(document).ready(function() {
      $('.carousel').carousel({
        interval: 5000
      });
    });
  </script>
  <?php
  include 'modalssub.php';
  include 'includes/modals.php';
  ?>
</body>

</html>