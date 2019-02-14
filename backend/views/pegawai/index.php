<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Tambah Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header' => 'No'],

            'nip',
            'nama_peg',
            [
                'label' => 'Unit',
                'value' => 'units.nama_unit',

            ],
            [
                'label' => 'Jabatan',
                'value' => 'jabatans.nama_jabatan',

            ],
            [
                'label' => 'Pangkat',
                'value' => 'pangkats.nama_pangkat',

            ],
            //'no_hp',
            //'tmpt_lahir',
            //'jk',
            //'alamat',
            //'agama',
            //'email:email',
            //'foto:ntext',
            //'umur',
            //'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi'
            ],
        ],
    ]); ?>
</div>
