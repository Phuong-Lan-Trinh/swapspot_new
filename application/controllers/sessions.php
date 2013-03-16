<?php
class Sessions extends CI_Controller{
	

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	//Use POST HTTP method 
	public function create(){
		$email = $this->input->post('email');
		$password= $this->input->post('password');

		$this->form_validation->set_rules('email','email','trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[255]|xss_clean');

		if($this->form_validation->run() == true){
			if($this->ion_auth->login($email,$password)){
				//login success
				redirect('home');
			}else{
				//login failure	
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('home');
			}

		}else{	
				//validation failure
				$errors = trim(validation_errors());
				$this->session->set_flashdata('message', $errors);
				redirect('home');
			}		
	}

	//Use DELETE HTTP method
	public function delete(){

	}

	public function update(){

		$this->ion_auth->logout();

	}

	public function read(){

	}
}