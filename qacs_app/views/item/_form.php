<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ItemDescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PurchaseDate')->textInput() ?>

    <?= $form->field($model, 'UnitCost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UnitPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QuantityOnHand')->textInput() ?>

    <?= $form->field($model, 'VendorID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
