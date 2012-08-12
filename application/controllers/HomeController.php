<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function HomeController() {
		parent::__construct();
		$this->load->library('template');
		$this->load->library('raintpl');
	}

	public function index() {

		$this->template->add_css('web/css/autocomp.css');
		$this->template->add_css('web/css/bootstrap.min.css');
		$this->template->add_css('web/css/home.css');
		$this->template->add_css('web/css/bootstrap.responsive.min.css');
		$this->template->add_js('web/js/jquery.js');
		$this->template->add_js('web/js/bootstrap-typeahead.js');
		$this->template->add_js('web/js/autocomp.js');
/*

      // Write to $title
      $this->template->write('title', 'Welcome to the Template Library Docs!');
      
      // Write to $content
      $this->template->write_view('content', 'home');
      
      // Write to $sidebar
      $this->template->write('sidebar', 'Whatzup');
      
      // Render the template
      $this->template->render();

*/
      $this->raintpl->assign('title', 'Hi');
      $this->template->parse_view('content', 'home');
      $this->template->render();

	}
}