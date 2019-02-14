<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $mod9el common\models\Pangkat */

$this->title = 'Update Pangkat: '.$model->nama_pangkat;
$this->params['breadcrumbs'][] = ['label' => 'Pangkat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pangkat, 'url' => ['view', 'id' => $model->id_pangkat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pangkat-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
