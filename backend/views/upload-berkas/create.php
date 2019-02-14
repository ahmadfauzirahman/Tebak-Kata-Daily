<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailUpload */

$this->title = 'Create Detail Upload';
$this->params['breadcrumbs'][] = ['label' => 'Detail Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-upload-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
