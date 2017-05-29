<?php
	function stringSani ($filtredvar) {
		$filtredvar = filter_var($filtredvar,FILTER_SANITIZE_STRING);
		return $filtredvar;
	}	

	function sanitize ($string) // enlève les chiffres dans les strings nom, prenom.
	{
		$search = [0,1,2,3,4,5,6,7,8,9];
		$replace = "";
		$string = str_replace($search, $replace, $string);	
		return $string;
	}
    
    $filtred_submit = stringSani($_POST['submit']);

    if (isset($filtred_submit)) {
    	$uploadOk = 1;
    	$target_dir = "../storage/uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    	
    	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" && $imageFileType != "WebP") {
    		echo "Sorry, only JPG, JPEG, PNG, GIF & WEBP files are allowed.";
    		$uploadOk = 0;
		}
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}


	

			if ($_FILES["fileToUpload"]["size"] > 500000) {
		    	echo "Sorry, your file is too large.";
		    	$uploadOk = 0;
			}

	}		
?>