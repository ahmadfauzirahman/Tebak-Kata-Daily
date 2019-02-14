<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailUpload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-upload-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sk_cpns')->fileInput() ?>

    <?= $form->field($model, 'sk_pns')->fileInput() ?>

    <?= $form->field($model, 'sk_pangkat_terakhir')->fileInput() ?>

    <?= $form->field($model, 'ijazah_pangkat_terakhir')->fileInput() ?>

    <?= $form->field($model, 'ijazah_setingkat_lebih_tinggi')->fileInput() ?>

    <?= $form->field($model, 'sk_ijin_belajar')->fileInput() ?>

    <?= $form->field($model, 'surat_perintah_tugas')->fileInput() ?>

    <?= $form->field($model, 'sah_skp_ppk')->fileInput() ?>

    <?= $form->field($model, 'skp_kerja_awal')->fileInput() ?>

    <?= $form->field($model, 'skp_akhir_tahun')->fileInput() ?>

    <?= $form->field($model, 'penilaian_kerja')->fileInput() ?>

    <?= $form->field($model, 'stlud_kpu')->fileInput() ?>

    <?= $form->field($model, 'sk_masa_kerja')->fileInput() ?>

    <?= $form->field($model, 'nomatif_bkn')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
