<?php 
	
		$dir_img = 'storage/uploads';
		$array_scandir = scandir($dir_img);
		foreach ($array_scandir as $key => $url_mini) {
			if ($url_mini != '.' && $url_mini != '..') {
				try {
		  			// Create a new SimpleImage object
					  $image = new \claviska\SimpleImage();

					  // Création de miniature 
					  $image
					    ->fromFile("storage/uploads/$url_mini")        // load image.jpg
					    ->resize(320)                        		  // resize to 320x200 pixels
					    ->toFile("'../../storage/miniature_uploads/".$url_mini, 'image/png');     // convert to PNG and save a copy to new-image.png
					
					  // And much more! 💪
				} catch(Exception $err) {
					  // Handle errors
					  echo $err->getMessage();
				}
			} 
		}

		//va prendre les images miniaturisé et les mettre dans l'index.php
		$dir = 'storage/miniature_uploads';
		$array_scandir_mini = scandir($dir);
		

	
?>

