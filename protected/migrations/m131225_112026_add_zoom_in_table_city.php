<?php

class m131225_112026_add_zoom_in_table_city extends CDbMigration
{
    public function up()
    {
        $this->addColumn('city', 'zoom', 'tinyint(11) AFTER longitude');
    }

    public function down()
    {
        $this->dropColumn('city', 'zoom');
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