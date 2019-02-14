<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailUpload */

$this->title = 'Update Detail Upload: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Detail Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail, 'url' => ['view', 'id' => $model->id_detail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-upload-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-edit', [
        'model' => $model,
        'berkas' => $berkas
    ]) ?>

</div>
