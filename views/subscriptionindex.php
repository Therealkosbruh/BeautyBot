<?php
use yii\helpers\Html;
use yii\web\View;

$this->title = 'Eva_bot';
?>

<div class="container">

<div class="productFilterHeading flexColumn">
    <div class="flexRow">
        <h2>Аобонименты</h2>
    </div>
</div>
<div class="price-list">
        <div class="price-list-container">
          <div class="header-wrapper-list">
            <h1 class="section-title">Лазерная эпиляция (<span class="count">0</span>)</h1>
            <div class="icon-wrapper">
              <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/arrow-up-down.jpg" alt="" class="icon" />
            </div>
          </div>
          <section class="section-container">
            <?= Html::a('
            <div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/lazer-pink-subs.jpg" alt="banner">
            </div>
            ',
            ['subscription/profile'],
            )
            ?>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/lazer-pink-subs.jpg" alt="banner">
            </div>
          </a>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/lazer-pink-subs.jpg" alt="banner">
            </div>
          </a>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/lazer-pink-subs.jpg" alt="banner">
            </div>
          </a>
          </section>
        </div>
</div>
<div class="price-list">
        <div class="price-list-container">
          <div class="header-wrapper-list">
            <h1 class="section-title">Массаж (<span class="count">0</span>)</h1>
            <div class="icon-wrapper">
              <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/arrow-up-down.jpg" alt="" class="icon" />
            </div>
          </div>
          <section class="section-container">
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/purple-massage-subs.jpg" alt="banner">
            </div>
          </a>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/purple-massage-subs.jpg" alt="banner">
            </div>
          </a>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/purple-massage-subs.jpg" alt="banner">
            </div>
          </a>
          </section>
        </div>
</div>
<div class="price-list">
        <div class="price-list-container">
          <div class="header-wrapper-list">
            <h1 class="section-title">LPG-массаж (<span class="count">0</span>)</h1>
            <div class="icon-wrapper">
              <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/arrow-up-down.jpg" alt="" class="icon" />
            </div>
          </div>
          <section class="section-container">
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/breeze-massage-subs.jpg" alt="banner">
            </div>
          </a>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/breeze-massage-subs.jpg" alt="banner">
            </div>
          </a>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/breeze-massage-subs.jpg" alt="banner">
            </div>
          </a>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/breeze-massage-subs.jpg" alt="banner">
            </div>
          </a>
          <a href="#"><div class="feedbackBlock" id = "banner-inside">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/breeze-massage-subs.jpg" alt="banner">
            </div>
          </a>
          </section>
        </div>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const priceLists = document.querySelectorAll('.price-list');
            priceLists.forEach(priceList => {
                const feedbackBlocks = priceList.querySelectorAll('.feedbackBlock');  
                const sectionTitle = priceList.querySelector('.section-title .count'); 
                sectionTitle.textContent = feedbackBlocks.length;
                const icon = priceList.querySelector('.icon-wrapper img');
                const sections = priceList.querySelectorAll('.section-container');

                icon.addEventListener('click', function() {
                    sections.forEach(section => {
                        section.classList.toggle('closed');
                    });
                    icon.style.transition = 'transform 0.3s ease';  
                    icon.style.transform = icon.style.transform === 'rotate(180deg)' ? 'rotate(0deg)' : 'rotate(180deg)';
                });
                sections.forEach(section => {
                    section.classList.add('closed');
                });
            });
        });
    </script>