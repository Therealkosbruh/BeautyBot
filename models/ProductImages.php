<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product_Images".
 *
 * @property int $Image_ID
 * @property int $Product_ID
 * @property string $Image_URL
 * @property int|null $MainImage
 *
 * @property Products $product
 */
class ProductImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Product_Images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Product_ID', 'Image_URL'], 'required'],
            [['Product_ID', 'MainImage'], 'integer'],
            [['Image_URL'], 'string', 'max' => 255],
            [['Product_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['Product_ID' => 'Product_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Image_ID' => 'Image ID',
            'Product_ID' => 'Product ID',
            'Image_URL' => 'Image Url',
            'MainImage' => 'Main Image',
        ];
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
