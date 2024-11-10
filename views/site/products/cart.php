<?php

/** @var yii\web\View $this */
/** @var $product */
/** @var $mainImage array */

use yii\helpers\Html;

$this->title = "Корзина";
?>

<div class="container">
    <section class="cartHeader flexRow">
        <h3>Корзина</h3>
        <button>Очистить корзину</button>
    </section>
    <section class="productsAtCart">
        <div class="productCart">
            <div class="leftSide">
                <img src="/web/img/product/productStock.png" alt="product">
            </div>
            <div class="rightSide flexColumn">
          <span class="productCartName">
            Наушники AirPods 2
          </span>
                <div class="productCartColorBlock flexRow">
                    <span class="productCartColor">Цвет: </span>
                    <span class="productCartColorName">Черный</span>
                </div>
                <div class="productCartPrice">
                    <span>10 990 ₽</span>
                </div>
                <div class="productCartCount flexRow">
                    <button>-</button>
                    <span class="countNumber">1</span>
                    <button>+</button>
                </div>
            </div>
        </div>
        <div class="productCart">
            <div class="leftSide">
                <img src="/web/img/product/productStock.png" alt="product">
            </div>
            <div class="rightSide flexColumn">
          <span class="productCartName">
            Наушники AirPods 2
          </span>
                <div class="productCartColorBlock flexRow">
                    <span class="productCartColor">Цвет: </span>
                    <span class="productCartColorName">Черный</span>
                </div>
                <div class="productCartPrice">
                    <span>10 990 ₽</span>
                </div>
                <div class="productCartCount flexRow">
                    <button>-</button>
                    <span class="countNumber">1</span>
                    <button>+</button>
                </div>
            </div>
        </div>
        <div class="productCart">
            <div class="leftSide">
                <img src="/web/img/product/productStock.png" alt="product">
            </div>
            <div class="rightSide flexColumn">
          <span class="productCartName">
            Наушники AirPods 2
          </span>
                <div class="productCartColorBlock flexRow">
                    <span class="productCartColor">Цвет: </span>
                    <span class="productCartColorName">Черный</span>
                </div>
                <div class="productCartPrice">
                    <span>10 990 ₽</span>
                </div>
                <div class="productCartCount flexRow">
                    <button>-</button>
                    <span class="countNumber">1</span>
                    <button>+</button>
                </div>
            </div>
        </div>
    </section>
    <section class="contactInfoBlock">
        <h3>Контактная информация</h3>
        <form action="" class="contactForm flexColumn">
            <input type="email" name="почта" id="email" placeholder="E-mail">
            <input type="tel" name="телефон" id="telephone" placeholder="Телефон">
            <span>Адрес доставки</span>
            <input type="text" name="город" id="gorod" placeholder="Город">
            <input type="text" name="улицы" id="ulica" placeholder="Улица">
            <div class="flexRow" style="gap: 10px; margin: 0;">
                <input type="text" name="дом" id="dom" placeholder="Дом">
                <input type="text" name="квартира" id="kvartira" placeholder="Квартира">
            </div>
            <textarea type="text" name="комментарий" id="comment" placeholder="Комментарий"></textarea>
        </form>
    </section>
    <section class="cartPayment">
        <h3>Способы оплаты</h3>
        <div class="cartPaymentBlocks flexColumn">
            <div class="methodWithoutSplit">
                <div class="flexColumn cards payMethod active" style="gap: 6px;">
                    <img src="/web/img/icons/payments/cards.svg" alt="">
                    <span>
              Картой
            </span>
                </div>
                <div class="flexColumn sbp payMethod" style="gap: 6px;">
                    <img src="/web/img/icons/payments/sbp.svg" alt="">
                    <span>
              СБП
            </span>
                </div>
            </div>
            <div class="flexRow splitPayment payMethod">
                <div class="leftSideSplit flexColumn">
                    <img src="/web/img/icons/payments/split.svg" alt="">
                    <span>Разбить в сплит</span>
                </div>
                <div class="rightSideSplit flexColumn">
                    <span>15 470 ₽</span>
                    <span>3 867 ₽x4</span>
                </div>
            </div>
        </div>
    </section>
    <section class="promo flexRow">
        <span>Промокод: </span>
        <input type="text" class="promoInput">
    </section>
    <section class="flexColumn summary">
        <div class="flexRow summaryInfo">
        <span>
          Итого без скидки:
        </span>
            <span>
          20 470 ₽
        </span>
        </div>
        <div class="flexRow summaryInfo">
        <span>
          Ваша выгода:
        </span>
            <span>
          5 000 ₽
        </span>
        </div>
        <div class="flexRow summaryInfo">
        <span>
          Итого со скидкой:
        </span>
            <span>
          15 470 ₽
        </span>
        </div>
        <span class="summaryCount">3 товара</span>
    </section>
    <a href="#" class="showMoreButton showAllReviewButton">
        Оформить заказ
    </a>
</div>
