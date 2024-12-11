<div class="profile-specialist-card">  
    <main class="main-content">
      <div class="profile-specialist-info">
        <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/empl-1.jpg" alt="Фото косметолога Дарьи" class="specialist-photo" />
        <div class="profile-specialist-details">
          <div class="name-title">
            <h1 class="profile-specialist-name">Дарья</h1>
            <p class="specialist-position-title">косметолог</p>
          </div>
          <p class="experience">Опыт: более 6 лет</p>
        </div>
      </div>
  
      <p class="description">
        Наш косметолог — это высококвалифицированный специалист с медицинским образованием, который объединяет глубокие знания анатомии и физиологии с современными методами косметологии. Обладая опытом работы в медицинских учреждениях, он/она понимает, как обеспечить безопасность и эффективность процедур.
      </p>
  
      <section class="specialization">
        <h2 class="specialization-title">Специализация</h2>
        <div class="specialization-tags">
          <span class="tag">Лазерная эпиляция</span>
          <span class="tag">LPG-массаж</span>
          <span class="tag">Лазерная эпиляция для мужчин</span>
          <span class="tag">Процедуры face</span>
          <span class="tag">Аппаратная коррекция фигуры</span>
          <span class="tag">Аппаратная коррекция фигуры</span>
        </div>
      </section>
  
      <section class="reviews-section">
        <h2 class="reviews-title">Отзывы (3)</h2>
        <div class="review-list">
          <article class="review-card">
            <div class="review-header">
              <h3 class="reviewer-name">Екатерина</h3>
              <div class="star-rating">
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star empty" aria-hidden="true"></span>
              </div>
            </div>
            <p class="review-text">Долго сомневалась, но теперь не жалею! Лазерная эпиляция действительно работает, и я чувствую себя увереннее."</p>
          </article>
  
          <article class="review-card">
            <div class="review-header">
              <h3 class="reviewer-name">Екатерина</h3>
              <div class="star-rating">
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
              </div>
            </div>
            <p class="review-text">Долго сомневалась, но теперь не жалею! Лазерная эпиляция действительно работает, и я чувствую себя увереннее."</p>
          </article>
  
          <article class="review-card">
            <div class="review-header">
              <h3 class="reviewer-name">Екатерина</h3>
              <div class="star-rating">
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star" aria-hidden="true"></span>
                <span class="star empty" aria-hidden="true"></span>
              </div>
            </div>
            <p class="review-text">Долго сомневалась, но теперь не жалею! Лазерная эпиляция действительно работает, и я чувствую себя увереннее."</p>
          </article>
        </div>
      </section>
  
      <button class="cta-button">Выбрать услугу</button>
    </main>
  </div>

<script>
function setStarRating(container, rating) {
  const stars = container.querySelectorAll('.star');

  stars.forEach((star, index) => {
    star.style.setProperty('--fill-percentage', '0%');

    if (index < Math.floor(rating)) {
      star.style.setProperty('--fill-percentage', '100%');
    } else if (index < Math.ceil(rating)) {
      const fractionalPart = (rating - Math.floor(rating)) * 100;
      star.style.setProperty('--fill-percentage', `${fractionalPart}%`);
    } else {
      star.style.setProperty('--fill-percentage', '0%');
    }
  });
}


document.addEventListener('DOMContentLoaded', () => {
  const ratingContainers = document.querySelectorAll('.review-header .star-rating');

  const ratings = [3.5, 4.3, 2.8]; // in prod need to sort incoming array of ratings

  ratingContainers.forEach((container, index) => {
    setStarRating(container, ratings[index]);
  });
});
</script>