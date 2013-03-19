<?php 
Class Rest extends CI_controller{
	private $view_data = array();
	public function __construct(){
		parent::__construct();
		$this->load->model('Rest_model');
	}
	// Gets all items
	//@queryaram int Limit the number of items
	//@queryaram int Offset the number of itmes
	public function index(){
		//get me the limit parameter
		$limit-$this->input->get('limit',true);
		$offset->this->input->get('offset',true);

		$query -> $this->rest_model->read_all($limit,$offset);
		if($query){
			//foreach ($query as $course) {
			// $course = output_message_mapper($course);
			//}
			}else{
				$this->output->set_status_header('404');
				$output = array(
					'error' => output_message_mapper($this->Rest_model->get_errors()),
					);
			};

		}

		var_dump($query);
		//Template::compose(false,$data,'json')
	}
	public function show(){}
}

