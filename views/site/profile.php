<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Eva_bot';
?>
    <header class="profile-section">
    <div class="user-profile">
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
        </div>
        <a href="#" class="telegram-section">
            <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/tg-icon.jpg" alt="Telegram" class="telegram-icon" />
            <div class="telegram-info">
                <span class="telegram-username">@evolaser</span>
                <span class="telegram-label">наш Telegram-канал</span>
            </div>
        </a>
    </header>
<div class="container">
    <div class="productFilterHeading flexColumn">
        <div class="flexRow">
            <h2>Предстоящие записи</h2>
        </div>
    </div>
</div>    

<div class="appointment-card">
  <div class="appointment-content">
    <div class="image-wrapper">
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/744b1c2b252f7837950e2f18d730a7e7c2993d0536bc5c02fbd9bf002b215dc2?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" alt="Service provider profile" class="service-image" />
    </div>
    <div class="appointment-details-wrapper">
      <div class="appointment-details">
        <div class="appointment-service-info">
          <div class="appointment-service-details">
            <div class="appointment-service-name">Классический массаж тела</div>
            <div class="appointment-service-price">2600₽</div>
          </div>
          <div class="time-details">
            <div class="appointment-date">01.04.2024</div>
            <div class="appointment-time">10:30</div>
          </div>
        </div>
        <div class="appointment-action-buttons">
          <button class="cancel-btn" tabindex="0">Отменить</button>
          <button class="reschedule-btn" tabindex="0">Перенести</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="price-list">
        <div class="price-list-container">
          <div class="header-wrapper-list">
            <h1 class="section-title">Предыдущие записи</h1>
            <div class="icon-wrapper">
              <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/arrow-up-down.jpg" alt="" class="icon" />
            </div>
          </div>
          <section class="section-container">
          <div class="history-card" id="schedule">
    <div class="history-table" >
      <div class="table-header">
        <div class="service-info" id = "serv-head">
          <span>Услуга</span>
          <span>Дата</span>
          <span>Время</span>
        </div>
      </div>
      
      <div class="table-row">
        <div class="service-info">
          <div class="service-name">Массаж лица</div>
          <div class="service-date">01.04.2024</div>
        </div>
        <div class="service-app-time">10:30</div>
      </div>

      <div class="table-row">
        <div class="service-info">
          <div class="service-name">Коррекция фигуры</div>
          <div class="service-date">19.04.2024</div>
        </div>
        <div class="service-app-time">10:30</div>
      </div>

      <div class="table-row">
        <div class="service-info">
          <div class="service-name">Лазерная эпиляция</div>
          <div class="service-date">02.05.2024</div>
        </div>
        <div class="service-app-time">10:30</div>
      </div>

      <div class="table-row">
        <div class="service-info">
          <div class="service-name">Мужской прайс</div>
          <div class="service-date">07.05.2024</div>
        </div>
        <div class="service-app-time">10:30</div>
      </div>
    </div>
  </div>
          </section>
        </div>
</div>
<div class="price-list">
        <div class="price-list-container">
          <div class="header-wrapper-list">
            <h1 class="section-title">Рассрочка 0%</h1>
            <div class="icon-wrapper">
              <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/arrow-up-down.jpg" alt="" class="icon" />
            </div>
          </div>
          <section class="section-container">

          </section>
        </div>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const priceLists = document.querySelectorAll('.price-list');
            priceLists.forEach(priceList => {
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
