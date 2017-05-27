<?php

use yii\db\Migration;

/**
 * Handles dropping city from table `employee`.
 */
class m170525_094907_drop_city_column_from_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('employee', 'city');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('employee', 'city', $this->string());
    }
}
