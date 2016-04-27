<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// don't change if you already entered some data
$config['halalan']['pin'] = TRUE;
$config['halalan']['password_pin_generation'] = "web";
$config['halalan']['password_pin_characters'] = "alnum";
$config['halalan']['password_length'] = 6;
$config['halalan']['pin_length'] = 6;
$config['halalan']['captcha'] = FALSE;
$config['halalan']['captcha_length'] = 4;
$config['halalan']['show_candidate_details'] = FALSE;
$config['halalan']['generate_image_trail'] = FALSE;
$config['halalan']['image_trail_path'] = "/var/www/html/w/";

$config['base_url'] = "http://localhost/halalan/";
$config['encryption_key'] = "RP5CjIVoD0WeRT98GkGQ16toYxSRXnJj";

?>