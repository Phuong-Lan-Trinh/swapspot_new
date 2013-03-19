<?php

class Home extends CI_Controller {

	private $view_data = array();

	public function __construct(){
		
			parent::__construct();

			$this->view_data += $this->config->item('view_data');
			$this->load->library('session');
			$this->load->helper('form');
	}

	//Use GET HTTP method
	public function index(){

		$this->view_data['header']['login_message'] = ($this->session->flashdata('message')) ? $this->session->flashdata('message'): false;
		$this->view_data['header']['logged_in'] = $this->ion_auth->logged_in();
		$this->view_data['header']['form_destination'] = 'sessions';

		$this->view_data['submit_message'] = ($this->session->flashdata('submit_message')) ? $this->session->flashdata('submit_message'): false;
		
		$this->view_data['submit_destination'] = 'schedules';// need to see routing problem? do you have a desni
		
		Template::compose('index', $this->view_data); 


		

		
	}

}


