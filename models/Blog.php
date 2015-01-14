<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property integer $blog_category_id
 * @property string $title
 * @property string $text
 * @property string $description
 * @property string $date_create
 * @property string $image
 *
 * @property BlogCategory $blogCategory
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blog_category_id', 'title', 'text'], 'required'],
            [['blog_category_id'], 'integer'],
            [['text'], 'string'],
            [['date_create'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
            [['image'], 'image', 'skipOnEmpty' => true],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'blog_category_id' => 'Blog Category ID',
            'title' => 'Title',
            'text' => 'Text',
            'description' => 'Description',
            'date_create' => 'Date Create',
        ];
    }

    /*
     * @inheritdoc
     * */
    public function behaviors(){
        return [
            'timestamp'=>[
                'class'=> TimestampBehavior::className(),
                'createdAtAttribute'=>'date_create',
                'updatedAtAttribute'=>false,
                'value'=>function(){return date('U');},
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogCategory()
    {
        return $this->hasOne(BlogCategory::className(), ['id' => 'blog_category_id']);
    }

    public function getImagePath(){
        return Yii::getAlias('@web') . ($this->image ? '/img/uploads/'.$this->image : '/img/unknown.jpg');
    }
}
