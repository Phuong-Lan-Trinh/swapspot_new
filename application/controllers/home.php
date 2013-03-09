<?php

class Home extends CI_Controller {

	private $view_data = array();

	public function __construct(){
	
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');

	}

	public function index(){
		
		$this->view_data += array(
			'header' => array(
				'header_message' => 'hello'
			),
			'footer' => array(
				'footer_message' => 'bye bye'
			)
		);

		//echo 'SHIT!';

		Template::compose('index', $this->view_data);
        
    }
	
}