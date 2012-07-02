<?php


/*
	As of version 4.2.5 you can now "chain" your image processing for the same
	image. That is, you can process the same image to produce multiple different
	outputs. 

	For example, say you need 3 sizes of an image. By calling reset() after each 
	save, you can freely apply new transformations to produce the next image.

*/

	require_once('image_lib/image_lib_class.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$imageLibObj = new imageLib('sample_images/racecar.jpg');


	// *** Resize and add a border to the first	copy
	$imageLibObj -> resizeImage(300, 200, 'crop');
	$imageLibObj -> addBorder(5, '#f0f0f0');
	$imageLibObj -> addCaptionBox('b', 40, 0, '#000', 50);
	$imageLibObj -> addTextToCaptionBox('Racecar 2000');
	$imageLibObj -> saveImage('output_15.1_a.png', 100);


	$imageLibObj->reset(); # resets the image resource

	// *** Resize and add a border to the second copy
	$imageLibObj -> resizeImage(200, 100, 'crop');
	$imageLibObj -> addBorder(5, '#333');
	$imageLibObj -> saveImage('output_15.1_b.png', 100);


	$imageLibObj->reset(); # resets the image resource

	// *** Resize and add a border to the third	copy
	$imageLibObj -> resizeImage(200, 200, 'crop');
	$imageLibObj -> addBorder(5, '#333');
	$imageLibObj -> saveImage('output_15.1_c.png', 100);

?>
