<?php

	require_once('../php_image_magician.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$magicianObj = new imageLib('sample_images/paradise.jpg');


	/*	Purpose: Create image reflection
     *	Usage:	 addReflection([reflection_height], [starting_transparency], [inside_image], [background_color], [stretch])
     * 	Params:	 reflection_height - the height of the reflection
     *			 starting_transparency - The amount of transparency to start with
	 *				100 = no transparency. Ideally you want this value between 0 
	 *				and 15 for best results.
     *			 inside_image - if set to 'true' then the reflection will be 
     *				placed inside the image. I.E., the image will remain the 
	 *				same size. The top of the image will become cropped. 
     *				'false' will append the reflect to the bottom of the image
     *				meaning the image height will increase by the reflection
     *				height amount.
     *			background_color - the color the transparency will fade to.
     *			stretch - If true, this will stretch the transparency mask to
	 *				cover the whole of the reflection height specified. Set to 
	 *				False by default as it can cause banding.
	 *
     */
	$magicianObj -> addReflection(75, 10, false, '#fff', true);


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$magicianObj -> saveImage('output_9.2.png', 100);

?>
