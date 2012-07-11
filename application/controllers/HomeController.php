<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index() {
		$this->load->helper('html');
		$data = array();

		// Meta Info
		echo link_tag('css/bootstrap.min.css');
		echo link_tag('css/home.css');
		echo link_tag('css/bootstrap-responsive.min.css');
		echo link_tag('less/layouts.less');
		$this->load->library('javascript');
		$this->load->library('javascript/jquery');
		$data['title'] = 'Outtimed';



		$this->load->view('home', $data);
	}
}