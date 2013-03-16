<?php
class Schedules extends CI_Controller{
	public function __construct(){
		$this->load->library('form_validation');
		$this->load->library('session');
	}

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
			$this->schedules_model->create($user_id,$location,$timestart,$timelength);
			redirect('swapspot');

		}else{
			//failure validation
			$errors = trim(validation_errors());
			$this->form_validation->set_flashdata('message', $errors);
			redirect('home');
		}


	}

	public function update(){

	}

	public function read(){

	}

	public function delete(){

	}
}
