<?php 
Class Users_session extends CI_controller{
	private $view_data = array();
	public function __construct(){
	
		parrent::__construct();
		$this->load->library('s')
	}
}
