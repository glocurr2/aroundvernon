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
	<meta name="description" content="This Around Vernon page displays monthly horoscopes, famous quotes and more...">
</head>
<link href="bootstrap/css/_bootstrap.css" rel="stylesheet" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale = 1">


</head>

<body>

	<?php include 'includes/header.php'; ?>


	<div class="content container-fluid background-ltgreen extra-padd-btm">
		<div class="container content">

			<div id="content" class="background-ltgreen">

				<div class="row">
					<h1>Monthly Horoscopes: <span id="theMonthName" class="sm-text1"></span> &nbsp; </h1>
					<span class="sm-text1" style="margin-left:15px">ENJOY THESE MONTHLY HOROSCOPES AS A GUIDE FOR YOUR CELESTRIAL LIFESTYLE!</span>
					<div class="sm-text1"></div>
					<div id="col1" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearer"><!--column to list businesses-->
						<div id="aquarius" class="zodiacdiv">
							<div class="zodiac-img">
								<img src="images/zod-aquarius.png" class="img-responsive">
							</div>
							<div>
								<b>Aquarius</b><br /><br />

							</div>
						</div>
						<div id="pisces" class="zodiacdiv">
							<div class="zodiac-img">
								<img src="images/zod-pisces.png" class="img-responsive">
							</div>
							<div>
								<b>Pisces</b><br /><br />
							</div>
						</div>
						<div id="aries" class="zodiacdiv">
							<div class="zodiac-img">
								<img src="images/zod-aries.png" class="img-responsive">
							</div>
							<div>
								<b>Aries</b><br /><br />
							</div>
						</div>
						<div id="taurus" class="zodiacdiv">
							<div style="float:left; width:20%; padding-right:10px">
								<img src="images/zod-taurus.png" class="img-responsive">
							</div>
							<div>
								<b>Taurus</b><br /><br />
							</div>
						</div>
						<div id="gemini" class="zodiacdiv">
							<div class="zodiac-img">
								<img src="images/zod-gemini.png" class="img-responsive">
							</div>
							<div>
								<b>Gemini</b><br /><br />
							</div>
						</div>
						<div id="cancer" class="zodiacdiv">
							<div class="zodiac-img">
								<img src="images/zod-cancer.png" class="img-responsive">
							</div>
							<div>
								<b>Cancer</b><br /><br />
							</div>
						</div>
					</div>


					<div id="col3" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div id="leo" class="zodiacdiv">
							<div style="float:left; width:20%; padding-right:10px">
								<img src="images/zod-leo.png" class="img-responsive">
							</div>
							<div>
								<b>Leo</b><br /><br />
							</div>
						</div>
						<div id="virgo" class="zodiacdiv">
							<div style="float:left; width:20%; padding-right:10px">
								<img src="images/zod-virgo.png" class="img-responsive">
							</div>
							<div>
								<b>Virgo</b><br /><br />
							</div>
						</div>
						<div id="libra" class="zodiacdiv">
							<div class="zodiac-img">
								<img src="images/zod-libra.png" class="img-responsive">
							</div>
							<div>
								<b>Libra</b><br /><br />
							</div>
						</div>
						<div id="scorpio" class="zodiacdiv">
							<div class="zodiac-img">
								<img src="images/zod-scorpio.png" class="img-responsive">
							</div>
							<div>
								<b>Scorpio</b><br /><br />
							</div>
						</div>
						<div id="sagittarius" style="clear:both; padding: 10px 0px">
							<div class="zodiac-img">
								<img src="images/zod-sagittarius.png" class="img-responsive">
							</div>
							<div>
								<b>Sagittarius</b><br /><br />
							</div>
						</div>
						<div id="capricorn" style="clear:both; padding: 10px 0px">
							<div class="zodiac-img">
								<img src="images/zod-capricorn.png" class="img-responsive">
							</div>
							<div>
								<b>Capricorn</b><br /><br />
							</div>
						</div>

					</div><!--/row-->

					<div class="clearer">&nbsp;</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h1>Quote of the Day:</h1>
							<div id="quoteart" class="fleft">
								<img src="images/quill.png" width="276" height="274" class="img-responsive" alt="quote of the day">
							</div>
							<div id="quotearea">
								<div id="quoteofday">
								</div>
								<div id="quotecredit">
								</div>
							</div><!--/quotearea-->
						</div><!--col-lg-12 col-md-12 col-sm-12 col-xs-12-->
					</div><!--row-->

				</div><!--/content-->
			</div><!--/container content-->
		</div><!--/container fluid-->
	</div>

	<div class="container-footer container-fluid2 green clearer">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>&copy; <?php echo date("Y") ?> Around Vernon</p>

			</div>


		</div><!--/row-->
	</div><!--/container-->

	<script src="js/jquery-2.1.4.min.js"></script>
	<script>
		document.write("<script type='text/javascript' src='js/modals.js?v=" + Date.now() + "'><\/script>");
	</script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
		document.write("<script type='text/javascript' src='/js/astrology.js?v=" + Date.now() + "'><\/script>");
	</script>
	<?php
	include 'modalssub.php';
	include 'includes/modals.php';
	?>
</body>

</html>