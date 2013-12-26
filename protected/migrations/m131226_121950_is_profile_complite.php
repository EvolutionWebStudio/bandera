<?php

class m131226_121950_is_profile_complite extends CDbMigration
{
    public function up()
    {
        $this->addColumn('user', 'isComplete', 'tinyint(11) AFTER phone');
    }

    public function down()
    {
        $this->dropColumn('user', 'isComplete');
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