<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product_Mark_Assignments".
 *
 * @property int $Product_ID
 * @property int $Mark_ID
 *
 * @property ProductMarks $mark
 * @property Products $product
 */
class ProductMarkAssignments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Product_Mark_Assignments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Product_ID', 'Mark_ID'], 'required'],
            [['Product_ID', 'Mark_ID'], 'integer'],
            [['Product_ID', 'Mark_ID'], 'unique', 'targetAttribute' => ['Product_ID', 'Mark_ID']],
            [['Product_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['Product_ID' => 'Product_ID']],
            [['Mark_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ProductMarks::class, 'targetAttribute' => ['Mark_ID' => 'Mark_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Product_ID' => 'Product ID',
            'Mark_ID' => 'Mark ID',
        ];
    }

    /**
     * Gets query for [[Mark]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMark()
    {
        return $this->hasOne(ProductMarks::class, ['Mark_ID' => 'Mark_ID']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::class, ['Product_ID' => 'Product_ID']);
    }
}
