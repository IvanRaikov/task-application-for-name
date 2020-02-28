<?php

use yii\db\Migration;

/**
 * Class m200228_173401_create_table_name
 */
class m200228_173401_create_table_nick_name extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("nick_name", [
            "id"=>$this->primaryKey(),
            "name"=>$this->string()->notNull(),
            "user_id"=>$this->integer(),
            "status"=>$this->char(1)->defaultValue(0)->notNull(),
            "status_update"=>$this->dateTime()
        ]);
        $this->addForeignKey("fk_nickname_user", "nick_name", "user_id", "user", "id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey("fk_nickname_user", "nick_name");
        $this->dropTable("nick_name");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_173401_create_table_name cannot be reverted.\n";

        return false;
    }
    */
}
