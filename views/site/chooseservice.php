<?php
use app\models\ProductSearch;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ProductMarks;
$this->title = 'Eva_bot';
?>

<div class="container">
<div class="productFilterHeading flexColumn">
        <div class="flexRow">
            <h2>Выбор услуги</h2>
        </div>

        <div class="filters">
            <div class="search ">
                <?php $form = ActiveForm::begin([
                    // 'method' => 'get',
                    // 'action' => ['products/index'], add action for this page
                    'id' => 'search-form',
                ]); ?>
                <figure>
                    <img src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/photo_2024-12-05_15-14-34.jpg" alt="search">
                </figure>
                <?= $form->field($searchModel, 'search')->textInput(['name' => 'search', 'onblur' => 'document.getElementById("search-form").submit();', 'placeholder' => 'Поиск']) ?>
                <button type="submit" style="position:absolute;left:-9999px;width:0;height:0;">Поиск</button>
                <?php ActiveForm::end(); ?>
            </div>
            <section class="mainSliderWithSystem">
                <?= Html::a("Акции", ['', 'mark' => ProductMarks::MARK_HOT], ["id" => "hotLink"]) ?>
                <?= Html::a("LPG-массаж", ['', 'chip' => true], ["id" => "chipLink"]) ?>
                <?= Html::a("Лазерная эпиляция", ['', 'mark' => ProductMarks::MARK_NEW], ["id" => "newLink"]) ?>
                <?= Html::a("Абонементы на массаж", ['', 'mark' => ProductMarks::MARK_SALE], ["id" => "saleLink"]) ?>
                <?= Html::a("Лазерная эпиляция для мужчин", ['', 'mark' => ProductMarks::MARK_SALE], ["id" => "saleLink"]) ?>
                <?= Html::a("Массаж", ['', 'mark' => ProductMarks::MARK_SALE], ["id" => "saleLink"]) ?>
                <?= Html::a("Массаж", ['', 'mark' => ProductMarks::MARK_SALE], ["id" => "saleLink"]) ?>
                <?= Html::a("Процедуры face", ['', 'mark' => ProductMarks::MARK_SALE], ["id" => "saleLink"]) ?>
            </section>
            <section class="serviceOprionsSection">
                <h2>Массаж</h2>
                <div class="service-card">
                <div class="service-content">
                    <div class="image-wrapper">
                    <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/service-example.jpg" alt="Classic body massage service" class="service-image" />
                    </div>
                    <div class="details-wrapper">
                    <div class="service-details">
                        <div class="info-container">
                        <div class="service-title">Классический массаж тела</div>
                        <div class="service-duration">60 минут</div>
                        </div>
                        <div class="service-pricee">2600₽</div>
                    </div>
                    <div class="action-container">
                        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/Info-icon.jpg" alt="" class="action-icon" />
                        <button class="select-button" tabindex="0"><?= Html::a('Выбрать', ['signup/signup'], ['class'=>'custom-link'])?></button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="service-card">
                <div class="service-content">
                    <div class="image-wrapper">
                    <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/service-example.jpg" alt="Classic body massage service" class="service-image" />
                    </div>
                    <div class="details-wrapper">
                    <div class="service-details">
                        <div class="info-container">
                        <div class="service-title">Классический массаж тела</div>
                        <div class="service-duration">60 минут</div>
                        </div>
                        <div class="service-pricee">2600₽</div>
                    </div>
                    <div class="action-container">
                        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/Info-icon.jpg" alt="" class="action-icon" />
                        <button class="select-button" tabindex="0">Выбрать</button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="service-card">
                <div class="service-content">
                    <div class="image-wrapper">
                    <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/service-example.jpg" alt="Classic body massage service" class="service-image" />
                    </div>
                    <div class="details-wrapper">
                    <div class="service-details">
                        <div class="info-container">
                        <div class="service-title">Классический массаж тела</div>
                        <div class="service-duration">60 минут</div>
                        </div>
                        <div class="service-pricee">2600₽</div>
                    </div>
                    <div class="action-container">
                        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/Info-icon.jpg" alt="" class="action-icon" />
                        <button class="select-button" tabindex="0">Выбрать</button>
                    </div>
                    </div>
                </div>
                </div>
        </section>
            <section class="serviceOprionsSection">
                <?= Html::a('<h2>Лазерная эпиляция</h2>',
                    ['signup/service-info'],
                    ['class' => 'custom-link']
                )
                
                ?>
                <div class="service-card">
                <div class="service-content">
                    <div class="image-wrapper">
                    <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/service-example.jpg" alt="Classic body massage service" class="service-image" />
                    </div>
                    <div class="details-wrapper">
                    <div class="service-details">
                        <div class="info-container">
                        <div class="service-title">Классический массаж тела</div>
                        <div class="service-duration">60 минут</div>
                        </div>
                        <div class="service-pricee">2600₽</div>
                    </div>
                    <div class="action-container">
                        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/Info-icon.jpg" alt="" class="action-icon" />
                        <button class="select-button" tabindex="0">Выбрать</button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="service-card">
                <div class="service-content">
                    <div class="image-wrapper">
                    <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/service-example.jpg" alt="Classic body massage service" class="service-image" />
                    </div>
                    <div class="details-wrapper">
                    <div class="service-details">
                        <div class="info-container">
                        <div class="service-title">Классический массаж тела</div>
                        <div class="service-duration">60 минут</div>
                        </div>
                        <div class="service-pricee">2600₽</div>
                    </div>
                    <div class="action-container">
                        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/Info-icon.jpg" alt="" class="action-icon" />
                        <button class="select-button" tabindex="0">Выбрать</button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="service-card">
                <div class="service-content">
                    <div class="image-wrapper">
                    <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/service-example.jpg" alt="Classic body massage service" class="service-image" />
                    </div>
                    <div class="details-wrapper">
                    <div class="service-details">
                        <div class="info-container">
                        <div class="service-title">Классический массаж тела</div>
                        <div class="service-duration">60 минут</div>
                        </div>
                        <div class="service-pricee">2600₽</div>
                    </div>
                    <div class="action-container">
                        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/Info-icon.jpg" alt="" class="action-icon" />
                        <button class="select-button" tabindex="0">Выбрать</button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="service-card">
                <div class="service-content">
                    <div class="image-wrapper">
                    <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/service-example.jpg" alt="Classic body massage service" class="service-image" />
                    </div>
                    <div class="details-wrapper">
                    <div class="service-details">
                        <div class="info-container">
                        <div class="service-title">Классический массаж тела</div>
                        <div class="service-duration">60 минут</div>
                        </div>
                        <div class="service-pricee">2600₽</div>
                    </div>
                    <div class="action-container">
                        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/Info-icon.jpg" alt="" class="action-icon" />
                        <button class="select-button" tabindex="0">Выбрать</button>
                    </div>
                    </div>
                </div>
                </div>
        </section>
            <section class="serviceOprionsSection">
                <h2>Абонименты на массаж</h2>
                <div class="service-card">
                <div class="service-content">
                    <div class="image-wrapper">
                    <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/service-example.jpg" alt="Classic body massage service" class="service-image" />
                    </div>
                    <div class="details-wrapper">
                    <div class="service-details">
                        <div class="info-container">
                        <div class="service-title">Классический массаж тела</div>
                        <div class="service-duration">60 минут</div>
                        </div>
                        <div class="service-pricee">2600₽</div>
                    </div>
                    <div class="action-container">
                        <img loading="lazy" src="https://raw.githubusercontent.com/Therealkosbruh/svg/refs/heads/main/Info-icon.jpg" alt="" class="action-icon" />
                        <button class="select-button" tabindex="0">Выбрать</button>
                    </div>
                    </div>
                </div>
        </section>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.mainSliderWithSystem a');
    const activeButtonId = localStorage.getItem('activeButtonId');
    if (activeButtonId) {
        const activeButton = document.getElementById(activeButtonId);
        if (activeButton) {
            activeButton.classList.add('active');
        }
    }
    buttons.forEach(button => {
        button.addEventListener('click', function () {
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            localStorage.setItem('activeButtonId', this.id);
        });
    });
});
</script>
</div>
