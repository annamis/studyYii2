<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "producer".
 *
 * @property integer $id
 * @property string $name
 * @property integer $country
 */
class Producer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{producer}}';
    }

    /**
     * @inheritdoc
     */
//    public function rules()
//    {
//        return [
//            [['name'], 'required'],
//            [['country'], 'integer'],
//            [['name'], 'string', 'max' => 255],
//        ];
//    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название производителя',
            'country' => 'Страна производителя',
        ];
    }
    
//     public function getName()
//    {
//        if ($this->name) {
//            return $this->name;
//        }
//        return 'Производитель не указан';
//    }
}
    

    
        
    
        
