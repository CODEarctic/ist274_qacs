<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sale-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerID')->textInput() ?>

    <?= $form->field($model, 'EmployeeID')->textInput() ?>

    <?= $form->field($model, 'SaleDate')->textInput() ?>

    <?= $form->field($model, 'SubTotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
