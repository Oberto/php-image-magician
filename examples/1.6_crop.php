<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Resize image
     *	Usage:	 resizeImage([width], [height], [resize type], [sharpen])
     * 	Params:	 width - the width to crop to
     *			 height - the height to crop to
     *			 crop type 
     *  
     */	
	
	$magicianObj -> cropImage(150, 150, 'br');
	
	
	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_1.6.jpg', 100);


?>
