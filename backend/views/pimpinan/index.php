<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-sm-12">
            <h3>Berkas Ajuan Kenaikan Pangkat</h3>
            <hr>

           
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
                foreach ($daftar as $data) :
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data->upload->nip ?></td>
                    <td><?= $data->upload->pegawais->nama_peg ?></td>
                    <td><?= $data->upload->tgl_upload ?></td>
                    <td><?= $data->upload->status
                        ?></td>
                <td><?php if ($data->upload->status == 'wait') : ?><a href="<?= yii\helpers\Url::to(['setuju', 'id' => $data->upload->nip]) ?>" class="btn btn-xs btn-primary" onclick="return confirm('apakah anda yakin?')">Setujui Berkas</a> <?php endif; ?> <a href="<?= yii\helpers\Url::to(['detail', 'id' => $data->id_upload]) ?>" class="btn btn-xs btn-default">Rincian Berkas</a></td></tr>
                <?php 
                endforeach;
            } ?>
             </tbody>
            </table>
            </div>
                 

        </div>
    </div>
</div>
