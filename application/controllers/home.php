<?php

use Guzzle\Url\Mapper;

class Home extends CI_Controller {

	private $view_data = array();

	public function __construct(){
	
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		
		$this->form_validation->set_error_delimiters(
			'<p>',
			'</p>'
		);
	}

	public function index(){
        
        $variable='Look I am a variable';
        FB::log($variable);

        if($this->ion_auth->logged_in()){
        	redirect('home');
        }
		
		$this->view_data += array(
			'header' => array(
				'header_message' => 'hello'
			),

			'footer' => array(
				'footer_message' => 'bye bye'
			),
			'form_destination' =>$this->router->fetch_class() .'/validation'
			);
		Template::compose('index', $this->view_data);
        
    }

    public function validation(){

    	$this->form_validation->set_rules('email','email','trim|required');
    	$this->form_validation->set_rules('password','password','trim|required');

    	if($this->form_validation->run() == true){
    		echo '<h2>Welcome to SWAPSOT!</h2>';
    	
    	}else{

    	}
    }


	
	
	
		// function execInBackground($cmd) {
			// if (substr(php_uname(), 0, 7) == "Windows"){
				// pclose(popen("start /B ". $cmd . ' > D:/wamp/www/dirlist.txt', "r")); 
				// echo 'lol';
			// }
			// else {
				// exec($cmd . " > /dev/null &");
				
			// }
		// } 
		
		// execInBackground('tracert -w 10 accettura.com');
		
		//$lol = popen('cd', 'r');
		//var_dump(stream_get_contents($lol));
		//pclose($lol);
	
}
	


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */