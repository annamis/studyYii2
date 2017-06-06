<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * @author anna
 */
class Order extends Model
{

    public $width;
    public $height;
    public $cameraCount;
    public $doorsCount;
    public $swingDoorsCount;
    public $color;
    public $sill;
    public $name;
    public $email;
    public static $colors = [1, 2, 3];

    const MIN_WINDOW_WIDTH = 70;
    const MAX_WINDOW_WIDTH = 210;
    const MIN_WINDOW_HEIGHT = 100;
    const MAX_WINDOW_HEIGHT = 200;
    const MIN_CAMERA_COUNT = 1;
    const MAX_CAMERA_COUNT = 3;
    const MIN_DOORS_COUNT = 1;
    const MAX_DOORS_COUNT = 5;

        public function rules()
    {
        return [
            [['width', 'height', 'cameraCount', 'doorsCount', 'swingDoorsCount', 'color', 'sill', 'name', 'email'], 'required'],
            [['width'], 'integer', 'min' => self::MIN_WINDOW_WIDTH, 'max' => self::MAX_WINDOW_WIDTH],
            [['height'], 'integer', 'min' => self::MIN_WINDOW_HEIGHT, 'max' => self::MAX_WINDOW_HEIGHT],
            [['cameraCount'], 'integer', 'min' => self::MIN_CAMERA_COUNT, 'max' => self::MAX_CAMERA_COUNT],
            [['color'], 'in', 'range' => self::$colors],
            [['doorsCount'], 'integer', 'min' => self::MIN_DOORS_COUNT, 'max' => self::MAX_DOORS_COUNT],
            ['swingDoorsCount', 'compare',
                'compareAttribute' => 'doorsCount',
                'operator' => '<=',
            ],
            [['name'], 'string'],
            [['email'], 'email'],
        ];
    }
    
    public function save()
    {
        $sql = "INSERT INTO product_order (id, width, height, camera_count, doors_count, swing_doors_count, color, sill, name, email) "
                . "VALUES (null, '{$this->width}', '{$this->height}', '{$this->cameraCount}', '{$this->doorsCount}', '{$this->swingDoorsCount}', '{$this->color}', '{$this->sill}', '{$this->name}', '{$this->email}');";
        return Yii::$app->db->createCommand($sql)->execute();
    }

    public static function SendOrderToAdmin($attributes)
    {

        $adminEmail = Yii::$app->params['adminEmail'];

        $result = Yii::$app->mailer->compose('/order/emailAdmin', ['formData' => $attributes])
                ->setFrom($adminEmail)
                ->setTo($adminEmail)
                ->setSubject('Новый заказ!')
                ->send();
        if ($result) {
            return true;
        }
    }

}
