<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Colors".
 *
 * @property int $Color_ID
 * @property int $Product_ID
 * @property string $Color_Name
 * @property string $Color_Code
 * @property string|null $Color_image
 *
 * @property OrderDetails[] $orderDetails
 * @property Products $product
 */
class Colors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Colors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Product_ID', 'Color_Name', 'Color_Code'], 'required'],
            [['Product_ID'], 'integer'],
            [['Color_Name'], 'string', 'max' => 50],
            [['Color_Code'], 'string', 'max' => 10],
            [['Color_image'], 'string', 'max' => 255],
            [['Product_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['Product_ID' => 'Product_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Color_ID' => 'Color ID',
            'Product_ID' => 'Product ID',
            'Color_Name' => 'Color Name',
            'Color_Code' => 'Color Code',
            'Color_image' => 'Color Image',
        ];
    }

    /**
     * Gets query for [[OrderDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetails::class, ['Color_ID' => 'Color_ID']);
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
