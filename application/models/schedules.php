<?php
class Schedules extends CI_Model{
	public function __construct(){
		parent::__construct()
	}

	public function create(){
		$data = array(
			'user_id'	=> $user_id,
			'location'	=> $location,
			'timestart'	=> $timestart,
			'timelength' => $timelength
			);
		$this->db->insert('schedules',$data);
	}
					
	return $this->db->insert('schedules', $data);	
	}

	public function update(){

	}

	public function read(){

	}

	public function delete(){

	}
}