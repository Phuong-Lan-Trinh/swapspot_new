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
				'site_title' => 'SWAPSPOT',
				'form_destination' => 'session',
			),
		);

		Template::compose('index', $this->view_data);
	        
	}
		
	public function	login_form(){
		if($this->ion_auth->logged_in()){
				redirect('home');
			}
			$this->view_data['header']['login_messages']=true;
			$login_messages = ($this->session->flashdata('message')) ? $this->session->flashdata('message') : false;

			Template::compose('index', $this->view_data);

	}


	public function login(){
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$this->form_validation->set_rules('email','email','trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('password','password','trim|required|min_length[6]|max_length[20]|xss_clean');

		if($this->form_validation->run() == true){

			if($this->ion_auth->login($email, $password)){

			//login successful
				redirect('/');
				echo 'welcome to the page';
			}else{

				//login not successful
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect($this->input->server('HTTP_REFERER'));
			}

		}else{

			//validation not successful
			$errors = trim(validation_errors()); 
			$this->session->set_flashdata('message', $errors);

			redirect($this->input->server('HTTP_REFERER'));	
			echo 'validation failed';
		}
	}


	public function SWAPSPOT_submit(){
		$location= $this->input->post('location');
		$timestart= $this->input->post('timestart');
		$timelength= $this->input->post('timelength');

		$this->form_validation->set_rules('location','location','trim|required|min_length[5]|max_length[200]|xss_clean');
		$this->form_validation->set_rules('timestart','timestart','trim|required|min_length[0]|max_length[9]|xss_clean');
		$this->form_validation->set_rules('timelength','timelength','trim|required|min_length[5]|max_length[200]|xss_clean');
	 
		if($this->form_validation->run() == true){
			redirect('swapspot'); //need to create swapspot file//
		}else{
			$this->session->set_flashdata('messange', $this->ion_auth->errors());
			}
	}

}

