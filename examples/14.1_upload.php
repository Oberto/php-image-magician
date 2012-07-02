<?php

/*
 *	This is a working example. Note the two steps to update.
 * 
 * 
 */

	require_once('image_lib/upload_class.php');

	// *** Step 1 of 2) Set up the variables
	$formInputName   = 'img-upload';							# This is the name given to the form's file input
	$savePath	     = 'output3';								# The folder to save the image
	$saveName        = 'test';									# Without ext
	$allowedExtArray = array('.jpg', '.png', '.gif', '.bmp');	# Set allowed file types
	$imageQuality    = 100;
	

	// *** If the form has been submitted...	
	if (isset($_POST['submit'])) {
		$error = '';		

		// *** Create object
		$uploadObj = new imageUpload($formInputName, $savePath, $saveName , $allowedExtArray);

		// *** If everything is swell, continue...
		if ($uploadObj->getIsSuccessful()) {
#=------------------------------------------------------------------

			// *** Step 2 of 2) Add your image processing code here.

			$uploadObj -> resizeImage(100, 100, 'crop');
			$uploadObj -> greyScaleDramatic();

#=------------------------------------------------------------------		
			$uploadObj -> saveImage($uploadObj->getTargetPath(), $imageQuality);
		} else {

			// *** If there was an error, save it.
			$error = $uploadObj->getError();
		}

	}
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Upload</title>
	</head>
	<body>
		<?php
			if ($error != '') {
				echo $error;
			} else {
				if (isset($_POST['submit'])) {
					
					// *** Display
					echo '<img src="' . $uploadObj->getTargetPath() . '">';
				}
			}	
		?>
		
		<!-- The form. Not the name "img-upload" -->
		<form action="14.1_upload.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="img-upload" value="" />
			<input type="submit" value="upload" name="submit" />
		</form>
		
	</body>
</html>