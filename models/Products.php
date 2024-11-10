<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Products".
 *
 * @property int $Product_ID
 * @property string $Product_Name
 * @property int $Price
 * @property int|null $OnMain
 * @property int|null $Discount
 * @property string|null $Created_At
 * @property string|null $Updated_At
 *
 * @property Categories[] $categories
 * @property Colors[] $colors
 * @property ProductMarks[] $marks
 * @property OrderDetails[] $orderDetails
 * @property ProductCategories[] $productCategories
 * @property ProductImages[] $productImages
 * @property ProductMarkAssignments[] $productMarkAssignments
 * @property VideoReviews[] $videoReviews
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Product_Name', 'Price'], 'required'],
            [['Price'], 'number'],
            [['OnMain', 'Discount'], 'integer'],
            [['Created_At', 'Updated_At'], 'safe'],
            [['Product_Name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Product_ID' => 'Product ID',
            'Product_Name' => 'Product Name',
            'Price' => 'Price',
            'OnMain' => 'On Main',
            'Discount' => 'Discount',
            'Created_At' => 'Created At',
            'Updated_At' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::class, ['Category_ID' => 'Category_ID'])->viaTable('Product_Categories', ['Product_ID' => 'Product_ID']);
    }

    /**
     * Gets query for [[Colors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColors()
    {
        return $this->hasMany(Colors::class, ['Product_ID' => 'Product_ID']);
    }

    /**
     * Gets query for [[Marks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarks()
    {
        return $this->hasMany(ProductMarks::class, ['Mark_ID' => 'Mark_ID'])->viaTable('Product_Mark_Assignments', ['Product_ID' => 'Product_ID']);
    }

    /**
     * Gets query for [[OrderDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetails::class, ['Product_ID' => 'Product_ID']);
    }

    /**
     * Gets query for [[ProductCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMainImage()
    {
        return $this->hasOne(ProductImages::class, ['Product_ID' => 'Product_ID'])
            ->where(['MainImage' => 1]);
    }

    /**
     * Gets query for [[ProductCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategories()
    {
        return $this->hasMany(ProductCategories::class, ['Product_ID' => 'Product_ID']);
    }

    /**
     * Gets query for [[ProductImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductImages()
    {
        return $this->hasMany(ProductImages::class, ['Product_ID' => 'Product_ID']);
    }

    /**
     * Gets query for [[ProductMarkAssignments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductMarkAssignments()
    {
        return $this->hasMany(ProductMarkAssignments::class, ['Product_ID' => 'Product_ID']);
    }

    /**
     * Gets query for [[VideoReviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideoReviews()
    {
        return $this->hasMany(VideoReviews::class, ['Product_ID' => 'Product_ID']);
    }
}
