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
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- Banner -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Added!</h1>
<?php

function addQuotes($str){
    return "'$str'";
}

$vin= addQuotes($_POST['vin']);
$mid= $_POST['mid'];
$list= $_POST['list'];
$mile= $_POST['mile'];
$loc= $_POST['loc'];



include("connect.php");
$insert = mysqli_query($linkID, "INSERT INTO VEHICLE VALUES ($vin, $mid, $list, $loc, $mile)");
print("Successfully added vehicle.");
$result = mysqli_query($linkID, "SELECT * FROM VEHICLE");
print("<table>");
print("<tr> <th>VIN</th><th>Model</th> <th>List Price</th> <th>Location</th><th>Mileage</th></tr>");
while($row = mysqli_fetch_array($result)) {
	print("<tr> <td> $row[VIN] </td><td> $row[MODEL_ID] </td> <td> $row[LIST_PRICE] </td> <td> $row[LOCATION_CODE] </td><td> $row[MILEAGE] </td> </tr>");
}
print("</table>");
mysqli_close($linkID);
?>
</p>

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
