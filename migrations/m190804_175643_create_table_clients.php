<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190804_175643_create_table_clients
 */
class m190804_175643_create_table_clients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
        CREATE TABLE IF NOT EXISTS `Clients` (
          `clnt_id` INT NOT NULL,
          `clnt_name` VARCHAR(50) NOT NULL,
          `clnt_surname` VARCHAR(50) NOT NULL,
          `clnt_phone` VARCHAR(20) NOT NULL,
          PRIMARY KEY (`clnt_id`),
          UNIQUE INDEX `clientphone_UNIQUE` (`clnt_phone` ASC) VISIBLE)
        ENGINE = InnoDB DEFAULT CHARSET UTF8;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("
        DROP TABLE IF EXISTS `Clients` 
        ");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190804_175643_create_table_clients cannot be reverted.\n";

        return false;
    }
    */
}
