<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m170630_131340_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->integer(11)->notNull(),
            'code' => $this->integer(11),
            'status' => $this->integer(11),
            'producer_id' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
