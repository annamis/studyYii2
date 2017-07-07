<?php

use yii\db\Migration;

/**
 * Handles the creation of table `producer`.
 */
class m170630_131436_create_producer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('producer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'country' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('producer');
    }
}
