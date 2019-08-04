<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190804_184624_create_table_orders
 */
class m190804_184624_create_table_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `Orders` (
  `order_id` INT NOT NULL AUTO_INCREMENT,
  `clnt_id` INT NOT NULL,
  `rate_id` INT NOT NULL,
  `dlvr_date` DATE NOT NULL,
  `dlvr_address` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`order_id`),
  INDEX `clnt_id_idx` (`clnt_id` ASC) VISIBLE,
  INDEX `rate_id_idx` (`rate_id` ASC) VISIBLE,
  CONSTRAINT `clnt_id`
    FOREIGN KEY (`clnt_id`)
    REFERENCES `Clients` (`clnt_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `rate_id`
    FOREIGN KEY (`rate_id`)
    REFERENCES `Rates` (`rate_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET UTF8;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("
            DROP TABLE IF EXISTS `Orders` ;
        ");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190804_184624_create_table_orders cannot be reverted.\n";

        return false;
    }
    */
}
