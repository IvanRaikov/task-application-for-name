<?php

use yii\db\Migration;

/**
 * Class m200228_173156_create_table_user
 */
class m200228_173156_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("user", [
            "id"=>$this->primaryKey(),
            "email"=>$this->string()->notNull(),
            "password"=>$this->string()->notNull(),
            "is_admin"=>$this->char(1)->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("user");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_173156_create_table_user cannot be reverted.\n";

        return false;
    }
    */
}
