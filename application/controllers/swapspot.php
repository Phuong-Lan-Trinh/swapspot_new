<?php
//this controller is to create a second page including a table and google map
class Swapspot extends CI_Controller{

	private $view_data = array();

	public function __construct(){
		parent::__construct();
		$this->view_data += $this->config->item('view_data');
		$this->load->library('session');
	}

	public function index(){
		$this->view_data['header']['login_message'] = ($this->session->flashdata('message')) ? $this->session->flashdata('message'): false;
		$this->view_data['header']['logged_in'] = $this->ion_auth->logged_in();
		$this->view_data['header']['form_destination'] = 'sessions';

		Template::compose('swapspot', $this->view_data);

	}

}