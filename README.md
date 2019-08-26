# php-image-magician


Image manipulation at it's finest.

home page @ http://phpimagemagician.oberto.co.nz/


### Features
* Quick and easy resize - Resize to landscape, portrait, or auto
* Easy crop
* Add text
* Watermarking
* Shadows and reflections
* Transparency support
* Read EXIF metadata
* Borders, Rounded corners, Rotation
* Filters and effects
* All operations (eg. filter, effects) can be stacked
* Image sharpening
* Image type conversion
* BMP support
* PSD reader support (limited)


### Resize &amp; Crop Example
						
    // Include PHP Image Magician library
    require_once('php_image_magician.php');

    // Open JPG image
    $magicianObj = new imageLib('racecar.jpg');

    // Resize to best fit then crop
    $magicianObj -> resizeImage(100, 200, 'crop');

    // Save resized image as a PNG
    $magicianObj -> saveImage('racecar_small.png');
			
      

### Watermark Example

    // Include PHP Image Magician library
    require_once('php_image_magician.php');

    // Open JPG image
    $magicianObj = new imageLib('racecar.jpg');

    // Add watermark to bottom right, 50px from the edges
    $magicianObj -> addWatermark('monkey.png', 'br', 50);

    // Save watermarked image as a PNG
    $magicianObj -> saveImage('racecar_small.png');      
    
    
Check out the [documentation](http://phpimagemagician.oberto.co.nz/docs.html) for more examples.

### Contributions
If you'd like to contribute features or bug fixes to the project, please be my guest.

If you found this code useful, or maybe it saved you a tonne of time, and would like to contribute in other ways, all donations go towards hosting and future developement.

**BTC:** 1BacitzfnJashc2DYKeiAQzr9tWH5en9uM  
**ETH:** 0x13E9C47b3158583271a471Cb76C8ef6285c925Eb  
**LTC:** LWcauH9vxcGt3mJGgBWfxCYXniLLSWESyu 

