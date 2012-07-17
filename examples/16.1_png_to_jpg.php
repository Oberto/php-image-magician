<?php


	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/monkey.png');


	/*	Purpose: 
     *	Usage:	 
     * 	Params:	 
     *			 
     */	
	$magicianObj -> setTransparency(false);
	$magicianObj -> setFillColor('#cccccc');
	$magicianObj -> resizeImage(64, 64);


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_16.1.jpg', 100);

?>
