<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Promocodes".
 *
 * @property int $Promocode_ID
 * @property string $Promocode
 * @property int $Discount
 * @property string|null $Expires_At
 * @property int|null $Usage_Limit
 * @property int|null $Used_By
 *
 * @property OrderHistory[] $orderHistories
 * @property Users $usedBy
 */
class Promocodes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Promocodes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Promocode', 'Discount'], 'required'],
            [['Discount', 'Usage_Limit', 'Used_By'], 'integer'],
            [['Expires_At'], 'safe'],
            [['Promocode'], 'string', 'max' => 50],
            [['Promocode'], 'unique'],
            [['Used_By'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['Used_By' => 'User_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Promocode_ID' => 'Promocode ID',
            'Promocode' => 'Promocode',
            'Discount' => 'Discount',
            'Expires_At' => 'Expires At',
            'Usage_Limit' => 'Usage Limit',
            'Used_By' => 'Used By',
        ];
    }

    /**
     * Gets query for [[OrderHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderHistories()
    {
        return $this->hasMany(OrderHistory::class, ['Promocode_ID' => 'Promocode_ID']);
    }

    /**
     * Gets query for [[UsedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsedBy()
    {
        return $this->hasOne(Users::class, ['User_ID' => 'Used_By']);
    }
}
