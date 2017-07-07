<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product_to_category".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $category_id
 */
class ProductToCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_to_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'category_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'ID товара',
            'category_id' => 'ID категории',
        ];
    }
}
