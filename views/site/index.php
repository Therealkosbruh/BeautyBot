<?php

/** @var yii\web\View $this */
/** @var $products */
/** @var $categories */
/** @var $afterBuy boolean */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'beauty_bot';


if (Yii::$app->request->get('afterBuy') == true){
    $this->registerJs(
        "localStorage.removeItem('cartItems'); alert('Заявка на заказ оформлена!')",
        View::POS_END,
        'delete-local-storage'
    );
}
?>

  <div class="container" style="padding-bottom: 20px;">
    <!-- <header class="flexRow">
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
    </header> -->
    <header class="profile-section">
      <?= Html::a('    <div class="user-profile">
            <div class="profile-info">
                <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/avatar-example.jpg" alt="User profile" class="profile-image" />
                <div class="user-details">
                    <div class="name-container">
                        <span class="user-fullname">User Name</span>
                        <span class="username">@user_name</span>
                    </div>
                    <span class="phone-number">+7 (123) 456-78-90</span>
                </div>
            </div>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1f5e3e0a5f94b9e193ad60107c2d41e2b877b26dbb0b47568ae9484b8acea7ad?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" alt=">" class="vertical-divider" />
        </div>',
        ['/user/profile']
        )
      ?>
        <a href="#" class="telegram-section">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/tg-icon.jpg" alt="Telegram" class="telegram-icon" />
            <div class="telegram-info">
                <span class="telegram-username">@evolaser</span>
                <span class="telegram-label">наш Telegram-канал</span>
            </div>
        </a>
    </header>
    <section class="mainSliderWithSystem">
      <img src="https://i.postimg.cc/YC253d6Q/main-page-slider-1.jpg" alt="frame" />
      <img src="https://i.postimg.cc/YC253d6Q/main-page-slider-1.jpg" alt="frame" />
      <img src="https://i.postimg.cc/YC253d6Q/main-page-slider-1.jpg" alt="frame" />
      <img src="https://i.postimg.cc/YC253d6Q/main-page-slider-1.jpg" alt="frame" />
      <img src="https://i.postimg.cc/YC253d6Q/main-page-slider-1.jpg" alt="frame" />
      <img src="https://i.postimg.cc/YC253d6Q/main-page-slider-1.jpg" alt="frame" />
    </section>
    <section class="payInfoBlock">
      <div>
        <?= Html::a('
          <span>Мои бонусы</span> 
        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/%D1%81%D1%82%D1%80%D0%B5%D0%BB%D0%BE%D1%87%D0%BA%D0%B0-%D0%B1%D0%B5%D0%B7-%D0%BF%D0%B0%D0%BB%D0%BA%D0%B8.png" class="bonus-icon" alt="" />
          <br>
          <span>100</span>
        </a>',
        ['/user/bonuses'], 
        ['class' => 'rassrochkaBlock'])
         ?>
         <?= Html::a(
          '<span>Позови друзей</span>
          <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/%D1%81%D1%82%D1%80%D0%B5%D0%BB%D0%BE%D1%87%D0%BA%D0%B0-%D0%B1%D0%B5%D0%B7-%D0%BF%D0%B0%D0%BB%D0%BA%D0%B8.png" class="bonus-icon" alt="" />
          <br>
          <span>Хочу знать больше</span>
        </a>',
        ['site/invite'],
        ['class'=> 'payBlock'])
         ?>
      </div>
      <?= Html::a('<span>Записаться на услугу</span> <br/>
        <button class = "transin-round-button">
          <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/purple.jpg" alt="Arrow" class="button-icon">
        </button>', 
       ['/site/actions'],
       ['class' => 'actionsBlock'])?>
      </a>
    </section>
    <a href="/subscription/index"><div class="feedbackBlock" href="#">
      <img src="https://i.postimg.cc/RFHH3QqH/aboniment-banner.jpg" alt="banner">
      </div>
    </a>
    <h2>Наши популярные услуги</h2>
      <section class="productCards">
          <?php
          $products = [];
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
                  <?= Html::a('Записаться', ['products/product', 'id' => $product->Product_ID], ['class' => "productBuyButton"]);?>
              </div>
          <?php } ?>
      </section>

      <a href="/web/site/invite">invite</a><br>
      <a href="/web/site/about">about</a><br>
      <a href="/web/site/actions">actions</a><br>
      <a href="/web/user/bonuses">bonuses</a><br>
      <a href="/web/user/profile">profile</a><br>
      <a href="/web/employee/">employee</a><br>
      <a href="/web/employee/profile">employee profile</a><br>
      <a href="/web/signup/signup">signup/signup</a><br>
      <a href="/web/signup/service-info">signup/service-info</a><br>
      <a href="/web/signup/choose-service">signup/choose-service</a><br>
      <a href="/web/subscription">subscription</a><br>
      <a href="/web/subscription/profile">subscription/profile</a><br>


      <?= Html::a('Посмотреть все услуги студии', ['products/index'], ['class' => "showMoreButton"]);?>
  </div>
