<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Pegawai */

$this->title = 'Tambah Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
        'model2' => $model2,
    ]) ?>

</div>
