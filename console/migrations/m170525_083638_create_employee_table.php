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
            'first_name' => $this->string(255)->notNull(),
            'last_name' => $this->string(255)->notNull(),
            'middle_name' => $this->string(255),
            'email' => $this->string(255)->unique()->notNull(),
            'birth_date' => $this->date(),
            'hire_date' => $this->date()->notNull(),
            'experience_date' => $this->date(),
            'city' => $this->integer(11),
            'position' => $this->string(255)->notNull(),
            'department' => $this->integer(11),
            'id_code' => $this->string(255)->notNull()->unique(),
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
