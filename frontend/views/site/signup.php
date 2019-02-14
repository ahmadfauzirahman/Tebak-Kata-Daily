<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model1, 'registrasiPemohonKlasfikasiPemohonID')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(common\models\SpipKlasifikasiPemohon::find()->all(),
            'klasifikasiPemohonID', 'klasifikasiPemohonNama'),
        'language' => 'de',
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model1, 'registrasiPemohonKategoriTandaPengenalID')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(common\models\SpipKategoriTandaPengenal::find()->all(),
            'kategoriTandaPengenalID', 'kategoriTandaPengenalNama'),
        'language' => 'de',
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>


    <?= $form->field($model1, 'registrasiPemohonNomorIdentitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'registrasiPemohonPekerjaanID')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(common\models\SpipPekerjaan::find()->all(),
            'pekerjaanID', 'pekerjaanNama'),
        'language' => 'de',
        'options' => ['placeholder' => 'Pilih pekerjaan ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model1, 'registrasiPemohonAlamat')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'registrasiPemohonNoTelp')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'registrasiPemohonNoFax')->textInput(['maxlength' => true]) ?>




    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
