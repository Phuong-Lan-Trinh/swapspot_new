<?php
class Migration_Add_user_id_column extends CI_Migration{
	public function up(){
		$field1 = array(
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '255'
				)
			);
		$this->dbforge->add_column('schedules', $field1);
	}

	public function down(){
		$this->dbforge->drop_column('schedules', 'user_id');

	}
}