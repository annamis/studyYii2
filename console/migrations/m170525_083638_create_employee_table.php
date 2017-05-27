<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m170525_083638_create_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'last_name' => $this->string(255)->notNull(),
            'first_name' => $this->string(255)->notNull(),
            'city' => $this->string(255)->notNull(),
            'birth_date' => $this->date()->notNull(),
            'hire_date' => $this->date(),
            'experience_date' => $this->date(),
            'position' => $this->string(255),
            'department' => $this->integer(11),
            'code' => $this->integer(11)->notNull()->unique(),
            'email' => $this->string(255)->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employee');
    }
}
