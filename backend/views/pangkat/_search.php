<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PangkatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pangkat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_pangkat') ?>

    <?= $form->field($model, 'nama_pangkat') ?>

    <?= $form->field($model, 'golongan') ?>

    <?= $form->field($model, 'ruang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
