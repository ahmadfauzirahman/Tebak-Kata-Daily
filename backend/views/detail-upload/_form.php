<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailUpload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-upload-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_upload')->textInput() ?>

    <?= $form->field($model, 'sk_cpns')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sk_pns')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sk_pangkat_terakhir')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ijazah_pangkat_terakhir')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ijazah_setingkat_lebih_tinggi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sk_ijin_belajar')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'surat_perintah _tugas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sah_skp_ppk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'skp_kerja_awal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'skp_akhir_tahun')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penilaian_kerja')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stlud_kpu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sk_masa_kerja')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nomatif_bkn')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
