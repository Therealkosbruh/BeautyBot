<?php

/** @var yii\web\View $this */
/** @var $product */
/** @var $mainImage array */

use yii\helpers\Html;

$this->title = $product->Product_Name;
?>

<div class="container" style="padding-bottom: 20px;">
    <section class="productImage">
        <?= Html::img($product->mainImage->Image_URL, ['alt' => 'product', 'id' => 'productImageMain']) ?>
        <?php foreach ($product->productImages as $key => $productImage): ?>
            <?php if ($key != 0): ?>
                <?= Html::img($productImage->Image_URL, ['alt' => 'product']) ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
    <section class="productHeading flexRow">
        <h2 id="productName"><?= $product->Product_Name ?></h2>
        <a class="videoButton" href="#video"><img src="/web/img/icons/interface/videoIcon.svg" alt="video" /></a>
    </section>
    <section class="productInfo">
        <?php if($product->Discount) { ?>
            <div>
                <span class="price" style="margin-right: 20px"><?= number_format($product->Price - ($product->Price * ($product->Discount / 100)), 0, ',', ' ') ?> ₽</span>
                <del class="productPriceDiscount"><?= number_format($product->Price, 0, ',', ' ') ?> ₽</del>
            </div>
        <?php } else { ?>
            <div class="price"><?= number_format($product->Price, 0, ',', ' ') ?> ₽</div>
        <?php } ?>

        <?php if(!empty($product->colors)){ ?>
        <div class="colors">
            <span class="colorsText">Цвет</span>
            <div class="chooseColor flexRow">
                <?php foreach ($product->colors as $key => $color){ ?>
                <div class="colorCircle <?= $key == 1 ?: "active" ?>" data-color="<?= $color->Color_Name ?>" data-image="<?= $color->Color_image ?>" style="background-color: <?= $color->Color_Code ?>"></div>
                <?php } ?>
            </div>
            <span class="colorName"><?= $product->colors[0]->Color_Name ?></span>
        </div>
        <?php } ?>
        <hr />
        <section class="split flexColumn">
            <h3>Можно оплатить в сплит</h3>
            <div class="flexRow splitInfo">
                <div class="flexColumn">
                    <span class="splitSpan"> Сейчас </span>
                    <span class="splitPrice"> <?= number_format($product->Price / 2, 0, ',', ' ') ?> ₽ </span>
                </div>
                <div class="flexColumn">
                    <span class="splitSpan"> Через 3 недели </span>
                    <span class="splitPrice"> <?= number_format($product->Price / 2, 0, ',', ' ') ?> ₽ </span>
                </div>
            </div>
        </section>
    </section>
    <section class="productSliderWithSystem">
        <h3>Полезная информация</h3>
        <section class="mainSliderWithSystem">
            <img src="/web/img/silder/sliderWithSystem/dostavkaIOplata.svg" alt="frame" />
            <img src="/web/img/silder/sliderWithSystem/garant.svg" alt="frame" />
            <img src="/web/img/silder/sliderWithSystem/whyWe.svg" alt="frame" />
            <img src="/web/img/silder/sliderWithSystem/ballSystem.svg" alt="frame" />
            <img src="/web/img/silder/sliderWithSystem/dostavkaIOplata.svg" alt="frame" />
            <img src="/web/img/silder/sliderWithSystem/garant.svg" alt="frame" />
        </section>
    </section>
    <section class="productTextInfo">
        <?php if(!empty($product->productExtra->Characteristics)){ ?>
        <section class="accordion">
            <div class="accordionHeader">
                <span>Характеристики</span>
            </div>
            <div class="accordionContent">
                <p>
                    <?= $product->productExtra->Characteristics ?>
                </p>
            </div>
        </section>
        <?php } ?>
        <?php if(!empty($product->productExtra->Kit)){ ?>
        <section class="accordion">
            <div class="accordionHeader">
                <span>Комплект</span>
            </div>
            <div class="accordionContent">
                <p>
                    <?= $product->productExtra->Kit ?>
                </p>
            </div>
        </section>
        <?php } ?>
        <?php if(!empty($product->productExtra->Offer)){ ?>
        <section class="accordion">
            <div class="accordionHeader">
                <span>Выгодное предложение</span>
            </div>
            <div class="accordionContent">
                <p>
                    <?= $product->productExtra->Offer ?>
                </p>
            </div>
        </section>
        <?php } ?>
        <?php if(!empty($product->productExtra->Delivery)){ ?>
        <section class="accordion">
            <div class="accordionHeader">
                <span>Доставка</span>
            </div>
            <div class="accordionContent">
                <p>
                    <?= $product->productExtra->Delivery ?>
                </p>
            </div>
        </section>
        <?php } ?>
    </section>
    <section class="reviewBlock">
        <h3>Отзывы</h3>
        <div class="sliderWithReview">
            <div>
                <img src="/web/img/reviews/review.png" alt="">
            </div>
            <div>
                <img src="/web/img/reviews/review.png" alt="">
            </div>
            <div>
                <img src="/web/img/reviews/review.png" alt="">
            </div>
            <div>
                <img src="/web/img/reviews/review.png" alt="">
            </div>
        </div>
    </section>
    <a href="#" class="showMoreButton showAllReviewButton">
        Смотреть все отзывы
    </a>
    <section class="productVideo">
        <h3>Видеообзор</h3>
        <video src="/web/video/naushniki/video.mp4" subtitles="/web/video/naushniki/subtitles.vtt" description="/web/video/naushniki/description.txt" poster="/web/img/video/poster/poster.png" class="videoOfProduct" id="video">У вас не поддерживается это видео</video>
    </section>
</div>
