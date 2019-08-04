<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190804_183626_create_table_rates
 */
class m190804_183626_create_table_rates extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `Rates` (
              `rate_id` INT NOT NULL AUTO_INCREMENT,
              `rate_type` VARCHAR(255) NOT NULL,
              `rate_cost` DECIMAL(18,2) NOT NULL,
              `dlvr_days` INT NOT NULL,
              PRIMARY KEY (`rate_id`))
            ENGINE = InnoDB DEFAULT CHARSET UTF8;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("
            DROP TABLE IF EXISTS `Rates` ;
        ");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190804_183626_create_table_rates cannot be reverted.\n";

        return false;
    }
    */
}
