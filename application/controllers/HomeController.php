<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index() {
		$this->load->helper('html');
		$data = array();

		// Meta Info
		echo link_tag('web/css/bootstrap.min.css');
		echo link_tag('web/css/home.css');
		echo link_tag('web/css/bootstrap-responsive.min.css');
		echo link_tag('web/less/layouts.less');
		$data['title'] = 'Outtimed';



		$this->load->view('home', $data);
	}
}