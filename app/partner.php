<?php
	$id = 'partner';
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>Evelyne Severing | Psychotherapie in Trier</title>
		<meta name="description" content="Evelyne Severing | Approbierte Psychologische Psychotherapeutin in Trier" />
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
				<div>
					<a class="logo" href="./index.php">Evelyne Severing</a>
					<button class="hamburger hamburger--spin" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
						<span class="hamburger-label">Menu</span>
					</button>
					<?php include('./includes/navigation.php'); ?>
				</div>
				<div class="stage">
					<picture>
						<source media="(max-width: 767px)" srcset="content/assets/small/5.jpg">
						<source media="(min-width: 768px)" srcset="content/assets/5.jpg">
						<img src="content/assets/5.jpg" alt="">
					</picture>
				</div>
			</div>
		</header>
		<main>
			<?php include('./content/html/partner.html'); ?>
		</main>
		<?php include('./includes/footer.php'); ?>
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
