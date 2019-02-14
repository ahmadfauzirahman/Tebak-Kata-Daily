<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailUploadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-upload-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_detail') ?>

    <?= $form->field($model, 'id_upload') ?>

    <?= $form->field($model, 'sk_cpns') ?>

    <?= $form->field($model, 'sk_pns') ?>

    <?= $form->field($model, 'sk_pangkat_terakhir') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'ijazah_pangkat_terakhir') ?>

    <?php // echo $form->field($model, 'ijazah_setingkat_lebih_tinggi') ?>

    <?php // echo $form->field($model, 'sk_ijin_belajar') ?>

    <?php // echo $form->field($model, 'surat_perintah _tugas') ?>

    <?php // echo $form->field($model, 'sah_skp_ppk') ?>

    <?php // echo $form->field($model, 'skp_kerja_awal') ?>

    <?php // echo $form->field($model, 'skp_akhir_tahun') ?>

    <?php // echo $form->field($model, 'penilaian_kerja') ?>

    <?php // echo $form->field($model, 'stlud_kpu') ?>

    <?php // echo $form->field($model, 'sk_masa_kerja') ?>

    <?php // echo $form->field($model, 'nomatif_bkn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
