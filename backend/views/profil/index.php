<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-sm-12">
                <div class="well">
                    <h3>Profil Pegawai</h3>
                    <h1></h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                        <a href="#" class="profile-picture">
						<img src="<?= Yii::$app->request->baseUrl . "/foto/" . $pegawai->foto ?>" width="100%" class="img-responsive img-circle" />
					    </a>    
                        </div>

                        <div class="col-md-9">
                            <h3><?= $pegawai->nama_peg ?></h3>
                            <p><?= $pegawai->nip ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                        <p><?= $pegawai->alamat ?></p>
                        <p>Bekerja Sebagai <?= $pegawai->jabatans->nama_jabatan ?>, <?= $pegawai->units->nama_unit ?></p>
                            <p><?= $pegawai->tmpt_lahir ?></p>

                            <a href="<?= yii\helpers\Url::to(['profil/edit']) ?>" class="btn btn-primary">Edit Profil</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
