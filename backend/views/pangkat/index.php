<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PangkatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pangkat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pangkat-index">

    <h3>Daftar Pangkat Kantor DJKN Pekanbaru</h3>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Pangkat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header' => 'No'],


            'nama_pangkat',
            'golongan',
            'ruang',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi'
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
