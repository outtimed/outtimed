<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Html5 extends CI_Controller {

	public function Html5() {
		parent::__construct();
		$this->load->library('template');
		$this->load->library('raintpl');
	}

	public function index() {
		$this->template->write('title', 'html5');
		$this->template->add_js('html5.js');
		$this->template->parse_view('content', 'html5');
		$this->template->render();
	}

}