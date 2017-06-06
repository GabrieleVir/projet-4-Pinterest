<?php 
//	function displayImg() {
		$dir = '../../storage/uploads';
		$array_scandir = scandir($dir);
		foreach ($array_scandir as $url) {
			if ($url != '.' && $url != '..') {
?>
		<div class='grid-item'>
  			<figure class='img-l'>
  				<img class='img-size' src="../../storage/uploads/<?php echo $url;  ?>" alt="<?php echo $url; ?>">
  			</figure>
  		</div> 

<?php   	}  
		}
//	}


?>
