<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170524_080504_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'text' => $this->text(),
            'status' => $this->integer(3),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
