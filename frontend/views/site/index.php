<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container p-5">
    <div class="text-center p-4"><h1>Tebak Kata</h1></div>
        <h1>HIRE MEEE!!!!</h1>

    
    <div style="margin-top:50px">

    
    <h1 style="margin-bottom:20px; "><?php echo $soal[$nmr]->kata_acak ?></h1>
    <?php if (Yii::$app->session->hasFlash('success')) : ?>
        <div class="alert alert-success">
         <?= Yii::$app->session->getFlash('success') ?>
             
        </div>
        <?php endif; ?>
    <form action="<?= yii\helpers\Url::to(['site/index']) ?>" method="post">
    <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->getCsrfToken() ?>" />
    <input type="hidden" name="nmr" value="<?= $nmr ?>" />
    <input type="hidden" name="skor" value="<?= Yii::$app->session->hasFlash('danger') ? Yii::$app->session->getFlash('skr') : $skor ?>" />
    <input type="hidden" name="jwb" value="<?= $soal[$nmr]->jawaban ?>" />
        <input type="text" name="jawaban" class="form-control" placeholder="Masukkan Jabawan">
        <p></p>
        <?php if (Yii::$app->session->hasFlash('danger')) : ?>
        <div class="alert alert-danger">
         <?= Yii::$app->session->getFlash('danger') ?>
             
        </div>
        <?php endif; ?>
        <input type="submit" class="btn btn-primary">
    </form>

    
    </div>
    </div>
    
    
        


</div>
