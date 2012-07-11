<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function index() {
		$this->home();
	}
	
	public function home() {
		$data['title'] = 'Welcome!';
		$data['var1'] = '2';
		$data['var2'] = '8';
		
		$this->load->model('math');
		
		$data['addTotal'] = $this->math->add($data['var1'], $data['var2']);
		$data['subTotal'] = $this->math->sub($data['var1'], $data['var2']);		
		$this->load->view('home', $data);
	}
	
	public function addStuff() {
		$this->load->model('math');
		echo $this->math->add(2, 2);
	}

	public function about() {
		$data['title'] = 'About!';
		$this->load->view('view_about', $data);
	}

	public function getValues() {
		$data['title'] = 'DB';
		$this->load->model('get_db');
		$data['results'] = $this->get_db->getAll();
		$this->load->view('view_db', $data);
	}

	public function insertValues() {
		$this->load->model('get_db');
		
		$newRow = array(
			array(
				'name' => 'sue'
			),
			array(
				'name' => 'dylan'		
			)
		);
		
		$this->get_db->insert2($newRow);
		echo 'it has been added';
	}

	public function updateValues() {
		$this->load->model('get_db');

		$newRow = array(
			array(
				'id' => '3',
				'name' => 'marcus'
			),
			array(
				'id' => '4',
				'name' => 'bill'
			)
		);

		$this->get_db->update2($newRow);
		echo 'it has been updated';
	}

	public function deleteValues() {
		$this->load->model('get_db');

		$oldRow = array(
			'id' => '2'
		);
		$this->get_db->delete1($oldRow);
		echo 'it has been deleted';
	}

	public function emptyTable() {
		$this->load->model('get_db');

		$oldTable = 'test';
		$this->get_db->empty1($oldTable);
		echo 'emptied';
	}


}
?>