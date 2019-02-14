<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailUpload */

$this->title = 'Create Detail Upload';
$this->params['breadcrumbs'][] = ['label' => 'Detail Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-upload-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
