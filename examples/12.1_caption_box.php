<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */

	$magicianObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Add a caption box to your image. The intended purpose is to 
	 *			 allow text to be easier to read by placing it on a caption box
     *	Usage:	 addCaptionBox([side], [thickness], [padding], [color], [transparency])
     * 	Params:	 side - the side of the image to display the box. The options are:
     *
     *     			t = top of the image
     *				r = right side of the image
     *				b = bottom of the image
     *				l = left side of the image
     *
     *			thickness - how wide you want the caption box, in pixel.
	 *			padding - distance from the caption box to the image edge.
     *			color - the color of the caption box
     *			transparency - how transparent the caption box is. 0-100. 
	 *				100 being not transparent at all.
     */
	$magicianObj -> addCaptionBox('b', 40, 0, '#000', 50);
	$magicianObj -> addText('Racecar 2000', 'b', 14);


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_12.1.png', 100);

?>
