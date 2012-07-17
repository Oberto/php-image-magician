<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Add a watermark to your image
     *	Usage:	 addWatermark([watermark_image], [position])
     * 	Params:	 watermark_image - the image to use as your watermark
     * 			 position - choose from the below options
     * 
     * 				tl = top left,
     * 				t  = top (middle), 
     * 				tr = top right,
     * 				l  = left,
     * 				m  = middle,
     * 				r  = right,
     * 				bl = bottom left,
     * 				b  = bottom (middle),
     * 				br = bottom right
     * 	
     *	Output:	 Adds a watermark image to the bottom-right corner of your image
     */
	$magicianObj -> addWatermark('sample_images/monkey.png', 'br');


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_4.1.png', 100);

?>
