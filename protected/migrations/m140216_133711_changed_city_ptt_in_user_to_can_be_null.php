<?php

class m140216_133711_changed_city_ptt_in_user_to_can_be_null extends CDbMigration
{
	public function up()
	{
        $this->alterColumn('user','city_ptt','int(11) null');
	}

	public function down()
	{
        $this->alterColumn('user','city_ptt','int(11) not null');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}