<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m170630_131528_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->string(255),
            'status' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
