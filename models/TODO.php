<?php

namespace app\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "todo".
 *
 * @property int $id
 * @property string $name
 * @property string $category_id
 * @property string $timestamp
 */
class TODO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'timestamp'], 'required'],
            [['name', 'category_id', 'timestamp'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category_id' => 'Category ID',
            'timestamp' => 'Timestamp',
        ];
    }
    
}
