<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Pangkat */

$this->title = 'Tambah Pangkat';
$this->params['breadcrumbs'][] = ['label' => 'Pangkat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pangkat-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
