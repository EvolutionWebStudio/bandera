<?php

class m131117_223152_inital_migration extends CDbMigration
{
	public function up()
	{
        $db = $this->getDbConnection();
        $query = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'bandera151113.sql');
        $transaction = $db->beginTransaction();
        $db->createCommand($query)->execute();
        $transaction->commit();
	}

	public function down()
	{
		echo "m131117_223152_inital_migration does not support migration down.\n";
		return false;
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