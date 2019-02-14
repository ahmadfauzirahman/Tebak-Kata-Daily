<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'nama_peg') ?>

    <?= $form->field($model, 'unit') ?>

    <?= $form->field($model, 'jabatan') ?>

    <?= $form->field($model, 'pangkat') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <?php // echo $form->field($model, 'tmpt_lahir') ?>

    <?php // echo $form->field($model, 'jk') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'umur') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
