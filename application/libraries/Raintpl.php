<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


include '/application/third_party/Raintpl/inc/rain.tpl.class.php';

class CI_Raintpl extends RainTPL {

	public function __construct() {
		$this->configure('tpl_dir', 'C:/wamp/www/outtimed/application/views/');
		$this->configure('cache_dir', 'C:/wamp/www/outtimed/application/third_party/Raintpl/tmp/');
	}
}
