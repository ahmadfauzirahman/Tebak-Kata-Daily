<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Web */

$this->title = 'Update Web: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Webs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="web-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
