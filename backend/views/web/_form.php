<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Web */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="web-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_web')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
