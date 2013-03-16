<?php
class Accounts extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function create(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->form_validation->set_rules('email','email','trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('password','password','trim|required|min_length[5]|max_length[255]|xss_clean');

		if($this->form_validation->run() == true){

			//sucessful validation
			$this->ion_auth->register($email,$password);
			$this->ion_auth->login($email,$password);
			redirect('home');

		}else{
			//failure validation
			$errors = trim(validation_errors());
			$this->session->set_flashdata('message', $errors);
			redirect('home');
		}


	}
	public function delete(){
		
	}

	public function update(){

		
	}

}