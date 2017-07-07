<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * @author anna
 */
//ActiveRecord по умолчанию расширен от Model
class Book extends ActiveRecord
{

    public static function tableName()
    {
        //указываем с какой таблицей будет работать класс Book
        return '{{book}}';
    }

    public function rules()
    {
        return [
            [['name', 'publisher_id'], 'required'],
        ];
    }

    public function getDatePublished()
    {
        return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : 'Not set';
    }

    //описываем связь между издателем и книгой, возвращает объект класса ActiveRecord
    public function getPublisher()
    {
        //у одного экземпляра класса Book может быть один издатель
        //в массиве указано по каким  колонкам связывать модели (у Publisher это id, а у Book это publisher_id).
        //метод hasOne вернет ActiveQuery. в нем запрос уже готов и нам нужно только получить данные. У нас будет только 1 publisher, поэтому вызываем метод one(), который вернет объект.
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
    }

    public function getPublisherName()
    {
        if ($publisher = $this->getPublisher()) {
            return $publisher->name;
        }
        return 'Publisher is not set';
    }

    public function getBookToAuthorRelations()
    {
        return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
    }

    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
    }
}
