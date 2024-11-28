<?php

/** @var yii\web\View $this */
/** @var $product */
/** @var $model */
/** @var $afterBuy */

/** @var $mainImage array */

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

$this->title = "Корзина";

if (isset($afterBuy)){
    $this->registerJs(
        "localStorage.removeItem('cartItems'); alert('Заявка на заказ оформлена!')",
        View::POS_END,
        'delete-local-storage'
    );
}

?>

<style>
    .help-block{
        color: red;
        padding: 5px;
    }
    .form-group{
        width: 100%;
    }
    label{
        display: none   ;
    }

</style>

<div class="container">
    <section class="cartHeader flexRow">
        <h3>Корзина</h3>
        <button>Очистить корзину</button>
    </section>
    <section class="productsAtCart">

    </section>
    <?php $form = ActiveForm::begin([
        'id' => 'contact-form',
        'method' => 'post',
        'action' => ['cart/buy']
    ]); ?>
    <section class="contactInfoBlock">
        <h3>Контактная информация</h3>
        <div class="contactForm flexColumn">
            <?= $form->field($model, 'email', [
                'labelOptions' => [],
                'inputOptions' => ['placeholder' => 'Email']
            ]) ?>
            <?= $form->field($model, 'phone', [
                'labelOptions' => [],
                'inputOptions' => ['placeholder' => 'Телефон']
            ]) ?>
            <span>Адрес доставки</span>
            <?= $form->field($model, 'city', [
                'labelOptions' => [],
                'inputOptions' => ['placeholder' => 'Город']
            ]) ?>
            <?= $form->field($model, 'street', [
                'labelOptions' => [],
                'inputOptions' => ['placeholder' => 'Улица']
            ]) ?>
            <div class="flexRow" style="gap: 10px; margin: 0;">
                <?= $form->field($model, 'house', [
                    'labelOptions' => [],
                    'inputOptions' => ['placeholder' => 'Дом']
                ]) ?>
                <?= $form->field($model, 'apartment', [
                    'labelOptions' => [],
                    'inputOptions' => ['placeholder' => 'Квартира']
                ]) ?>
            </div>
            <?= $form->field($model, 'comment', [
                'labelOptions' => [],
                'inputOptions' => ['placeholder' => 'Примечание'],
            ])->textarea(['rows' => 6]) ?>
<!--            <textarea name="comment" id="comment" placeholder="Комментарий"></textarea>-->
        </div>
    </section>
        <section class="cartPayment">
            <h3>Метод оплаты</h3>
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
                        <span class="splitSpan">0 ₽</span>
                        <span class="splitSpanParts">0 ₽x4</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="cartPayment">
            <h3>Тип оплаты</h3>
            <div class="cartPaymentBlocksType flexColumn">
                    <div class="flexColumn cards payType active" style="gap: 6px;">
                        <span>
                        Оплата при получении
                    </span>
                    </div>
                    <div class="flexColumn sbp payType" style="gap: 6px;">
                        <span>
                        Оплата онлайн в приложении
                    </span>
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
            <span class="withoutDiscount">
                0 ₽
            </span>
        </div>
        <div class="flexRow summaryInfo">
            <span>
                Ваша выгода:
            </span>
            <span class="discount">
                0 ₽
            </span>
        </div>
        <div class="flexRow summaryInfo">
            <span>
                Итого со скидкой:
            </span>
            <span class="finalPriceSpan">
                0 ₽
            </span>
        </div>
        <span class="summaryCount">3 товара</span>
    </section>
            <input type="hidden" name="payment_method" value="Картой">
            <input type="hidden" name="products" id="productsData">
            <input type="hidden" name="summary" id="summary">
            <input type="hidden" name="payment_type" id="payment_type" value="Оплата при получении">


            <?php if (isset($afterBuy)){
                return;
            }else{
                echo Html::submitButton('Оформить заказ', ['class' => 'showMoreButton showAllReviewButton']);
            } ?>
    <?php ActiveForm::end() ?>
</div>