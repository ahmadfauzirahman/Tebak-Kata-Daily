<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-sm-12">
            <a href="<?= yii\helpers\Url::to(['index']) ?>" class="btn btn-primary btn-sm">Kembali</a><p></p>
            <h3>Rincian Berkas Ajuan Kenaikan Pangkat</h3>
            <hr>

           
            <h1></h1>

            <table class="table table-stripped " style="font-weight: bold">
		<tbody><tr>
			<td>NIP</td>
			<td>: <?= $daftar->upload->nip ?></td>
		</tr>
		<tr>
			<td>Nama Pegawai</td>
			<td>: <?= $daftar->upload->pegawais->nama_peg ?></td>
		</tr>

	    </tbody></table>


        <table class="table table-stripped table-bordered" >
		<tbody>
        <tr>
        
        <th>Nama Berkas</th>
        <th>Berkas</th>
        <th>Status</th>
        <th>Aksi</th>
        </tr>
        <tr>
			<td>Fotokopi sah SK CPNS ( untuk kenaikan pangkat pertama )</td>
			<td><?= $daftar->sk_cpns ?></td>
<td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                        } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>
		<tr>
			<td>Fotokopi sah SK PNS ( untuk kenaikan pangkat pertama )</td>
			<td><?= $daftar->sk_pns ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Fotokopi sah SK Pangkat Terakhir</td>
			<td><?= $daftar->sk_pangkat_terakhir ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Fotokopi sah ijazah sesuai dengan SK pangkat terakhir</td>
			<td><?= $daftar->ijazah_pangkat_terakhir ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Fotokopi sah ijazah setingkat lebih tinggi + transkip nilai bagi yang memperoleh peningkatan pendidikan</td>
			<td><?= $daftar->ijazah_setingkat_lebih_tinggi ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Sk Ijin BelajarFotokopi sah SK ijin Belajar/Surat Keterangan ttd Sekretaris KPU Provinsi (apabila no.5 terpenuhi)</td>
			<td><?= $daftar->sk_ijin_belajar ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Fotokopi surat perintah Tugas Belajar bagi yang menjalani tugas belajar</td>
			<td><?= $daftar->surat_perintah_tugas ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Fotokopi sah SKP/PPK Tahun 2015 & 2016</td>
			<td><?= $daftar->sah_skp_ppk ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>a. SKP sebagai rencana kerja awal tahun</td>
			<td><?= $daftar->skp_kerja_awal ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>b. Capaian SKP pada akhir tahun</td>
			<td><?= $daftar->skp_akhir_tahun ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>c. penilaian prestasi kerja (Januari - Desember)</td>
			<td><?= $daftar->penilaian_kerja ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Fotokopi sah STLUD yang diterbitkan Setjen KPU (untuk KP II/d sd ke III/a)</td>
			<td><?= $daftar->stlud_kpu ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Fotokopi sah SK Peninjauan Masa Kerja</td>
			<td><?= $daftar->sk_masa_kerja ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

        <tr>
			<td>Tercantum dalam nominatif BKN</td>
			<td><?= $daftar->nomatif_bkn ?></td>
            <td><?php if ($daftar->status == 'lengkap') { ?><i class="fa fa-check"></i><?php 
                                                                                    } ?></td>
            <td><a href="<?= Yii::$app->request->baseUrl . "/foto/" . $daftar->sk_pns ?>" target="_blank" class="btn btn-primary btn-sm">Lihat</a></td>
		</tr>

	    </tbody></table>
         </div>
                 

        </div>
    </div>
</div>
