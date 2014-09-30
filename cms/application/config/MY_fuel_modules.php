<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Modules
|--------------------------------------------------------------------------
|
| Specifies the module controller (key) and the name (value) for fuel
*/


/*********************** EXAMPLE ***********************************

$config['modules']['quotes'] = array(
	'preview_path' => 'about/what-they-say',
);

$config['modules']['projects'] = array(
	'preview_path' => 'showcase/project/{slug}',
	'sanitize_images' => FALSE // to prevent false positives with xss_clean image sanitation
);

*********************** /EXAMPLE ***********************************/



/*********************** OVERWRITES ************************************/

$config['module_overwrites']['categories']['hidden'] = TRUE; // change to FALSE if you want to use the generic categories module
$config['module_overwrites']['tags']['hidden'] = TRUE; // change to FALSE if you want to use the generic tags module

/*********************** /OVERWRITES ************************************/

$config['modules']['news'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);

$config['modules']['sweepstake'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);

$config['modules']['promotions'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);

$config['modules']['clubs'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);

$config['modules']['partners'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);

$config['modules']['form_builder'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);

$config['modules']['brands'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);

$config['modules']['events'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
);
