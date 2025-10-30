<?php
session_start();

if (isset($_SESSION['fname'])) {
	$welcomeMessage = "Welcome " . $_SESSION["fname"];
}

?>
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Around Vernon - Vernon, New Jersey | Points of Interest</title>
	<meta name="keywords" content="vernon, vernon township, nj, new jersey, vernon nj, new jersey skiing, skiing, action park, wawayanda park, appalacchian mountains, vernon weather, hiking, parks in vernon, crystal springs, mineral hotel, spa" />
	<link href="bootstrap/css/_bootstrap.css" rel="stylesheet" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
</head>

<body>


	<?php include 'includes/header.php'; ?>



	<div class="content container-fluid background-ltgreen extra-padd-btm">

		<div class="container content background-ltgreen">
			<div class="row">
				<div id="content">



					<h1>Vernon Township Points of Interest</h1>

					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div id="maps-lg">
							<p><img src="images/vernon_township_pts_interest.jpg" usemap="#interestsMap" class="box-shadow--6dp" alt="points-of-interests-map" title="Points of Interest in Vernon" />
								<map name="interestsMap" id="interestsMap">
									<area shape="rect" coords="288,137,331,188" href="#" id="map1" alt="heavenhill" />
									<area shape="rect" coords="255,182,291,240" href="#" id="map2" alt="appalachian-hotel" />
									<area shape="rect" coords="150,223,199,298" href="#" id="map3" alt="mineral-resort" />
								</map>
							</p>
						</div><!--/maps-lg-->
						<div id="maps-sm">
							<p><img src="images/vernon_township_pts_interest_sm.jpg" usemap="#interestsMap-a" id="interestMapSm" class="box-shadow--6dp" alt="points-of-interests-map" title="Points of Interest in Vernon" />
								<map name="interestsMap-a" id="interestsMap-a">
									<area shape="rect" coords="181,81,207,125" href="#" id="map1-a" alt="heavenhill" title="Heaven Hill Farm" />
									<area shape="rect" coords="148,107,179,159" href="#" id="map2-b" alt="appalachian-hotel" title="Appalachian Hotel" />
									<area shape="rect" coords="91,144,124,192" href="#" id="map3-c" alt="mineral-resort" title="Crystal Springs Mineral Resort and Spa" />
								</map>
							</p>
						</div><!--/maps-sm-->

					</div>

					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<p>Vernon Township Points of Interest:</p>
						<p class="sm-text1"><img src="images/pin-blue.png" alt="blue-pin" />Click on a pin to view information about a particular point of interest.</p>
						<div id="standard-pix">
							Enjoy Some of Vernon Township's<br />Points of Interest<br />
							<br /><img src="images/interest.png" class="img-responsive pic-border" alt="points-of-interest" title="Points of Interest in Vernon" /><br />
							The community features<br />
							points of interest for your enjoyment.
						</div>
						<div id="info1">
							<b>Heaven Hill Farm</b><br /><br />
							<img src="images/heavenhillfarm.png" class="img-responsive pic-border" alt="heavenhill-farm" title="Heaven Hill Farm" /><br />
							451 State Route 94<br />Vernon, New Jersey 07462<br />
							<br />
							Heaven Hill Farm is a garden center and farm market featuring locally grown produce. Heaven Hill also makes their own wine and offers wine tasting. There are many entertaining family events like the yearly great pumpkin festival, corn maze, and holiday train rides.
							<br />
						</div>
						<div id="info2">
							<b>Appalachian Hotel</b><br /><br />
							<img src="images/appalachianhotel.png" class="img-responsive pic-border" alt="appalachian-hotel" title="Appalachian Hotel" /><br />
							200 Route 94<br />Vernon, New Jersey<br /><br />
							The Appalachian Hotel is located near Mountain Creek ski and bike park resort. It's the perfect location for skiers.
							The hotel features underground parking, a heated outdoor pool, and outdoor hot tubs.
						</div>
						<div id="info3">
							<b>Crystal Springs Minerals Resort and Spa</b><br /><br />
							<img src="images/mineralsresort.jpg" class="img-responsive pic-border" alt="mineral-resort" title="Mineral Resort and Spa" /><br />
							Crystal Springs Resort<br />
							Sussex County, NJ<br /><br />
							Crystal Springs Mineral Resort offers spacious rooms, mountain views, and their famous spa. Amenities also include seven heated pools and a 6,000-square-foot fitness center.
						</div>
					</div>




				</div><!--content-->
			</div><!--/row-->
		</div><!--/container-->

	</div><!--container fluid-->


	<div class="container-footer container-fluid green">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>&copy; <?php echo date("Y") ?> Around Vernon</p>

			</div>


		</div><!--/row-->
	</div><!--/container-->

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/modals.js"></script>
	<script>
		$(document).ready(function() {
			function hideAll() {
				for (i = 1; i < 4; i++) {
					$('#info' + i).hide();
				}
				$('#standard-pix').hide();
			}
			hideAll();
			$('#standard-pix').show();
			$('#map1').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info1').fadeIn(500);
			});
			$('#map2').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info2').fadeIn(500);
			});
			$('#map3').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info3').fadeIn(500);
			});
			$('#map1-a').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info1').fadeIn(500);
			});
			$('#map2-b').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info2').fadeIn(500);
			});
			$('#map3-c').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info3').fadeIn(500);
			});

		});
	</script>
	<?php
	include 'modalssub.php';
	include 'includes/modals.php';
	?>
</body>

</html>