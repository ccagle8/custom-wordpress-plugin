<?php
/*
Plugin Name: Custom Dev Plugin
Plugin URI: http://cagleco.com
Description: Theme & site customization plugin
Version: 1.0
Author: Chris Cagle
Author URI: http://cagleco.com
License:

Copyright 2020
*/

function ImplodeToEnglish($array, $sep = '&') {
    # sanity check
    if (!$array || !count ($array)) {
        return '';
		}

    # get last element
    $last = array_pop ($array);

    # if it was the only element - return it
    if (!count ($array)) {
        return $last;
		}
    return implode (', ', $array).' '.$sep.' '.$last;
}
