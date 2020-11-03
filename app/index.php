<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>Boilerplate for responsive Websites</title>
		<meta name="description" content="Boilerplate for responsvie Websites">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- build:css resources/css/styles.min.css -->
		<link rel="stylesheet" href="../.tmp/resources/css/helper.css">
		<link rel="stylesheet" href="../.tmp/resources/css/hamburgers.css">
		<link rel="stylesheet" href="../.tmp/resources/css/styles.css">
		<!-- endbuild -->
	</head>
	<body>
		<header>
			<div class="header__content">
				<div class="stage">
					<img src="content/assets/1.jpg" />
				</div>			
				<div>
					<a class="logo" href="javascript:void(0);">Evelyne Severing</a>
					<button class="hamburger hamburger--spin" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
						<span class="hamburger-label">Menu</span>
					</button>
					<nav data-set-max-height="true">
						<ul>
						    <li><a href="javascript:void(0);">Über mich</a></li>
						    <li><a href="javascript:void(0);">Psychologische Psychotherapie</a></li>
						    <li><a href="javascript:void(0);">Ablauf einer Psychotherapie</a></li>
							<li><a href="">Kooperation Oberberg City Trier</a></li>
							<li><a href="javascript:void(0);">Therapiekosten</a></li>
							<li><a href="">Kontakt</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>		
		<main>
			<?php include('content/html/index.html'); ?>
		</main>
		<footer class="footer">
			<ul>
				<li><a href="impressum.php">Impressum</a></li>
				<li><a href="datenschutz.php">Datenschutz</a></li>
			</ul>
		</footer>
		<script>
			var myApp = {};
		</script>
		<!-- build:js resources/js/bundle.js -->
		<script src="../.tmp/resources/js/handlebars.runtime.js"></script>
		<script src="../.tmp/resources/js/handlebars.templates.js"></script>
		<script type="module" src="resources/js/main.js"></script>
		<!-- endbuild -->
	</body>
</html>
