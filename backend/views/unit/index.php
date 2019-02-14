<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Tambah Unit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_unit',
            'nama_unit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
