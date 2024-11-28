<?php

/** @var yii\web\View $this */
/** @var $stocks */

use yii\helpers\Html;

$this->title = 'Акции';
?>

<div class="container" style="padding-bottom: 20px;">
    <h1><?= Html::encode($this->title) ?></h1>
    <div style=" display: flex; flex-direction: column; gap: 20px;">
        <?php foreach ($stocks as $key => $stock) { ?>

            <?= Html::img($stock->Stock_Image, ['alt' => 'Акция', 'style' => 'width: 100%']) ?>

        <?php } ?>
    </div>
</div>