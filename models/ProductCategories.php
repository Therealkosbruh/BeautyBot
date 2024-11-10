<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product_Categories".
 *
 * @property int $Product_ID
 * @property int $Category_ID
 *
 * @property Categories $category
 * @property Products $product
 */
class ProductCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Product_Categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Product_ID', 'Category_ID'], 'required'],
            [['Product_ID', 'Category_ID'], 'integer'],
            [['Product_ID', 'Category_ID'], 'unique', 'targetAttribute' => ['Product_ID', 'Category_ID']],
            [['Product_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['Product_ID' => 'Product_ID']],
            [['Category_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::class, 'targetAttribute' => ['Category_ID' => 'Category_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Product_ID' => 'Product ID',
            'Category_ID' => 'Category ID',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['Category_ID' => 'Category_ID']);
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
