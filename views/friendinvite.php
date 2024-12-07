<style>
.invite-friends {
  background-color: rgba(241, 241, 241, 1);
  display: flex;
  max-width: 480px;
  width: 100%;
  flex-direction: column;
  font-family: Mulish, sans-serif;
  margin: 0 auto;
  padding: 31px 20px 210px;
}

.invite-title {
  align-self: stretch;
  font-size: 30px;
  color: rgba(41, 41, 40, 1);
  font-weight: 800;
}

.referral-container {
  border-radius: 20px;
  background-color: #fff;
  display: flex;
  margin-top: 30px;
  width: 100%;
  flex-direction: column;
  align-items: start;
  color: rgba(41, 41, 40, 1);
  line-height: 1;
  padding: 25px 20px;
}

.referral-label {
  font-size: 22px;
  font-weight: 800;
}

.referral-link {
  color: rgba(88, 126, 189, 1);
  font-size: 16px;
  font-weight: 400;
  margin-top: 20px;
}

.share-button {
  align-self: stretch;
  border-radius: 17px;
  background-color: rgba(241, 241, 241, 1);
  margin-top: 30px;
  font-size: 20px;
  font-weight: 600;
  text-align: center;
  line-height: 1;
  padding: 20px;
  cursor: pointer;
  border: none;
}

.bonus-container {
  border-radius: 20px;
  background-color: #fff;
  display: flex;
  margin-top: 30px;
  flex-direction: column;
  font-size: 16px;
  font-weight: 900;
  line-height: 19px;
  padding: 20px;
}

.bonus-image {
  aspect-ratio: 1.57;
  object-fit: contain;
  object-position: center;
  width: 100%;
  border-radius: 20px;
}

.bonus-description {
  margin-top: 20px;
}

.bonus-text-regular {
  font-weight: 400;
  color: rgba(41, 41, 40, 1);
}

.bonus-value {
  color: rgba(41, 41, 40, 1);
  font-size: 24px;
  line-height: 1;
  align-self: start;
  margin-top: 20px;
}

.bonus-terms {
  color: rgba(41, 41, 40, 1);
  font-weight: 400;
  align-self: start;
  margin-top: 20px;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
</style>

<div class="invite-friends" role="region" aria-label="Invite Friends Program">
  <h1 class="invite-title">Приглашай подруг!</h1>
  
  <div class="referral-container">
    <h2 class="referral-label">Ссылка для приглашения:</h2>
    <a href="#" class="referral-link">
      здесь будет реферальная ссылка
    </a>
    <button class="share-button" aria-label="Share referral link">
      Поделиться ссылкой
    </button>
  </div>

  <div class="bonus-container">
    <img 
      src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/friend-invite.jpg" 
      alt="Referral program bonus illustration" 
      class="bonus-image"
    />
    <p class="bonus-description">
      <span class="bonus-text-regular">
        Приглашай друзей в наш салон и получи
      </span>
      500 бонусов
      <span class="bonus-text-regular">
        за каждую подругу Твой друг также получит
      </span>
      500 бонусов
      <span class="bonus-text-regular">на счет</span>
    </p>
    <p class="bonus-value">1 бонус = 1 рубль</p>
    <p class="bonus-terms">
      Баллами можно оплачивать до 50% процентов от стоимости услуги
    </p>
  </div>
</div>