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
      // ['signup/service-info'], 
      ['class'=> 'actionsBlock']
    )
  ?>

        <?= Html::a('<span>Выбрать специалиста</span> <br/>
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
    <a href="#">
  <div class="feedbackBlock" id="leezing">
    <img src="https://i.postimg.cc/d1vdYbQx/photo-2024-12-05-15-38-04.jpg" alt="banner">
  </div>
</a>


    <!-- <div class="image-column">
      <div class="image-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/23240de2cb5f36aa07f461198e7f0a2dda89067ebdc47a387182bed42f8c41b8?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" class="background-image" alt="" />
        <div class="zero-percent">0</div>
        <div class="percent-symbol">%</div>
      </div>
    </div> -->
</div>