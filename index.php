<?php 
    require 'lib/simpleImage/claviska/SimpleImage.php';
    include 'assets/php/img-traitement.php';		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pinterest by Gab & Estelle</title>
    
    <!-- remodal css -->
    <link rel="stylesheet" href="assets/js/Remodal/dist/remodal.css">      
    <link rel="stylesheet" href="assets/js/Remodal/dist/remodal-default-theme.css">
    <!-- ends remodal css -->

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- ends css -->

</head>
<body>
    <!-- form -->
	<form class="form-l" action="" method="post" enctype="multipart/form-data">
		<!-- Faut rajouter des petites instructions pour l'user (taille max fichier et format accepté) -->
  		<input type="file" name="fileToUpload" id="fileToUpload">
  		<input type="submit" value="Upload Image" name="submit">
	</form>
    <!-- ends form -->
    
    <!-- article -->
	<article id="box" class="grid" data-isotope='{ "itemSelector": ".grid-item", "masonry": { "columnWidth": 0 } }'>
        <figure>
        <?php
            foreach ($array_scandir_mini as $key => $url):
                if ($url != '.' && $url != '..'):
                $imgSize =  getimagesize("storage/uploads/".$url);
        ?>  
        <div class='grid-item'>
            <div class= 'grid-sizer'></div>
            <a href='#modal<?php echo $key; ?>'> 
                <img class='img-size' src='storage/miniature_uploads/<?php echo $url; ?>' alt='<?php echo $url; ?>'>
            </a>
        </div>
        <div class='remodal div-size' data-remodal-id='modal<?php echo $key; ?>' role='dialog'  aria-describedby='modal<?php echo $key; ?>Img'>
            <button data-remodal-action='close' class='remodal-close' aria-label='Close'></button>
            <img id='modal<?php echo $key; ?>Img' class='modal-img' src='storage/uploads/<?php echo $url; ?>' width='<?php echo $imgSize[0]; ?>' height='<?php echo $imgSize[1]; ?>'>
            <br><br>
            <button data-remodal-action='cancel' class='remodal-cancel'>Cancel </button>
            <button data-remodal-action='confirm' class='remodal-confirm'>OK </button>
        </div>
        <?php    
                    endif;
                endforeach;
        ?>
        </figure>	      
    </article>
    <!--ends article -->


    <!-- SCRIPTS -->
    
    <!-- isotope -->
    <script src="lib/JQuerry/JQuerry.js"></script>
    <script src="assets/js/isotope.pkgd.js"></script>
        <!-- Imageloaded for isotope -->
        <script src="assets/js/imagesloaded.pkgd.js"></script>
        <!-- ends Imageloaded -->
    <script src="assets/js/isotope-preload.js"></script>
    <!-- ends isotope -->

    <!-- script pour remodal-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.4/zepto.js"></script>
    <script>window.Zepto || document.write('<script src="assets/js/Remodal/libs/zepto/zepto.min.js"><\/script>')</script>
    <script src="assets/js/Remodal/dist/remodal.js"></script>
    <!-- end script pour remodal-->    
    
    <!-- END SCRIPTS -->
</body>
</html>