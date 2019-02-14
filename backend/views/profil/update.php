<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pegawai */

$this->title = 'Update Pegawai';
?>
<div class="pegawai-update">

    <a href="<?= yii\helpers\Url::to(['index']) ?>" class="btn btn-primary btn-sm">Kembali</a>
    <h2></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
