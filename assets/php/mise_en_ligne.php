<?php 
	include 'scans_upload.php'; 
	require '../../lib/simpleImage/claviska/SimpleImage.php';	


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mise en lignes des images by Gab & Estelle</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
</head>
<body>
	<section class="grid" data-isotope='{ "itemSelector": ".grid-item", "masonry": { "columnWidth": 200 } }'>
		<?php displayImg(); ?>
	</section>
</body>
</html>