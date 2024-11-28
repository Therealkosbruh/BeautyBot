<?php

namespace app\models;

use yii\base\Model;

class CartForm extends Model
{
    public $email;
    public $phone;
    public $city;
    public $street;
    public $house;
    public $apartment;
    public $comment;
    public $paymentMethod;
    public $promocode;

    public function rules()
    {
        return [
//            [['phone'], 'string', 'min' => 8],
                [['email'], 'email'],
            [['phone'], 'required'],
            [['city'], 'required'],
            [['street'], 'required'],
//            [['comment'], 'string'],
//            [['promocode'], 'string'],
//            [['city', 'street', 'house', 'apartment'], 'safe'],
//            [['city', 'street', 'house', 'apartment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'phone' => 'Телефон',
            'city' => 'Город',
            'street' => 'Улица',
            'house' => 'Дом',
            'apartment' => 'Квартира',
            'comment' => 'Комментарий'
        ];
    }
}