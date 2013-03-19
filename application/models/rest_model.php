<?php
class Rest_model extends CI_Model{
	public function __construct(){
		parent::__construct();

		//here's some dummy data, that would in the database...
		$this->dummy_data = array(
			array(
				'id' => '2',
				'name' => 'Roger',
				'power' => 'OVER 10000'
				),
			array(
				'id' => '3',
				'name' => 'Roqerger',
				'power' => 'OVER 1af0000'
				),
			array(
				'id' => '4',
				'name' => 'Rogqeqrer',
				'power' => 'OVER 100adf00'
				),
			array(
				'id' => '8',
				'name' => 'Rogeaefar',
				'power' => 'OVER 14000'
				),
			
			);
	}
	public function read_all(){
		// YOU WOULD NEED TO DO db->sesect everthing 
		//then find out how many there is, and then iterate through it, 
		//and return it ...
		foreach($this->dummy_data as $row){
			$data[]=array(
				'id' => $row['id'],
				'name' => $row['name'],
				'power' => $row['power'],
				);
		}
	}
}