<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product_Extra".
 *
 * @property int $Product_Extra_ID
 * @property int $Product_ID
 * @property string|null $Characteristics
 * @property string|null $Kit
 * @property string|null $Offer
 * @property string|null $Delivery
 *
 * @property Products $product
 */
class ProductExtra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Product_Extra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Product_ID'], 'required'],
            [['Product_ID'], 'integer'],
            [['Characteristics', 'Kit', 'Offer', 'Delivery'], 'string', 'max' => 255],
            [['Product_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['Product_ID' => 'Product_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Product_Extra_ID' => 'Product Extra ID',
            'Product_ID' => 'Product ID',
            'Characteristics' => 'Characteristics',
            'Kit' => 'Kit',
            'Offer' => 'Offer',
            'Delivery' => 'Delivery',
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
