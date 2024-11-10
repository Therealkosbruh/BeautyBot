<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Video_Reviews".
 *
 * @property int $Video_ID
 * @property int $Product_ID
 * @property string $Video_URL
 *
 * @property Products $product
 */
class VideoReviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Video_Reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Product_ID', 'Video_URL'], 'required'],
            [['Product_ID'], 'integer'],
            [['Video_URL'], 'string', 'max' => 255],
            [['Product_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['Product_ID' => 'Product_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Video_ID' => 'Video ID',
            'Product_ID' => 'Product ID',
            'Video_URL' => 'Video Url',
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
