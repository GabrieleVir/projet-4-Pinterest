<?php
    if (isset($_POST['submit'])) {
        include 'assets/php/scans_upload2.php';
        $uploadOk = 1;
        $target_dir = "storage/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION); 

        //fprendre que les images avec ce format: jpg, jpeg, png, gif, WebP
        if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "WebP" ) {
            $msg_format_erreur = "Le format de votre image n'est pas accepté. (Formats acceptés : jpg, jpeg, png, gif, WebP." . "<br>";
            echo $msg_format_erreur;
            $uploadOk = 0;
        } else {
            $msg_format = "Votre image est bien une image.";
            echo $msg_format . "<br>";         
        }

        //Petit bonus par rapport à la taille 
        $max_size = 4194304; // 4MB
        if($_FILES["fileToUpload"]["size"] > $max_size ) {
            $msg_taille_erreur = "Votre image est trop lourde, veuillez utiliser une image de taille inférieure à 4MB."."<br>";
            echo $msg_taille_erreur;
            $uploadOk = 0;
        } 
        if($uploadOk === 0) {
            echo "Désolé, votre image n'a pas pu être mise en ligne.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "Votre image ". basename( $_FILES["fileToUpload"]["name"]). " a bien été mise en ligne.";
            } else {
                echo "Désolé, il y a eu un problème lors de la mise en ligne de votre image.";
            }    
        }
    }
	
?>