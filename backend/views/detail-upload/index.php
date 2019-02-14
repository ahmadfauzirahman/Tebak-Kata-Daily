<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailUploadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Uploads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-upload-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Upload', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detail',
            'id_upload',
            'sk_cpns:ntext',
            'sk_pns:ntext',
            'sk_pangkat_terakhir:ntext',
            //'status',
            //'ijazah_pangkat_terakhir:ntext',
            //'ijazah_setingkat_lebih_tinggi:ntext',
            //'sk_ijin_belajar:ntext',
            //'surat_perintah _tugas:ntext',
            //'sah_skp_ppk:ntext',
            //'skp_kerja_awal:ntext',
            //'skp_akhir_tahun:ntext',
            //'penilaian_kerja:ntext',
            //'stlud_kpu:ntext',
            //'sk_masa_kerja:ntext',
            //'nomatif_bkn:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
