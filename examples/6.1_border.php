<?php

	require_once('image_lib/image_lib_class.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$imageLibObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Add a border to the inside of your image
     *	Usage:	 addBorder([size], [color])
     * 	Params:	 size - Size in pixels
     *			 color - the color of the boder	(optional. Default is white)
     *	Output:	 This will add a 5px gray border to your image
     */
	$imageLibObj -> addBorder(5, '#cccccc');


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$imageLibObj -> saveImage('output_6.1.png', 100);

?>
