<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Berkas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berkas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_berkas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
