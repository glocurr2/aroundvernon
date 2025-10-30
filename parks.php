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



					<h1>Vernon Township Parks</h1>

					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div id="maps-lg">
							<p><img src="images/vernon_twp_parks.png" usemap="#Map" id="parksmap" class="box-shadow--6dp" alt="vernonparks" title="Parks Located in Vernon Twp." />
								<map name="Map" id="Map">
									<area shape="rect" coords="188,225,229,287" href="#" id="map1" alt="mountaincreek" />
									<area shape="rect" coords="336,217,383,288" href="#" id="map2" alt="wawayanda" />
									<area shape="rect" coords="229,129,269,195" href="#" id="map3" alt="maplegrange" />
									<area shape="rect" coords="181,141,225,214" href="#" id="map4" alt="vernondog" />
									<area shape="rect" coords="81,106,125,171" href="#" id="map5" alt="wallkillriver" />
								</map>
							</p>
						</div><!--/maps-lg-->
						<div id="maps-sm">
							<p><img src="images/vernon_twp_parks_sm.png" usemap="#Map-a" class="box-shadow--6dp" id="parksmap-sm" alt="vernonparks" title="Parks Located in Vernon Twp." />
								<map name="Map-a" id="Map-a">
									<area shape="rect" coords="115,138,157,188" id="map1-a" href="#" alt="mountaincreek" />
									<area shape="rect" coords="215,129,252,187" id="map2-a" href="#" alt="wawayanda" />
									<area shape="rect" coords="144,66,175,119" id="map3-a" href="#" alt="maplegrange" />
									<area shape="rect" coords="116,85,143,130" id="map4-a" href="#" alt="vernondog" />
									<area shape="rect" coords="45,67,85,123" id="map5-a" href="#" alt="wallkillriver" />
								</map>
							</p>
						</div><!--/maps-sm-->

					</div>

					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<p>Vernon Township Parks:</p>
						<p class="sm-text1"><img src="images/pin.png" alt="pin" />Click on a pin to view information about a particular park.</p>
						<div id="standard-pix">
							Fun and Adventure at<br />Vernon Township Parks<br />
							<br /><img src="images/park.jpg" class="img-responsive pic-border" alt="park-picture" title="Parks in Vernon" /><br />
							A bucolic community featuring a number<br />
							of scenic parks and fun activities.
						</div>
						<div id="info1">
							<b>Mountain Creek Park</b><br /><br />
							<img src="images/mountaincreek.png" class="img-responsive pic-border" alt="mountain-creek" title="Mountain Creek Park in Vernon" /><br />
							200 Rt. 94<br />
							Vernon, NJ 07462 <br /><br />
							Mountain Creek Skiing features 46 trails and 4 peaks for avid skiers. There are areas that accommodate families and beginners as well. <br /> <br />
							Action Park Mountain Creek features 39 acres of thrill rides, slides and pools.<br /> <br />
							Mountain Creek's Bike Park provides 40 mountain bike trails. <br />
						</div>
						<div id="info2">
							<b>Wawayanda State Park</b><br /><br />
							<img src="images/wawayanda.png" class="img-responsive pic-border" alt="wawayanda-park" title="Wawayanda Park in Vernon" /><br />
							885 Warwick Turnpike<br />
							Hewitt, NJ 07421<br /><br />
							With 35,524 acres, Wawayanda is a favorite of hikers, campers, swimmers and boaters. Wawayanda State Park includes twenty miles of the Appalachian Trail with its breathtaking scenic views. There are forty miles of marked hiking trails.
						</div>
						<div id="info3">
							<b>Maple Grange Community Park</b><br /><br />
							<img src="images/maplegrange.png" class="img-responsive pic-border" alt="maple-grange" title="Maple Grange Park in Vernon" /><br />
							36 Maple Grange Rd<br />Vernon Township, NJ 07462<br /><br />
							This 182 acre park contains three turf fields along with an open, natural grass area. There is a walking and a biking path available for leisurely and/or vigorous exercise. There is also a fun-filled playground for the kids.
						</div>
						<div id="info4">
							<b>Vernon Dog Park</b><br /><br />
							<img src="images/vernondogpark.png" class="img-responsive pic-border" alt="vernon-dog-park" title="Vernon Dog Park" /><br />
							682 County Rd 517<br />
							Vernon, NJ, US 07426<br /><br />
							This off-leash dog park features a 2 acre fenced-in grassy field. There's lots of room for dogs to run and frolic. Shaded sitting areas are available for dog owners. The park is open to the public.
						</div>
						<div id="info5">
							<b>Wallkill River National Wildlife Refuge Complex</b><br /><br />
							<img src="images/wallkillriverpark.png" class="img-responsive pic-border" alt="wallkill-river" title="Wallkill River Wildlife Refuge in Vernon" /><br />
							1547 Route 565<br />
							Sussex, New Jersey 07461<br /><br />
							Wallkill River National Wildlife Refuge conserves wildlife populations and their habitats. Many free public events are offered throughout the year &mdash; these include hiking, fishing, bird watching, and kayaking and also children's programs.<br />
							<a href="http://www.fws.gov/refuge/Wallkill_River/Events.html" target="_blank">Click here to view the events calendar.</a>
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
				for (i = 1; i < 6; i++) {
					$('#info' + i).hide();
				}
				$('#standard-pix').hide();
			}
			hideAll();
			$('#standard-pix').show();
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
			$('#map4').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info4').fadeIn(500);
			});
			$('#map5').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info5').fadeIn(500);
			});
			$('#map1-a').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info1').fadeIn(500);
			});
			$('#map2-a').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info2').fadeIn(500);
			});
			$('#map3-a').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info3').fadeIn(500);
			});
			$('#map4-a').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info4').fadeIn(500);
			});
			$('#map5-a').click(function(e) {
				e.preventDefault();
				hideAll();
				$('#info5').fadeIn(500);
			});

		});
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-71320652-1', 'auto');
		ga('send', 'pageview');
	</script>

	<?php
	include 'modalssub.php';
	include 'includes/modals.php';
	?>
</body>

</html>