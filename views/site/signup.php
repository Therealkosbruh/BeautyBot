<?php

use yii\helpers\Html;

$this->title = 'Eva_bot';
?>

<div class="container" style="padding-bottom: 20px;">
    <h2>Новая запись</h2>
    <section class="serviceInfoBlock" id="actionsList">
            <?= Html::a('<span>Выбрать <br/>услугу</span> <br/> 
            <button class="transin-round-button button-right-bottom">
                <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/purple.jpg" alt="Arrow" class="button-icon">
            </button>',
            ['signup/choose-service'],  
            ['class'=> 'actionsBlock']
          )
        ?>
        <?= Html::a('<span class="action-list-title">Выбрать специалиста</span> <br/>
         <button class = "transin-round-button button-right-bottom">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/pink.jpg" alt="Arrow" class="button-icon">
         </button>', 
         ['/employee/index'],
         ['class' => 'actionsBlock', 'id' => 'selectSpecialist'])
          ?>
        <?= Html::a('<span>Выбрать <br/> дату и время</span> <br/>
         <button class = "transin-round-button button-right-bottom">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/orange.jpg" alt="Arrow" class="button-icon">
         </button>',
         ['/user/bonuses'], 
         ['class' => 'actionsBlock', 'id' => 'selectDateTime'])
         ?>
        <?= Html::a('<span>Написать менеджеру</span> <br/>
         <button class = "transin-round-button button-right-bottom" id = "mngrbtn">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/message.jpg" alt="Arrow" class="button-icon">
         </button>', 
         ['/site/stock'],
        ['class' => 'actionsBlock', 'id' => 'contactManager'])?>
    </section>
    <div class="payment-container" id="sign-up-banner">
      <div class="payment-wrapper">
        <div class="banner-payment-info">
          <div class="payment-details">
            <h2 class="banner-title">Рассрочка</h2>
            <div class="payment-duration">на оплату услуг без %</div>
          </div>
        </div>
        <div class="percentage-wrapper">
          <div class="zero-percent" role="text" aria-label="Zero percent interest">0</div>
          <span class="percent-span">%</span>
        </div>
      </div>
    </div>
    <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/black-banner-img-1.png" alt="" class="banner-image-hands">
</div>