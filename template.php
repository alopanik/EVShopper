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
							<h1>Welcome to EV Shopper! </h1>
							<p class="major">Your one-stop shop for purchasing certified pre-owned electric vehicles. </p>
							<p>
							<p class="minor">Check out our available inventory:</p>
							<p>
<?php
include("connect.php");
$result = mysqli_query($linkID, "SELECT * FROM BRAND");
print("<table>");
print("<tr> <th> Brand </th>");
while($row = mysqli_fetch_array($result)) {
	print("<tr> <td> <a href=\"brands.php?myid=$row[BRAND_ID]\">$row[BRAND_NAME]");
}
print("</table>");
mysqli_close($linkID);
?>

						<p>
						<p class="minor">Or feel free to <a href="search.php">search.</a></p>
						<p>
						<p>
						<p class="minor">Need Help? Click <a href="help_agent.php">here.</a></p>
						<p>
							<br>
							<br>
						<p>
						<p class="minor">Employees click <a href="employees.php">here.</a></p>
						<p>
</p>
</p>

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
