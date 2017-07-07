<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_to_category`.
 */
class m170630_131614_create_product_to_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_to_category', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(11),
            'category_id' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product_to_category');
    }
}
