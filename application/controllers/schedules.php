<?php
// this controller is to create a form validation for the submit form in the body of the home pate

class Schedules extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	//this function is to validate the information in the body of the home page

	public function create(){
		$location = $this->input->post('location');
		$timestart = $this->input->post('timestart');
		$timelength = $this->input->post('timelength');

		$this->form_validation->set_rules('location','location', 'trim|required|min_length[5]|max_length[255]|xss_clean');
		$this->form_validation->set_rules('timestart', 'timestart', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('timelength','timelength', 'trim|required|min_length[5]|max_length[30]|xss_clean');

		if($this->form_validation->run() == true){
			//successful validation
			$user_id = $this->ion_auth->get_user_id();
			redirect('swapspot');		

		}else{
			//failure validation
			$errors = trim(validation_errors());
			$this->session->set_flashdata('submit_message', $errors);
			redirect('home');
			
		};

	}

	public function show($id){

		}

	public function update($id){

	}

	public function delete($id){

	}
}
