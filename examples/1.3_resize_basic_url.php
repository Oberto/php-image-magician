<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open remote image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('http://www.google.co.nz/images/srpr/logo2w.png');


	/*	Purpose: Resize image
     *	Usage:	 resizeImage([width], [height])
     * 	Params:	 width - the new width to resize to
     *			 height - the new height to resize to 
     */	
	$magicianObj -> resizeImage(200, 100);


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_1.3.png', 100);

?>
