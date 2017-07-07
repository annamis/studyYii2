<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property integer $price
 * @property integer $code
 * @property integer $status
 * @property integer $producer_id
 */
class Product extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price', 'code', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название товара',
            'price' => 'Цена',
            'code' => 'Код товара',
            'status' => 'Наличие товара',
            'producer_id' => 'Производитель',
        ];
    }

    public function getProducer()
    {
        return $this->hasOne(Producer::className(), ['id' => 'producer_id'])->one();
    }

    public function getProducerName()
    {
        if ($producer = $this->getProducer()) {
            return $producer->name;
        }
        return 'Не указан';
    }

    public function getProductToCategoryRelations()
    {
        return $this->hasMany(ProductToCategory::className(), ['product_id' => 'id']);
    }

    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['id' => 'category_id'])->via('productToCategoryRelations')->all();
    }
    
    public function isProductAvaliable() {
        return ($this->status === 1) ? 'Да' : 'Нет';
    }
    
    public function getProducersList() {
        return ($this->status === 1) ? 'Да' : 'Нет';
    }

}
