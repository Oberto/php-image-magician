<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Add a watermark to your image
     *	Usage:	 addWatermark([watermark_image], [position], [padding], [transparency])
     * 	Params:	 watermark_image - the image to use as your watermark
     * 			 position - Specified by "width x height". EG: 200 x 300
     * 			 padding - Ignored when specifying exact pixel location
     * 			 transparency - Adds transparency to your watermark image. Set
	 *				value range is 0-100. 100 not being transparent at all.
     *	Output:	 Adds a watermark image 20px in and 30px down with 30% 
	 *  		 transparency
     */
	$magicianObj -> addWatermark('sample_images/monkey.png', '20 x 30', 0, 30);


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_4.3.png', 100);

?>
