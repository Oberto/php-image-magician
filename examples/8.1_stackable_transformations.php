<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/racecar.jpg');


	/*
		It's also possible to "stack" transformations. The following is one
		example of many possibilities	
	 */


	// *** Resize image
	$magicianObj -> resizeImage(200, 200, 'crop');

	// *** Add greyscale
	$magicianObj -> greyScaleDramatic();

	// *** Add white border
	$magicianObj -> addBorder(25, '#fff');

	// *** Add black border
	$magicianObj -> addBorder(5, '#000');

	// *** Add white border
	$magicianObj -> addBorder(1, '#fff');

	// *** Add watermark (bottom, 40px from boarder, 50% opacity)
	$magicianObj -> addWatermark('sample_images/bear.png', 'tr', 30, 20);

	// *** Add text
	$magicianObj -> addText('Racer', 'b', 10, '#000', 10);



	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_8.1.bmp', 100);

?>
