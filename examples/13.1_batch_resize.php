<?php

	require_once('image_lib/image_batch_class.php');

	$batchObj = new imageBatch('sample_images', 'png, jpg');

	$batchObj -> resizeImage(150, 100, 'crop');
	$batchObj -> addText('test', 'm');
	$batchObj -> addBorder(2, '#df0e44');

	$batchObj -> save('output_5.1', 100, 'jpg');
?>
