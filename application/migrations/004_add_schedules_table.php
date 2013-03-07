<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_schedules_table extends CI_Migration {
	
	public function up(){

		$field = array(
						'location' 		=> array(
											'type'=> 'VARCHAR',
											'constraint'=>'100'),
						'time start'	=> array(
											'type'=> 'TIME',
											'constraint'=>'6'),
						'time length'	=> array(
											'type'=> 'INT',
											'constraint'=>'5'),
			);

		$this->dbforge->add_field($field);
		$this->dbforge->create_table('schedules');
	}

	public function down(){
		$this->dbforge->drop_table('schedules');
	}
}