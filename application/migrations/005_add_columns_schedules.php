<?php
class Migration_Add_columns_schedules extends CI_Migration{

	public function up(){

		$field = array(
			'longitude' => array(
				'type' => 'FLOAT'),
			'latitude'	=> array(
				'type' => 'FLOAT'),
			);
		$this->dbforge->add_column('schedules',$field);
		
	}

	public function down(){
		$this->dbforge->drop_column('schedules', 'longitude');
		$this->dbforge->drop_column('schedules', 'latitude');

	}
}