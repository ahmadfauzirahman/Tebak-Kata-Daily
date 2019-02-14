<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pegawai */

$this->title = $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nip], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nip], [
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
            'nip',
            'nama_peg',
            'unit',
            'jabatan',
            'pangkat',
            'no_hp',
            'tmpt_lahir',
            'jk',
            'alamat',
            'agama',
            'email:email',
            'foto:ntext',
            'umur',
            'status',
        ],
    ]) ?>

</div>
