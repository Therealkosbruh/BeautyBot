<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product_Marks".
 *
 * @property int $Mark_ID
 * @property string $Mark_Name
 *
 * @property ProductMarkAssignments[] $productMarkAssignments
 * @property Products[] $products
 */
class ProductMarks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Product_Marks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Mark_Name'], 'required'],
            [['Mark_Name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Mark_ID' => 'Mark ID',
            'Mark_Name' => 'Mark Name',
        ];
    }

    /**
     * Gets query for [[ProductMarkAssignments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductMarkAssignments()
    {
        return $this->hasMany(ProductMarkAssignments::class, ['Mark_ID' => 'Mark_ID']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::class, ['Product_ID' => 'Product_ID'])->viaTable('Product_Mark_Assignments', ['Mark_ID' => 'Mark_ID']);
    }
}
