<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_order`.
 */
class m170601_111245_create_product_order_table extends Migration
{
    /**
     * @inheritdoc
     */
public function up()
    {
        $this->createTable('product_order', [
            'id' => $this->primaryKey(),
            'width' => $this->integer(11)->notNull(),
            'height' => $this->integer(11)->notNull(),
            'camera_count' => $this->integer(11)->notNull(),
            'doors_count' => $this->integer(11)->notNull(),
            'swing_doors_count' => $this->integer(11)->notNull(),
            'color' => $this->integer(11)->notNull(),
            'sill' => $this->integer(11),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product_order');
    }
}
