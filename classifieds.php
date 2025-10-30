<?php
session_start();

if (isset($_SESSION['fname'])) {
    $welcomeMessage = "Welcome " . $_SESSION["fname"];
}

?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Around Vernon - Vernon, New Jersey</title>
    <meta name="keywords" content="vernon, vernon township, nj, new jersey, vernon nj, new jersey skiing, skiing, action park, wawayanda park, appalacchian mountains, vernon weather, hiking, parks in vernon, crystal springs, mineral hotel, spa" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
</head>

<body>


    <?php include 'includes/header.php'; ?>


    <div class="content container-fluid background-ltgreen extra-padd-btm">


        <div class="container content">
            <div class="row">

                <div id="content" class="background-ltgreen">
                    <h1>Upcoming Feature &ndash; Classified Ads!</h1>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p>AroundVernon.com will be offering FREE classified ads. Categories can include "For Sale", "Services", "Help Wanted", "Real Estate" and more. If you have suggestions for additional categories, please let us know by filling out the <a href="contactus.php">"Contact Us"</a> form. Classified Ads will automatically run for 3 weeks after the date they have been entered.
                        </p>

                        <p>AroundVernon.com wishes to offer helpful services to the people of the township of Vernon and surrounding communities who Sign Up with this website. Be sure to check back within the next couple months AroundVernon.com in the coming months for this special free and useful feature!</p>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p><img src="images/classifieds.png" alt="picture classified adds" title="free classified ads" class="img-responsive pic-border" /></p>
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
    <script src="js/modals.js"></script>
    <?php
    include 'modalssub.php';
    include 'includes/modals.php';
    ?>
</body>

</html>