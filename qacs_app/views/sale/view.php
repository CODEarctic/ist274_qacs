<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Sale */

$this->title = $model->SaleID;
$this->params['breadcrumbs'][] = ['label' => 'Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-view">



    <div style="height: 2em;">
    <p>
        <div class="pull-left">
        <?= Html::a('Back To All Sales', ['index'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->SaleID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SaleID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </p>
    </div>

    <h1> Sale #<?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $saleinfo,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'SaleID',
            'SaleItemID',
            'PurchaseDate',
            'ItemDescription',
            'UnitPrice',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
