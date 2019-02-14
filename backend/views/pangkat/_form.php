<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pangkat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pangkat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pangkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ruang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
