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

    <div class="productFilterHeading flexColumn">
        <div class="flexRow">
            <h2>Наши услуги</h2>
        </div>

        <div class="filters">
            <div class="search ">
                <?php $form = ActiveForm::begin([
                    'method' => 'get',
                    'action' => ['products/index'],
                    'id' => 'search-form',
                ]); ?>
                <figure>
                    <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/photo_2024-12-05_15-14-34.jpg" alt="search">
                </figure>
                <?= $form->field($searchModel, 'search')->textInput(['name' => 'search', 'onblur' => 'document.getElementById("search-form").submit();', 'placeholder' => 'Поиск']) ?>
                <button type="submit" style="position:absolute;left:-9999px;width:0;height:0;">Поиск</button>
                <?php ActiveForm::end(); ?>
            </div>
            <section class="mainSliderWithSystem">
                <?= Html::a("Массаж", ['products/index', 'mark' => ProductMarks::MARK_HOT], ["id" => "hotLink"]) ?>
                <?= Html::a("Лазерная эпиляция", ['products/index', 'chip' => true], ["id" => "chipLink"]) ?>
                <?= Html::a("Абонименты на массаж", ['products/index', 'mark' => ProductMarks::MARK_NEW], ["id" => "newLink"]) ?>
                <?= Html::a("Абонименты на лазер", ['products/index', 'mark' => ProductMarks::MARK_SALE], ["id" => "saleLink"]) ?>
            </section>
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