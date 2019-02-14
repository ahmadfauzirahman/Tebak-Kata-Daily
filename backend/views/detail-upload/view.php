<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetailUpload */

$this->title = $model->id_detail;
$this->params['breadcrumbs'][] = ['label' => 'Detail Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-upload-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_detail], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_detail], [
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
            'id_detail',
            'id_upload',
            'sk_cpns:ntext',
            'sk_pns:ntext',
            'sk_pangkat_terakhir:ntext',
            'status',
            'ijazah_pangkat_terakhir:ntext',
            'ijazah_setingkat_lebih_tinggi:ntext',
            'sk_ijin_belajar:ntext',
            'surat_perintah _tugas:ntext',
            'sah_skp_ppk:ntext',
            'skp_kerja_awal:ntext',
            'skp_akhir_tahun:ntext',
            'penilaian_kerja:ntext',
            'stlud_kpu:ntext',
            'sk_masa_kerja:ntext',
            'nomatif_bkn:ntext',
        ],
    ]) ?>

</div>
