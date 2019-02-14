<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Unit;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_peg')->textInput(['maxlength' => true]) ?>

    <?php
    //use app\models\Country;
    $units = Unit::find()->all();

    //use app\models\Country;
    $pangkat = \common\models\Pangkat::find()->all();

    //use app\models\Country;
    $jabatan = \common\models\Jabatan::find()->all();

    //use yii\helpers\ArrayHelper;
    $listData = ArrayHelper::map($units, 'id_unit', 'nama_unit');

    //use yii\helpers\ArrayHelper;
    $listData2 = ArrayHelper::map($pangkat, 'id_pangkat', 'nama_pangkat');
    //use yii\helpers\ArrayHelper;
    $listData3 = ArrayHelper::map($jabatan, 'id_jabatan', 'nama_jabatan');
    ?>

    <?= $form->field($model, 'unit')->dropDownList($listData, ['prompt' => 'Pilih Unit Pegawai...']) ?>

    <?= $form->field($model, 'jabatan')->dropDownList($listData3, ['prompt' => 'Pilih Jabatan Pegawai...']) ?>

    <?= $form->field($model, 'pangkat')->dropDownList($listData2, ['prompt' => 'Pilih Pangkat Pegawai...']) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmpt_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList(['laki-laki' => 'Laki-laki', 'perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->dropDownList(['islam' => 'Islam', 'kristen' => 'Kristen', 'katolik' => 'Katolik', 'budha' => 'Budha', ], ['prompt' => 'Pilih Agama Pegawai..']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <?= $form->field($model, 'umur')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
