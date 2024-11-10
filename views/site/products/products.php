<?php

/** @var yii\web\View $this */
/** @var $dataProvider yii\data\ActiveDataProvider */
/** @var $searchModel app\models\ProductSearch */
/** @var $categories app\models\Categories */

use app\models\ProductSearch;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Luxpods';
?>

<div class="container">
    <section class="productSlider">
        <?php
        foreach ($categories as $category) {
            echo Html::a(Html::img($category->Category_Image, ['alt' => $category->Category_Name]), ['products/index', 'category' => $category->Category_ID]);
        }
        ?>
    </section>
    <div class="productFilterHeading flexRow">
        <h2>Наши товары</h2>
        <div class="productFilter">
            <button><img src="/web/img/icons/interface/searchNormal.svg" alt="search"></button>
            <button><img src="/web/img/icons/interface/filter.svg" alt="filter"></button>
        </div>
    </div>
    <?php if($dataProvider->models){ ?>
    <section class="productCards">
        <?php foreach ($dataProvider->models as $product) {?>
            <div class="card flexColumn">
                <div class="productMarks">
                    <?php if($product->productMarkAssignments){?>
                        <?php foreach ($product->marks as $mark){?>
                            <?= Html::a($mark->Mark_Name, ['products/index', 'mark' => $mark->Mark_Name], ['class' => $mark->Mark_Name.'Mark', 'style' => 'text-transform: uppercase;'])?>
                        <?php }?>
                    <?php }?>
                </div>
                <img src="<?= $product->mainImage->Image_URL?>" alt="<?= $product->Product_Name?>" />
                <?php if($product->Discount) {?>
                    <div style="margin-left: 0">
                        <span class="productPrice" style="margin-right: 5px"><?= number_format($product->Price - ($product->Price * ($product->Discount / 100)), 0, ',', ' ') ?> ₽</span>
                        <del class="productPrice priceDiscount"><?= number_format($product->Price, 0, ',', ' ') ?> ₽</del>
                    </div>
                <?php }else{?>
                    <span class="productPrice"><?= number_format($product->Price, 0, ',', ' ') ?> ₽</span>
                <?php }?>
                <span class="productName"><?= $product->Product_Name?></span>
                <?= Html::a('Купить', ['products/product', 'id' => $product->Product_ID], ['class' => "productBuyButton"]);?>
            </div>
        <?php } ?>
    </section>
    <?php }else{ ?>
        <h4 style="margin-top: 20px; text-align: center;">Товаров не найдено</h4>
        <?= Html::a('Сбросить фильтр', ['products/index'], ['class' => "showMoreButton"]);?>
    <?php } ?>
</div>
