<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $bookid 自动增长
 * @property string $booktitle
 * @property string $bookauthor
 * @property string $bookpress
 * @property string $bookdate
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booktitle', 'bookauthor', 'bookpress', 'bookdate'], 'required'],
            [['bookdate'], 'safe'],
            [['booktitle'], 'string', 'max' => 100],
            [['bookauthor', 'bookpress'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookid' => 'ID',
            'booktitle' => '书名',
            'bookauthor' => '作者',
            'bookpress' => '出版社',
            'bookdate' => '上架日期',
        ];
    }
}
