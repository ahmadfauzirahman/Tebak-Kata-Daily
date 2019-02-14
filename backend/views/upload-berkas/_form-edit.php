<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailUpload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-upload-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php foreach ($berkas as $data) { ?>
        <label for=""><?= $data->berkass->nama_berkas ?></label>
        <?= $form->field($model, 'file[]')->fileInput(['value' => 'asd'])->label(false) ?>
   <?php 
} ?>
   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
