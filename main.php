<?php

require_once dirname(__FILE__) . '/3.6.9/securimage.php';

$img = new Securimage();

// You can customize the image by making changes below, some examples are included - remove the "//" to uncomment

$img->ttf_file        = './fonts/AHGBold.ttf';
// $img->captcha_type    = Securimage::SI_CAPTCHA_MATHEMATIC; // show a simple math problem instead of text
//$img->case_sensitive  = true;                              // true to use case sensitve codes - not recommended
$img->image_height    = 110;                                // height in pixels of the image
// $img->image_width     = $img->image_height * M_E;          // a good formula for image size based on the height
$img->image_width     = 299;
//$img->perturbation    = .75;                               // 1.0 = high distortion, higher numbers = more distortion
$img->image_bg_color  = new Securimage_Color("#FFFFFF");   // image background color
$img->text_color      = new Securimage_Color("#EF8A3D");   // captcha text color
$img->num_lines       = 5;                                 // how many lines to draw over the image
$img->line_color      = new Securimage_Color("#EC6E0E");   // color of lines over the image
//$img->image_type      = SI_IMAGE_JPEG;                     // render as a jpeg image
//$img->signature_color = new Securimage_Color(rand(0, 64),
//                                             rand(64, 128),
//                                             rand(128, 255));  // random signature color

$img->code_length = 6;

// see securimage.php for more options that can be set

if (count($argv) !== 2) {
    print("Usage: {$argv[0]} <output_dir>\n");
    exit();
}

$img->output_dir = $argv[1];
// outputs the image and content headers to the browser
$img->show();  
// alternate use:
// $img->show('/path/to/background_image.jpg');
