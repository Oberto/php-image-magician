<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Rotate image
     *	Usage:	 rotate([direction])
     * 	Params:	 direction - choose from the below options
	 *
	 *				left - rotate the image left (90 degress)
	 *				right - rotate the image right (270 degrees)
	 *				upside - rotate the image upside down (180 degress)
     */
	$magicianObj -> rotate('left');


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_3.1.png', 100);

?>
