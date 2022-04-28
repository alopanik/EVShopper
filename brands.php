<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

	Note: Only needed for demo purposes. Delete for production sites.
-->
<html>
	<head>
		<title>EV Shopper</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

<html>
	<head>
		<title>EV Shopper</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- Banner -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Available Vehicles</h1>
<?php
include("connect.php");
$myid = $_GET['myid'];
$result = mysqli_query($linkID, "SELECT VIN, MODEL_NAME, LIST_PRICE, MILEAGE, CITY, RATING FROM MODEL JOIN BRAND USING (BRAND_ID) JOIN VEHICLE USING (MODEL_ID) JOIN LOCATION USING (LOCATION_CODE) JOIN RATING USING (MODEL_ID) WHERE BRAND_ID = $myid");
print("<table>");
print("<tr> <th>Model</th> <th>List Price</th> <th>Mileage</th><th>City</th><th>Rating</th></th><th>Accessories</th></tr>");
while($row = mysqli_fetch_array($result)) {
	print("<tr> <td> $row[MODEL_NAME] </td> <td> $row[LIST_PRICE] </td> <td> $row[MILEAGE] </td><td> $row[CITY] </td> <td> $row[RATING] </td><td> <a href=\"veh_acc.php?myid=$row[VIN]\">Accessories</a></td></tr>");
}
print("</table>");
mysqli_close($linkID);
?>
</div>
						<div class="image">
							<img src="images/banner.jpg" alt="" />
						</div>
					</section>

							<footer class="wrapper style1 align-center">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
							</ul>
							<p>&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

		<!-- Note: Only needed for demo purposes. Delete for production sites. -->
			<script src="assets/js/demo.js"></script>
	<body style="background-color:lightblue;">
	</body>
</html>