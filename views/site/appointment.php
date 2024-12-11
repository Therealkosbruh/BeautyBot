<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'beauty_bot';
?>

<div class="container">
    <div class="productFilterHeading flexColumn">
        <div class="flexRow">
            <h2>Дата и время</h2>
        </div>
</div>
</div>

<div class="container">
<section class="mainSliderWithSystem">
  <?= Html::button('<img
      loading="lazy"
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbb5acf6301426430052f35a0a0b1bf00c234e14866e38b76c64250cda4321a3?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3"
      class="appointment-icon"
      alt="appointment-icon"
    />', ["class"=> "appointment-icon-wrapper"]) ?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
<?= Html::button('
<div class="icon-button" role="button" tabindex="0">
  <div class="appointment-icon-wrapper">
   <span class = "date-strong"> 01.10</span>
    <span>вт</span>
  </div>
</div>
');
?>
</section>
</div>

<div class="calendar-container" role="application" aria-label="Calendar">
    <div class="calendar-wrapper">
      <div class="month-selector" role="navigation" aria-label="Month navigation">
        <button class="month-nav-btn prev" aria-label="Previous month" onclick="changeMonth(-1)">
          <img class="month-nav" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5690d8d039d091ff703551615324b4f5c6ac93ef2ca5f4f4e9a9abfa261d056?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" alt="" aria-hidden="true" />
        </button>
        <div class="current-month" role="heading" aria-level="2" id="current-month"></div>
        <button class="month-nav-btn next" aria-label="Next month" onclick="changeMonth(1)">
          <img class="month-nav" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b1c423aaae53f2fe6c4a175eef0d76e665078f2dd74c6110a8ddd55262604d6c?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" alt="" aria-hidden="true" />
        </button>
      </div>
      <div class="calendar-grid">
        <div class="weekdays-header" role="row">
          <span role="columnheader">пн</span>
          <span role="columnheader">вт</span>
          <span role="columnheader">ср</span>
          <span role="columnheader">чт</span>
          <span role="columnheader">пт</span>
          <span role="columnheader">сб</span>
          <span role="columnheader">вс</span>
        </div>
        <div id="calendar-dates" class="dates-grid" role="grid"></div>
      </div>
    </div>
  </div>


<div class="container">
    <div class="productFilterHeading flexColumn">
        <div class="flexRow">
            <h2>Выбор специалиста</h2>
        </div>
</div>
</div>

<div class="app-specialist-card">
    <div class="card-container">
      <div class="app-profile-header">
        <div class="app-profile-info">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8d18ae2874d9327268907069181321db7e4a4a85938053ae038e25adf0fc36fd?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" class="app-profile-image" alt="Specialist profile photo" />
          <div class="app-specialist-info">
            <div class="app-name-container">
              <div class="app-specialist-name">Дарья</div>
              <div class="app-specialist-title">косметолог, опыт > 6 лет</div>
            </div>
            <div class="rating-container">
              <div class="stars-container">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c7bd4cdf1b9e88566044741eb3fe4174d81089ece031a31ba185903540d10fcb?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" class="star-icon" alt="" />
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c7bd4cdf1b9e88566044741eb3fe4174d81089ece031a31ba185903540d10fcb?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" class="star-icon" alt="" />
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c7bd4cdf1b9e88566044741eb3fe4174d81089ece031a31ba185903540d10fcb?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" class="star-icon" alt="" />
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c7bd4cdf1b9e88566044741eb3fe4174d81089ece031a31ba185903540d10fcb?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" class="star-icon" alt="" />
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/20152e86a8ca945122e7dca07c216c99ea27ed8cfe683816dda0586d36b898b5?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" class="star-icon" alt="" />
              </div>
              <div class="review-count">4 отзыва</div>
            </div>
          </div>
        </div>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8f2993c37916dc0cfb4a40e83af100600cd8e2e2ad0fa6d437dddc97e19dcf9?placeholderIfAbsent=true&apiKey=b5d403ee4291413a8773ca2b908d16f3" class="settings-icon" alt="Settings" />
      </div>
  
      <div class="time-section-title">Утро</div>
      <div class="time-slots-container">
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">08:00</div>
          <div class="time-slot" tabindex="0" role="button">08:30</div>
          <div class="time-slot" tabindex="0" role="button">09:00</div>
          <div class="time-slot" tabindex="0" role="button">09:30</div>
          <div class="time-slot" tabindex="0" role="button">10:00</div>
          <div class="time-slot" tabindex="0" role="button">10:30</div>
        </div>
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">11:00</div>
          <div class="time-slot" tabindex="0" role="button">11:30</div>
        </div>
      </div>
  
      <div class="time-section-title">День</div>
      <div class="time-slots-container">
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">12:00</div>
          <div class="time-slot" tabindex="0" role="button">12:30</div>
          <div class="time-slot" tabindex="0" role="button">13:00</div>
          <div class="time-slot" tabindex="0" role="button">13:30</div>
          <div class="time-slot" tabindex="0" role="button">14:00</div>
          <div class="time-slot" tabindex="0" role="button">14:30</div>
        </div>
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">15:00</div>
          <div class="time-slot" tabindex="0" role="button">15:30</div>
          <div class="time-slot" tabindex="0" role="button">16:00</div>
          <div class="time-slot" tabindex="0" role="button">16:30</div>
          <div class="time-slot" tabindex="0" role="button">17:00</div>
          <div class="time-slot" tabindex="0" role="button">17:30</div>
        </div>
      </div>
  
      <div class="time-section-title">Вечер</div>
      <div class="time-slots-container">
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">18:00</div>
          <div class="time-slot" tabindex="0" role="button">18:30</div>
          <div class="time-slot" tabindex="0" role="button">19:00</div>
          <div class="time-slot" tabindex="0" role="button">19:30</div>
          <div class="time-slot" tabindex="0" role="button">20:00</div>
          <div class="time-slot" tabindex="0" role="button">20:30</div>
        </div>
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">21:00</div>
          <div class="time-slot" tabindex="0" role="button">21:30</div>
        </div>
      </div>
  
      <button class="app-book-button">Записаться</button>
    </div>
  </div>
  
<div class="container">
    <div class="productFilterHeading flexColumn">
        <div class="flexRow">
            <h2>Доступное время 4 октября</h2>
        </div>
</div>
</div>

<div class="app-specialist-card">
    <div class="card-container">
      <div class="time-section-title">Утро</div>
      <div class="time-slots-container">
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">08:00</div>
          <div class="time-slot" tabindex="0" role="button">08:30</div>
          <div class="time-slot" tabindex="0" role="button">09:00</div>
          <div class="time-slot" tabindex="0" role="button">09:30</div>
          <div class="time-slot" tabindex="0" role="button">10:00</div>
          <div class="time-slot" tabindex="0" role="button">10:30</div>
        </div>
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">11:00</div>
          <div class="time-slot" tabindex="0" role="button">11:30</div>
        </div>
      </div>
  
      <div class="time-section-title">День</div>
      <div class="time-slots-container">
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">12:00</div>
          <div class="time-slot" tabindex="0" role="button">12:30</div>
          <div class="time-slot" tabindex="0" role="button">13:00</div>
          <div class="time-slot" tabindex="0" role="button">13:30</div>
          <div class="time-slot" tabindex="0" role="button">14:00</div>
          <div class="time-slot" tabindex="0" role="button">14:30</div>
        </div>
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">15:00</div>
          <div class="time-slot" tabindex="0" role="button">15:30</div>
          <div class="time-slot" tabindex="0" role="button">16:00</div>
          <div class="time-slot" tabindex="0" role="button">16:30</div>
          <div class="time-slot" tabindex="0" role="button">17:00</div>
          <div class="time-slot" tabindex="0" role="button">17:30</div>
        </div>
      </div>
  
      <div class="time-section-title">Вечер</div>
      <div class="time-slots-container">
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">18:00</div>
          <div class="time-slot" tabindex="0" role="button">18:30</div>
          <div class="time-slot" tabindex="0" role="button">19:00</div>
          <div class="time-slot" tabindex="0" role="button">19:30</div>
          <div class="time-slot" tabindex="0" role="button">20:00</div>
          <div class="time-slot" tabindex="0" role="button">20:30</div>
        </div>
        <div class="time-slots-row">
          <div class="time-slot" tabindex="0" role="button">21:00</div>
          <div class="time-slot" tabindex="0" role="button">21:30</div>
        </div>
      </div>
    </div>
  </div>

  <button id="app-button">Выбрать услугу</button>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    const profileHeaders = document.querySelectorAll(".app-profile-header");

    profileHeaders.forEach((header) => {
        const specialistCard = header.closest(".app-specialist-card");

        if (specialistCard) {
        specialistCard.style.height = "125px";
        specialistCard.style.overflow = "hidden"; 
        specialistCard.style.borderRadius = "24px"; 

        Array.from(specialistCard.children).forEach((child) => {
            if (!child.contains(header)) {
            child.style.display = "none";
            }
        });

        header.addEventListener("click", function () {
            const isCollapsed = specialistCard.style.height === "125px";

            if (isCollapsed) {
            specialistCard.style.height = "auto"; 
            specialistCard.style.overflow = "visible"; 

            Array.from(specialistCard.children).forEach((child) => {
                child.style.display = ""; 
            });
            } else {
            specialistCard.style.height = "125px";
            specialistCard.style.overflow = "hidden"; 

            Array.from(specialistCard.children).forEach((child) => {
                if (!child.contains(header)) {
                child.style.display = "none";
                }
            });
            }
            specialistCard.style.borderRadius = "24px"; 
        });
        }
    });
    });

    class Calendar {
    constructor() {
      this.currentDate = new Date();
      this.selectedDate = null;
      this.monthNames = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 
                         'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
      this.init();
    }
  
    init() {
      this.updateCalendar();
      this.addEventListeners();
    }
  
    updateCalendar() {
      this.updateMonthDisplay();
      this.renderDates();
    }
  
    updateMonthDisplay() {
      const monthDisplay = document.getElementById('current-month');
      monthDisplay.textContent = `${this.monthNames[this.currentDate.getMonth()]} ${this.currentDate.getFullYear()}`;
    }
  
    renderDates() {
      const calendarGrid = document.getElementById('calendar-dates');
      calendarGrid.innerHTML = '';
  
      const firstDay = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), 1);
      const lastDay = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, 0);
      const prevMonthLastDay = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), 0);
      
      let firstDayIndex = firstDay.getDay() - 1;
      if (firstDayIndex === -1) firstDayIndex = 6;
  
      for (let i = firstDayIndex; i > 0; i--) {
        const dayCell = this.createDateCell(
          prevMonthLastDay.getDate() - i + 1,
          true,
          new Date(prevMonthLastDay.getFullYear(), prevMonthLastDay.getMonth(), prevMonthLastDay.getDate() - i + 1)
        );
        calendarGrid.appendChild(dayCell);
      }
  
      for (let i = 1; i <= lastDay.getDate(); i++) {
        const dayCell = this.createDateCell(
          i,
          false,
          new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), i)
        );
        calendarGrid.appendChild(dayCell);
      }
  
      let nextMonthDays = 42 - (firstDayIndex + lastDay.getDate());
      for (let i = 1; i <= nextMonthDays; i++) {
        const dayCell = this.createDateCell(
          i,
          true,
          new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, i)
        );
        calendarGrid.appendChild(dayCell);
      }
    }
  
    createDateCell(day, inactive, date) {
      const cell = document.createElement('div');
      cell.className = `date-cell${inactive ? ' date-cell-inactive' : ''}`;
      cell.textContent = day;
      cell.setAttribute('role', 'gridcell');
      cell.setAttribute('tabindex', inactive ? '-1' : '0');
      cell.setAttribute('aria-label', this.formatDateForAria(date));
  
      if (!inactive) {
        cell.addEventListener('click', () => this.selectDate(date, cell));
        cell.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            this.selectDate(date, cell);
          }
        });
      }
  
      if (this.isSelectedDate(date)) {
        cell.classList.add('date-cell-selected');
        cell.setAttribute('aria-selected', 'true');
      }
  
      return cell;
    }
  
    selectDate(date, cell) {
      const previousSelected = document.querySelector('.date-cell-selected');
      if (previousSelected) {
        previousSelected.classList.remove('date-cell-selected');
        previousSelected.setAttribute('aria-selected', 'false');
      }
  
      this.selectedDate = date;
      cell.classList.add('date-cell-selected');
      cell.setAttribute('aria-selected', 'true');
  
      const event = new CustomEvent('dateSelected', {
        detail: { date: this.selectedDate }
      });
      document.dispatchEvent(event);
    }
  
    isSelectedDate(date) {
      return this.selectedDate && 
             date.getDate() === this.selectedDate.getDate() &&
             date.getMonth() === this.selectedDate.getMonth() &&
             date.getFullYear() === this.selectedDate.getFullYear();
    }
  
    formatDateForAria(date) {
      return `${date.getDate()} ${this.monthNames[date.getMonth()]} ${date.getFullYear()}`;
    }
  
    changeMonth(delta) {
      this.currentDate.setMonth(this.currentDate.getMonth() + delta);
      this.updateCalendar();
    }
  
    addEventListeners() {
      document.querySelector('.prev').addEventListener('click', () => this.changeMonth(-1));
      document.querySelector('.next').addEventListener('click', () => this.changeMonth(1));
  
      document.addEventListener('keydown', (e) => {
        if (document.activeElement.classList.contains('date-cell')) {
          const currentDate = new Date(this.currentDate);
          switch(e.key) {
            case 'ArrowLeft':
              currentDate.setDate(currentDate.getDate() - 1);
              break;
            case 'ArrowRight':
              currentDate.setDate(currentDate.getDate() + 1);
              break;
            case 'ArrowUp':
              currentDate.setDate(currentDate.getDate() - 7);
              break;
            case 'ArrowDown':
              currentDate.setDate(currentDate.getDate() + 7);
              break;
            default:
              return;
          }
          e.preventDefault();
          this.currentDate = currentDate;
          this.updateCalendar();
        }
      });
    }
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    const calendar = new Calendar();
  });
</script>

