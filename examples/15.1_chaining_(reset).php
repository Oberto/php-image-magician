<?php


/*
	As of version 4.2.5 you can now "chain" your image processing for the same
	image. That is, you can process the same image to produce multiple different
	outputs. 

	For example, say you need 3 sizes of an image. By calling reset() after each 
	save, you can freely apply new transformations to produce the next image.

*/

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/racecar.jpg');


	// *** Resize and add a border to the first	copy
	$magicianObj -> resizeImage(300, 200, 'crop');
	$magicianObj -> addBorder(5, '#f0f0f0');
	$magicianObj -> addCaptionBox('b', 40, 0, '#000', 50);
	$magicianObj -> addTextToCaptionBox('Racecar 2000');
	$magicianObj -> saveImage('output_15.1_a.png', 100);


	$magicianObj->reset(); # resets the image resource

	// *** Resize and add a border to the second copy
	$magicianObj -> resizeImage(200, 100, 'crop');
	$magicianObj -> addBorder(5, '#333');
	$magicianObj -> saveImage('output_15.1_b.png', 100);


	$magicianObj->reset(); # resets the image resource

	// *** Resize and add a border to the third	copy
	$magicianObj -> resizeImage(200, 200, 'crop');
	$magicianObj -> addBorder(5, '#333');
	$magicianObj -> saveImage('output_15.1_c.png', 100);

?>
