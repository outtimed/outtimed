<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function Home() {
		parent::__construct();
		$this->load->library('template');
		$this->load->library('raintpl');
		// HEAD
		$this->template->title('Home');
		$this->template->add_js('home.js');
		$this->template->add_css('home.css');
	}

	public function index() {
		// BODY
		




		// DISPLAY
		$this->template->parse_view('content', 'home');
		$this->template->render();
	}

}