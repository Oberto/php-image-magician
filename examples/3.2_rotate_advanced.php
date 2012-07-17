<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Rotate image
     *	Usage:	 rotate([direction], [bgolor])
     * 	Params:	 direction - direction in degrees (clockwise)
	 *     		 bgolor	- the color of the background. Default is transparent.
     *	Output:	 Rotate image by 75 degress with the a grey background
     */
	$magicianObj -> rotate(75, '#cccccc');


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_3.2.png', 100);

?>
