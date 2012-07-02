<?php

	require_once('image_lib/image_lib_class.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$imageLibObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Convert image to black and white
     *	Usage:	 blackAndWhite()
     * 	Params:	 n/a
     */
	$imageLibObj -> blackAndWhite();


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$imageLibObj -> saveImage('output_2.4.png', 100);

?>
