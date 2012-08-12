<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HelperMeta {

	public static function css($href) {
		echo '<link href="'.$CI->config->slash_item('base_url').$href.'" rel="stylesheet" />';
	}

	public static function js($href) {
		echo '<script src="'.$CI->config->slash_item('base_url').$value.'.js"></script>';
	}

	public static function title($title) {
		echo '<title>'.$title.'</title>';
	}
}