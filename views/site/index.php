<?php

/** @var yii\web\View $this */
/** @var $products */
/** @var $categories */
/** @var $afterBuy boolean */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Luxpods';
?>

  <div class="container" style="padding-bottom: 20px;">
    <header class="flexRow">
      <a class="userInfo flexRow" href="#">
      <img src="/web/img/user/avatar/avatar.png" alt="Аватар">
        <div class="nameBlock flexColumn">
          <div class="username">
            <a href="#">username</a>
          </div>
          <div class="rang">
            <span>Новичок</span>
          </div>
        </div>
      </a>

      <a class="tgLinking flexRow" href="#">
        <div class="tgLogo flexColumn">
          <img src="/web/img/icons/tgIcon.svg" alt="telegram" />
        </div>
        <div class="tgInfo flexColumn">
          <span>@luxpods_spb_bot</span>
          <span>наш Telegram-канал</span>
        </div>
      </a>
    </header>
    <section class="mainSliderWithSystem">
      <img src="/web/img/silder/sliderWithSystem/dostavkaIOplata.svg" alt="frame" />
      <img src="/web/img/silder/sliderWithSystem/garant.svg" alt="frame" />
      <img src="/web/img/silder/sliderWithSystem/whyWe.svg" alt="frame" />
      <img src="/web/img/silder/sliderWithSystem/ballSystem.svg" alt="frame" />
      <img src="/web/img/silder/sliderWithSystem/dostavkaIOplata.svg" alt="frame" />
      <img src="/web/img/silder/sliderWithSystem/garant.svg" alt="frame" />
    </section>
    <section class="payInfoBlock">
      <div>
        <a class="rassrochkaBlock" href="#">
          <span>Рассрочка</span> <br>
          <span>0%</span>
        </a>
        <a class="payBlock" href="#">
          <span>Оплата при получении</span> <br>
          <span>Как это работает?</span>
        </a>
      </div>
      <?= Html::a('<span>Наши акции</span>', ['/site/stock'], ['class' => 'actionsBlock']) ?>
      </a>
    </section>
    <div class="feedbackBlock" href="#">
      <div>Отзывы</div>
      <div>Читайте отзывы о нас в нашем телеграм-канале @luxpods_spb_bot</div>
    </div>
    <a class="saleBlock" style="background-image: url('//web/img/banner/saleBanner.svg')" href="#"></a>
    <section class="productSlider">
        <?php
        foreach ($categories as $category) {
            echo Html::a(Html::img($category->Category_Image, ['alt' => $category->Category_Name]), ['products/index', 'category' => $category->Category_ID]);
        }
        ?>
    </section>
    <h2>Наши товары</h2>
      <section class="productCards">
          <?php
          foreach ($products as $num => $product) {
              ?>
              <div class="card flexColumn">
                  <div class="productMarks">
                      <?php if($product->productMarkAssignments){?>
                          <?php foreach ($product->marks as $mark){?>
                              <?= Html::a($mark->Mark_Name, ['products/index', 'mark' => $mark->Mark_Name], ['class' => $mark->Mark_Name.'Mark', 'style' => 'text-transform: uppercase;'])?>
                          <?php }?>
                      <?php }?>
                  </div>
                  <img src="<?= $product->mainImage->Image_URL ?>" alt="<?= $product->Product_Name ?>" />
                  <?php if($product->Discount) { ?>
                      <div style="margin-left: 0">
                          <span class="productPrice" style="margin-right: 5px"><?= number_format($product->Price - ($product->Price * ($product->Discount / 100)), 0, ',', ' ') ?> ₽</span>
                          <del class="productPrice priceDiscount"><?= number_format($product->Price, 0, ',', ' ') ?> ₽</del>
                      </div>
                  <?php }else{ ?>
                      <span class="productPrice" ><?= number_format($product->Price, 0, ',', ' ') ?> ₽</span>
                  <?php } ?>
                  <span class="productName"><?= $product->Product_Name ?></span>
                  <?= Html::a('Купить', ['products/product', 'id' => $product->Product_ID], ['class' => "productBuyButton"]);?>
              </div>
          <?php } ?>
      </section>
    <?= Html::a('Посмотреть все товары', ['products/index'], ['class' => "showMoreButton"]);?>
  </div>
