<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Categories".
 *
 * @property int $Category_ID
 * @property string $Category_Name
 * @property string|null $Category_Image
 *
 * @property ProductCategories[] $productCategories
 * @property Products[] $products
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Category_Name'], 'required'],
            [['Category_Name', 'Category_Image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Category_ID' => 'Category ID',
            'Category_Name' => 'Category Name',
            'Category_Image' => 'Category Image',
        ];
    }

    /**
     * Gets query for [[ProductCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategories()
    {
        return $this->hasMany(ProductCategories::class, ['Category_ID' => 'Category_ID']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::class, ['Product_ID' => 'Product_ID'])->viaTable('Product_Categories', ['Category_ID' => 'Category_ID']);
    }
}
