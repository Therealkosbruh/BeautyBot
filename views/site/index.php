<?php

/** @var yii\web\View $this */
/** @var $products array */

use yii\helpers\Html;

$this->title = 'Luxpods';
?>

  <div class="container">
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
          <span>Рассрочка</span>
          <span>0%</span>
        </a>
        <a class="payBlock" href="#">
          <span>Оплата при получении</span>
          <span>Как это работает?</span>
        </a>
      </div>
      <a class="actionsBlock" href="#">
        <span>Наши акции</span>
      </a>
    </section>
    <div class="feedbackBlock" href="#">
      <div>Отзывы</div>
      <div>Читайте отзывы о нас в нашем телеграм-канале @luxpods_spb_bot</div>
    </div>
    <a class="saleBlock" style="background-image: url('//web/img/banner/saleBanner.svg')" href="#"></a>
    <section class="productSlider">
      <img src="/web/img/silder/sliderWithProduct/naushniki.svg" alt="" />
      <img src="/web/img/silder/sliderWithProduct/gadget.svg" alt="" />
      <img src="/web/img/silder/sliderWithProduct/kolonki.svg" alt="" />
      <img src="/web/img/silder/sliderWithProduct/technikaDyson.svg" alt="" />
      <img src="/web/img/silder/sliderWithProduct/zaryadki.svg" alt="" />
      <img src="/web/img/silder/sliderWithProduct/odechda.svg" alt="" />
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
                          <span class="productPrice"><?= $product->Price - ($product->Price * ($product->Discount / 100))?> ₽</span>
                          <del class="productPrice priceDiscount"><?= $product->Price?> ₽</del>
                      </div>
                  <?php }else{ ?>
                      <span class="productPrice"><?= $product->Price ?> ₽</span>
                  <?php } ?>
                  <span class="productName"><?= $product->Product_Name ?></span>
                  <?= Html::a('Купить', ['products/product', 'id' => $product->Product_ID], ['class' => "productBuyButton"]);?>
              </div>
          <?php } ?>
      </section>
    <?= Html::a('Посмотреть все товары', ['products/index'], ['class' => "showMoreButton"]);?>
  </div>
