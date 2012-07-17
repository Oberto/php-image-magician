<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Round image corners
     *	Usage:	 roundCorners([radius], [bgColor])
     * 	Params:	 radius - the amount of curvature to be applied to the corner
	 *			 bgColor -  the background color of the corner (allows transparency)
     */
	$magicianObj -> roundCorners(15, 'transparent');


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_10.1.png', 100);

?>
