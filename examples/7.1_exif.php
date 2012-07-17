<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/flower.jpg');


	/*	Purpose: Get the EXIF information from your photo
     *	Usage:	 getExif
     * 	Params:	 n/a
     *	Output:	 Returns an array of your image EXIF information
     */
	$exifArray = $magicianObj -> getExif();


	// *** Array values assigned to variables
    $make = $exifArray['make'];    
    $model = $exifArray['model']; 
    $date = $exifArray['date'];
    $exposure_time = $exifArray['exposure time'];
    $aperture_value = $exifArray['aperture value'];
    $f_stop = $exifArray['f-stop'];
    $fnumber = $exifArray['fnumber'];
    $fnumber_value = $exifArray['fnumber value'];
    $iso = $exifArray['iso'];
    $focal_length = $exifArray['focal length'];
    $xposure_program = $exifArray['exposure program'];
    $etering_mode = $exifArray['metering mode'];
    $flash_status = $exifArray['flash status'];
    $creator = $exifArray['creator'];
    $copyright = $exifArray['copyright']; 

	// *** Display
	echo 'make: ' . $make . '<br />';
    echo 'model: ' . $model . '<br />';
    echo 'date: ' . $date . '<br />';

?>
