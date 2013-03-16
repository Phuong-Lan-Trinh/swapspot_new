<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_schedules_table extends CI_Migration {
	
	public function up(){
		$this->dbforge->add_field('id');

		$this->dbforge->add_field(array(
			
			'location' 		=> array(
								'type'=> 'VARCHAR',
								'constraint'=>'100'
								),
			'timestart'	=> array(
								'type'=> 'TIME',
								),
			'timelength'	=> array(
								'type'=> 'INT',
								'constraint'=>'5'
								),
		));


		$this->dbforge->create_table('schedules');
	}

	public function down(){
		$this->dbforge->drop_table('schedules');
	}
}
