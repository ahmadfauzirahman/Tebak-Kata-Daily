<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Soal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kata_acak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jawaban')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
