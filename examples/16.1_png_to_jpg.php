<?php


	require_once('image_lib/image_lib_class.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$imageLibObj = new imageLib('sample_images/monkey.png');


	/*	Purpose: 
     *	Usage:	 
     * 	Params:	 
     *			 
     */	
	$imageLibObj -> setTransparency(false);
	$imageLibObj -> setFillColor('#cccccc');
	$imageLibObj -> resizeImage(64, 64);


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$imageLibObj -> saveImage('output_16.1.jpg', 100);

?>
