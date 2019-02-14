<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pangkat */

$this->title = $model->id_pangkat;
$this->params['breadcrumbs'][] = ['label' => 'Pangkats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pangkat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pangkat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pangkat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pangkat',
            'nama_pangkat',
            'golongan',
            'ruang',
        ],
    ]) ?>

</div>
