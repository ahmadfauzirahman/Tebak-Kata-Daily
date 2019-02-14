<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-sm-12">
            <h3>Pengajuan Berkas</h3>
            <hr>

            <a href="<?= yii\helpers\Url::to(['upload']) ?>" class="btn btn-sm btn-primary">Upload Berkas</a>
            <h1></h1>

             <table class="table table-stripped table-bordered">
             <thead>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Upload</th>
                <th>Status Berkas</th>
                <th>Aksi</th>
             </thead>
             <tbody>
                <?php if (isset($daftar)) { ?>
                <?php $i = 1;
                foreach ($daftar as $data) {
                    ?>
                    <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data->nip ?></td>
                    <td><?= $data->pegawais->nama_peg ?></td>
                    <td><?= $data->tgl_upload ?></td>
                    <td><?= $data->status ?></td>
                    <td><a href="<?= yii\helpers\Url::to(['edit-upload']) ?>" class="btn btn-xs btn-default">Ubah Berkas</a> <a href="<?= yii\helpers\Url::to(['detail', 'id' => $data->id_upload]) ?>" class="btn btn-xs btn-primary">Rincian Berkas</a></td></tr>
                <?php 
            }
        } ?>
             </tbody>
            </table>
            </div>
                 

        </div>
    </div>
</div>
