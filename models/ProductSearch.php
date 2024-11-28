<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;
use Yii;
class ProductSearch extends Model
{

    public $search;

    public function attributeLabels()
    {
        return [
            'search' => Yii::t('app', 'Поиск'),
        ];
    }

    public function rules()
    {
        return [

        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {

        $search = $params['search'] ?? null;
        $mark = $params['mark'] ?? null;
        $category = $params['category'] ?? null;
        $chip = $params['chip'] ?? null;

        $query = Products::find()
            ->with('mainImage')
            ->with('marks');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if ($search) {
            $query->andWhere(['LIKE', 'Product_Name', $search]);
        }

        if ($mark) {
            $query->innerJoinWith('marks m')
                ->andWhere(['m.Mark_Name' => $mark]);
        }

        if($category){
            $query->innerJoinWith('productCategories cat')
                ->andWhere(['cat.Category_ID' => $category]);
        }

        if($chip){
            $query->orderBy(['price' => SORT_ASC]);
        }

        return $dataProvider;
    }
}