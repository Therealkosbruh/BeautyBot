<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Stock".
 *
 * @property int $Stock_ID
 * @property string $Stock_Image
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Stock_Image'], 'required'],
            [['Stock_Image'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Stock_ID' => 'Stock ID',
            'Stock_Image' => 'Stock Image',
        ];
    }
}
