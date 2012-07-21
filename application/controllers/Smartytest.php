<?php
class Smartytest extends CI_Controller {
	public function index() {	
		$this->load->library('smartylib');
		
		$data = array();
		$data['title'] = 'smarty';
		$this->smartylib->display('smartytest.html', $data);
	}
}