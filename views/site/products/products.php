<?php

/** @var yii\web\View $this */
/** @var $dataProvider yii\data\ActiveDataProvider */
/** @var $searchModel app\models\ProductSearch */
/** @var $categories app\models\Categories */

use app\models\ProductSearch;
use app\models\ProductMarks;
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
    <div class="productFilterHeading flexColumn">
        <div class="flexRow">
            <h2>Наши товары</h2>
            <div class="productFilter">
                <button id="showSearchButton"><img src="/web/img/icons/interface/searchNormal.svg" alt="search"></button>
                <button id="showFilterButton"><img src="/web/img/icons/interface/filter.svg" alt="filter"></button>
            </div>
        </div>

        <div class="filters">
            <div class="search hidden">
                <?php $form = ActiveForm::begin([
                    'method' => 'get',
                    'action' => ['products/index'],
                    'id' => 'search-form',
                ]); ?>
                <figure>
                    <img src="/web/img/icons/interface/searchNormal.svg" alt="search">
                </figure>
                <?= $form->field($searchModel, 'search')->textInput(['name' => 'search', 'onblur' => 'document.getElementById("search-form").submit();', 'placeholder' => 'Поиск']) ?>
                <button type="submit" style="position:absolute;left:-9999px;width:0;height:0;">Поиск</button>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="filterButtons hidden">
                <?= Html::a("Популярные", ['products/index', 'mark' => ProductMarks::MARK_HOT], ["id" => "hotLink"]) ?>
                <?= Html::a("Сначала дешевые", ['products/index', 'chip' => true], ["id" => "chipLink"]) ?>
                <?= Html::a("Новинки", ['products/index', 'mark' => ProductMarks::MARK_NEW], ["id" => "newLink"]) ?>
                <?= Html::a("Акции", ['products/index', 'mark' => ProductMarks::MARK_SALE], ["id" => "saleLink"]) ?>
            </div>
        </div>


    </div>
    <?php if ($dataProvider->models) { ?>
        <section class="productCards" style="margin: 0;">
            <?php foreach ($dataProvider->models as $product) { ?>
                <div class="card flexColumn">
                    <div class="productMarks">
                        <?php if ($product->productMarkAssignments) { ?>
                            <?php foreach ($product->marks as $mark) { ?>
                                <?= Html::a($mark->Mark_Name, ['products/index', 'mark' => $mark->Mark_Name], ['class' => $mark->Mark_Name . 'Mark', 'style' => 'text-transform: uppercase;']) ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <img src="<?= $product->mainImage->Image_URL ?>" alt="<?= $product->Product_Name ?>" />
                    <?php if ($product->Discount) { ?>
                        <div style="margin-left: 0">
                            <span class="productPrice" style="margin-right: 5px"><?= number_format($product->Price - ($product->Price * ($product->Discount / 100)), 0, ',', ' ') ?> ₽</span>
                            <del class="productPrice priceDiscount"><?= number_format($product->Price, 0, ',', ' ') ?> ₽</del>
                        </div>
                    <?php } else { ?>
                        <span class="productPrice"><?= number_format($product->Price, 0, ',', ' ') ?> ₽</span>
                    <?php } ?>
                    <span class="productName"><?= $product->Product_Name ?></span>
                    <?= Html::a('Купить', ['products/product', 'id' => $product->Product_ID], ['class' => "productBuyButton"]); ?>
                </div>
            <?php } ?>
        </section>
    <?php } else { ?>
        <h4 style="margin-top: 20px; text-align: center;">Товаров не найдено</h4>
        <?= Html::a('Сбросить фильтр', ['products/index'], ['class' => "showMoreButton"]); ?>
    <?php } ?>
</div>