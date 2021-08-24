 <!-- Begin Page Content -->
 <div class="container-fluid">
     <?= $this->session->flashdata('message'); ?>
     <!-- Page Heading -->
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <!-- <div class="card-header py-3">
             <Modal Export Excel -->
         <!-- <div class="card">
                     <div class="card-body">
                         <?php echo form_open_multipart('importdata/upload'); ?>
                         <?php if (!empty($this->session->flashdata('status'))) { ?>
                             <div class="alert alert-info" role="alert">
                                 <?= $this->session->flashdata('status'); ?></div>
                         <?php } ?>
                         <h5 class="card-title">Import dari Excel</h5>
                         <h6 class="card-subtitle mb-2 text-muted">Pilih Excel</h6>
                         <p class="card-text">
                             Apabila Anda memiliki data yang banyak, Anda dapat mengimport data tersebut.</p>
                         <form action="</?= base_url('data/index'); ?>" method="post" enctype="multipart/form-data">
                             <div class="form-row">
                                 <input type="file" class="form-control-file" name="importdata" id="importdata" accept=".xls,.xlsx, .csv">
                             </div>
                             <button type="submit" id="submit" name="import" class="btn-btn-primary">Import</button>
                             <?php echo form_close(); ?>
                     </div>
                 </div>  -->
         <div class="card shadow mb-4">
             <div class="card-header py-4">
                 <div class="m-0 font-weight-bold text-secondary"><?= $title; ?>

                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                         Tambah Data Training
                     </button>
                 </div>
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <td>Id Data Stroke</td>
                                     <td>Id pasien</td>
                                     <td>Jenis Kelamin</td>
                                     <td>Usia</td>
                                     <td>Keadaan Umum</td>
                                     <td>Kesadaran</td>
                                     <td>Tensi Darah</td>
                                     <td>Jumlah Denyut Nadi/menit</td>
                                     <td>Suara Napas</td>
                                     <td>Suhu Badan</td>
                                     <td>Jumlah Respirasi/menit</td>
                                     <td>SPO2</td>
                                     <td>Perubahan Sensorik</td>
                                     <td>Perubahan Motorik</td>
                                     <td>Irama Napas</td>
                                     <td>Bunyi Napas</td>
                                     <td>Henti Jantung</td>
                                     <td>Nadi Teraba</td>
                                     <td>Kulit</td>
                                     <td>Akral</td>
                                     <td>Pendarahan</td>
                                     <td>Turgor</td>
                                     <td>Sianosis</td>
                                     <td>Riwayat Alergi</td>
                                     <td>Medikasi</td>
                                     <td>Riwayat Stroke</td>
                                     <td>Refleks Cahaya</td>
                                     <td>Skala Nyeri</td>
                                     <td>Aktivitas Mobilisasi</td>
                                     <td>Risiko Jatuh</td>
                                     <td>CRT</td>
                                     <td>GCS</td>
                                     <td>Diagnosa</td>
                                     <td>Aksi</td>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $id_data_stroke_tim_medis = 1;
                                    foreach ($data_stroke_tim_medis as $dstm) :
                                        $jktm = "";
                                        switch ($dstm['jenis_kelamin']) {
                                            case 0:
                                                $jktm = "Perempuan";
                                                break;
                                            case 1:
                                                $jktm = "Laki-laki";
                                                break;
                                        }
                                        $kutm = "";
                                        switch ($dstm['keadaan_umum']) {
                                            case 0:
                                                $kutm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $kutm = "Sedang";
                                                break;
                                            case 2:
                                                $kutm = "Tidak Sadar";
                                                break;
                                            case 3:
                                                $kutm = "Lemah";
                                                break;
                                        }
                                        $sntm = "";
                                        switch ($dstm['suara_napas']) {
                                            case 0:
                                                $sntm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $sntm = "Normal";
                                                break;
                                            case 2:
                                                $sntm = "Tidak Normal";
                                                break;
                                        }
                                        $kstm = "";
                                        switch ($dstm['kesadaran']) {
                                            case 0:
                                                $kstm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $kstm = "Samno-Len";
                                                break;
                                            case 2:
                                                $kstm = "Sofor";
                                                break;
                                            case 3:
                                                $kstm = "CM";
                                                break;
                                            case 4:
                                                $kstm = "Apatis";
                                                break;
                                            case 5:
                                                $kstm = "Coma";
                                                break;
                                        }
                                        $pstm = "";
                                        switch ($dstm['perubahan_sensorik']) {
                                            case 0:
                                                $pstm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $pstm = "Tidak Berubah";
                                                break;
                                            case 2:
                                                $pstm = "Berubah";
                                                break;
                                        }
                                        $pmtm = "";
                                        switch ($dstm['perubahan_motorik']) {
                                            case 0:
                                                $pmtm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $pmtm = "Tidak Berubah";
                                                break;
                                            case 2:
                                                $pmtm = "Berubah";
                                                break;
                                        }
                                        $intm = "";
                                        switch ($dstm['irama_napas']) {
                                            case 0:
                                                $intm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $intm = "Tidak Teratur";
                                                break;
                                            case 2:
                                                $intm = "Teratur";
                                                break;
                                        }
                                        $bntm = "";
                                        switch ($dstm['bunyi_napas']) {
                                            case 0:
                                                $bntm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $bntm = "Vasikuler";
                                                break;
                                            case 2:
                                                $intm = "Stridor";
                                                break;
                                            case 3:
                                                $bntm = "Wheezing";
                                                break;
                                            case 4:
                                                $bntm = "Rondi";
                                                break;
                                        }
                                        $hjtm = "";
                                        switch ($dstm['henti_jantung']) {
                                            case 0:
                                                $hjtm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $hjtm = "Tidak";
                                                break;
                                            case 2:
                                                $hjtm = "Ya";
                                                break;
                                        }
                                        $nttm = "";
                                        switch ($dstm['nadi_teraba']) {
                                            case 0:
                                                $nttm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $nttm = "Tidak";
                                                break;
                                            case 2:
                                                $nttm = "Ya";
                                                break;
                                        }
                                        $ktm = "";
                                        switch ($dstm['kulit']) {
                                            case 0:
                                                $ktm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $ktm = "Lembab";
                                                break;
                                            case 2:
                                                $ktm = "Kering";
                                                break;
                                        }
                                        $atm = "";
                                        switch ($dstm['akral']) {
                                            case 0:
                                                $atm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $atm = "Dingin";
                                                break;
                                            case 2:
                                                $atm = "Hangat";
                                                break;
                                        }
                                        $ptm = "";
                                        switch ($dstm['pendarahan']) {
                                            case 0:
                                                $ptm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $ptm = "Tidak";
                                                break;
                                            case 2:
                                                $ptm = "Ya";
                                                break;
                                        }
                                        $ttm = "";
                                        switch ($dstm['turgor']) {
                                            case 0:
                                                $ttm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $ttm = "Tidak Normal";
                                                break;
                                            case 2:
                                                $ttm = "Normal";
                                                break;
                                        }
                                        $stm = "";
                                        switch ($dstm['sianosis']) {
                                            case 0:
                                                $stm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $stm = "Tidak";
                                                break;
                                            case 2:
                                                $stm = "Ya";
                                                break;
                                        }
                                        $ratm = "";
                                        switch ($dstm['riwayat_alergi']) {
                                            case 0:
                                                $ratm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $ratm = "Tidak Ada";
                                                break;
                                            case 2:
                                                $ratm = "Ada";
                                                break;
                                        }
                                        $mtm = "";
                                        switch ($dstm['medikasi']) {
                                            case 0:
                                                $mtm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $mtm = "Tidak Ada";
                                                break;
                                            case 2:
                                                $mtm = "Ada";
                                                break;
                                        }
                                        $pstm = "";
                                        switch ($dstm['pernah_stroke']) {
                                            case 0:
                                                $pstm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $pstm = "Tidak Ada";
                                                break;
                                            case 2:
                                                $pstm = "Ada";
                                                break;
                                        }
                                        $rctm = "";
                                        switch ($dstm['refleks_cahaya']) {
                                            case 0:
                                                $rctm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $rctm = "Tidak Ada";
                                                break;
                                            case 2:
                                                $rctm = "Ada";
                                                break;
                                        }
                                        $snytm = "";
                                        switch ($dstm['skala_nyeri']) {
                                            case 0:
                                                $snytm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $snytm = "Berat";
                                                break;
                                            case 2:
                                                $snytm = "Sedang";
                                                break;
                                            case 3:
                                                $snytm = "Ringan";
                                                break;
                                        }
                                        $amtm = "";
                                        switch ($dstm['aktivitas_mobilisasi']) {
                                            case 0:
                                                $amtm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $amtm = "Mandiri";
                                                break;
                                            case 2:
                                                $amtm = "Perlu Bantuan";
                                                break;
                                        }
                                        $rjtm = "";
                                        switch ($dstm['risiko_jatuh']) {
                                            case 0:
                                                $rjtm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $rjtm = "Tidak Berisiko";
                                                break;
                                            case 2:
                                                $rjtm = "Berisiko";
                                                break;
                                        }
                                        $crttm = "";
                                        switch ($dstm['crt']) {
                                            case 0:
                                                $crttm = "Tidak Tercantum";
                                                break;
                                            case 1:
                                                $crttm = "<2 detik";
                                                break;
                                            case 2:
                                                $crttm = ">2 detik";
                                                break;
                                        }
                                        $dtm = "";
                                        switch ($dstm['diagnosa']) {
                                            case 0:
                                                $dtm = "Stroke Haemoragic";
                                                break;
                                            case 1:
                                                $dtm = "Stroke Non-Haemoragic";
                                                break;
                                            case 2:
                                                $dtm = "Stroke Iskemik";
                                                break;
                                            case 3:
                                                $dtm = "Stroke Sequelae";
                                                break;
                                            case 4:
                                                $dtm = "Stroke";
                                                break;
                                        }
                                    ?>
                                     <tr>
                                         <td><?php echo $id_data_stroke_tim_medis++; ?></td>
                                         <td><?php echo $dstm['id_pasien']; ?></td>
                                         <td><?= $jktm ?></td>
                                         <td><?php echo $dstm['usia']; ?></td>
                                         <td><?= $kutm ?></td>
                                         <td><?= $kstm ?></td>
                                         <td><?php echo $dstm['tensi_darah']; ?></td>
                                         <td><?php echo $dstm['nadi_permenit']; ?></td>
                                         <td><?= $sntm ?></td>
                                         <td><?php echo $dstm['suhu_badan']; ?></td>
                                         <td><?php echo $dstm['respirasi_permenit']; ?></td>
                                         <td><?php echo $dstm['spo2']; ?></td>
                                         <td><?= $pstm ?></td>
                                         <td><?= $pmtm ?></td>
                                         <td><?= $intm ?></td>
                                         <td><?= $bntm ?></td>
                                         <td><?= $hjtm ?></td>
                                         <td><?= $nttm ?></td>
                                         <td><?= $ktm ?></td>
                                         <td><?= $atm ?></td>
                                         <td><?= $ptm ?></td>
                                         <td><?= $ttm ?></td>
                                         <td><?= $stm ?></td>
                                         <td><?= $ratm ?></td>
                                         <td><?= $mtm ?></td>
                                         <td><?= $pstm ?></td>
                                         <td><?= $rctm ?></td>
                                         <td><?= $snytm ?></td>
                                         <td><?= $amtm ?></td>
                                         <td><?= $rjtm ?></td>
                                         <td><?= $crttm ?></td>
                                         <td><?php echo $dstm['gcs']; ?></td>
                                         <td><?= $dtm ?></td>
                                         <td>
                                             <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $dstm['id_data_stroke_tim_medis']; ?>">
                                                 Edit
                                             </button>
                                             <a href="<?= base_url() ?>data_training_tim_medis/hapus_data_stroke_tim_medis/<?php echo $dstm['id_data_stroke_tim_medis']; ?>" class="badge badge-danger">Hapus</a>
                                         </td>
                                     </tr>
                                 <?php endforeach; ?>
                             <tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Modal Tambah Data -->

         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Training</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <?php echo form_open_multipart('data_training_tim_medis/proses_tambah_data_stroke_tim_medis'); ?>
                         <div class="form-group">
                             <label for="id_pasien" class="col-form-label">Id Pasien: </label>
                             <input type="id_pasien" class="form-control" id="id_pasien" name="id_pasien" placeholder="Masukkan Id Pasien" required>
                         </div>
                         <div class="form-group">
                             <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin:</label>
                             <select class="form-control" name="jenis_kelamin">
                                 <option value="1">Laki-Laki</option>
                                 <option value="0">Perempuan</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="usia" class="col-form-label">Usia:</label>
                             <input type="usia" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia" required>
                         </div>
                         <div class="form-group">
                             <label for="keadaan_umum" class="col-form-label">Keadaan Umum:</label>
                             <select class="form-control" name="keadaan_umum">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Sedang</option>
                                 <option value="2">Tidak Sadar</option>
                                 <option value="3">Lemah</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="kesadaran" class="col-form-label">Kesadaran:</label>
                             <select class="form-control" name="kesadaran">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Samno-Len</option>
                                 <option value="2">Sofor</option>
                                 <option value="3">CM</option>
                                 <option value="4">Apatis</option>
                                 <option value="5">Coma</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="tensi_darah" class="col-form-label">Tensi Darah:</label>
                             <input type="tensi_darah" class="form-control" id="tensi_darah" name="tensi_darah" placeholder="Masukkan Tensi Darah" required>
                         </div>
                         <div class="form-group">
                             <label for="nadi_permenit" class="col-form-label">Jumlah Denyut Nadi/menit:</label>
                             <input type="nadi_permenit" class="form-control" id="nadi_permenit" name="nadi_permenit" placeholder="Masukkan Jumlah Denyut Nadi Permenit" required>
                         </div>
                         <div class="form-group">
                             <label for="suara_napas" class="col-form-label">Suara Napas:</label>
                             <select class="form-control" name="suara_napas">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Normal</option>
                                 <option value="2">Tidak Normal</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="suhu_badan" class="col-form-label">Suhu Badan:</label>
                             <input type="suhu_badan" class="form-control" id="suhu_badan" name="suhu_badan" placeholder="Ganti Tanda Koma Menjadi Titik" required>
                         </div>
                         <div class="form-group">
                             <label for="respirasi_permenit" class="col-form-label">Jumlah Napas/menit:</label>
                             <input type="respirasi_permenit" class="form-control" id="respirasi_permenit" name="respirasi_permenit" placeholder="Masukkan Jumlah Napas Permenit" required>
                         </div>
                         <div class="form-group">
                             <label for="spo2" class="col-form-label">SPO2:</label>
                             <input type="spo2" class="form-control" id="spo2" name="spo2" placeholder="Masukkan SPO2" required>
                         </div>
                         <div class="form-group">
                             <label for="perubahan_sensorik" class="col-form-label">Perubahan Sensorik:</label>
                             <select class="form-control" name="perubahan_sensorik">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Berubah</option>
                                 <option value="2">Berubah</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="perubahan_motorik" class="col-form-label">Perubahan Motorik:</label>
                             <select class="form-control" name="perubahan_motorik">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Berubah</option>
                                 <option value="2">Berubah</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="irama_napas" class="col-form-label">Irama Napas:</label>
                             <select class="form-control" name="irama_napas">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Teratur</option>
                                 <option value="2">Teratur</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="bunyi_napas" class="col-form-label">Bunyi Napas:</label>
                             <select class="form-control" name="bunyi_napas">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Vasikuler</option>
                                 <option value="2">Stridor</option>
                                 <option value="3">Wheezing</option>
                                 <option value="4">Rondi</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="henti_jantung" class="col-form-label">Henti Jantung:</label>
                             <select class="form-control" name="henti_jantung">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak</option>
                                 <option value="2">Ya</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="nadi_teraba" class="col-form-label">Nadi Teraba:</label>
                             <select class="form-control" name="nadi_teraba">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak</option>
                                 <option value="2">Ya</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="kulit" class="col-form-label">Kondisi Kulit:</label>
                             <select class="form-control" name="kulit">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Lembab</option>
                                 <option value="2">Kering</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="akral" class="col-form-label">AKRAL:</label>
                             <select class="form-control" name="akral">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Dingin</option>
                                 <option value="2">Hangat</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="pendarahan" class="col-form-label">Pendarahan:</label>
                             <select class="form-control" name="pendarahan">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Pendarahan</option>
                                 <option value="2">Ya</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="turgor" class="col-form-label">Turgor:</label>
                             <select class="form-control" name="turgor">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Normal</option>
                                 <option value="2">Normal</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="sianosis" class="col-form-label">Sianosis:</label>
                             <select class="form-control" name="sianosis">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak</option>
                                 <option value="2">Ya</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="riwayat_alergi" class="col-form-label">Riwayat Alergi:</label>
                             <select class="form-control" name="riwayat_alergi">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Ada</option>
                                 <option value="2">Ada</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="medikasi" class="col-form-label">Medikasi:</label>
                             <select class="form-control" name="medikasi">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Ada</option>
                                 <option value="2">Ada</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="pernah_stroke" class="col-form-label">Riwayat Stroke:</label>
                             <select class="form-control" name="pernah_stroke">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Ada</option>
                                 <option value="2">Ada</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="refleks_cahaya" class="col-form-label">Refleks Cahaya:</label>
                             <select class="form-control" name="refleks_cahaya">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Ada</option>
                                 <option value="2">Ada</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="skala_nyeri" class="col-form-label">Skala Nyeri:</label>
                             <select class="form-control" name="skala_nyeri">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Berat</option>
                                 <option value="2">Sedang</option>
                                 <option value="3">Ringan</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="aktivitas_mobilisasi" class="col-form-label">Aktivitas Mobilisasi:</label>
                             <select class="form-control" name="aktivitas_mobilisasi">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Mandiri</option>
                                 <option value="2">Perlu Bantuan</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="risiko_jatuh" class="col-form-label">Risiko Jatuh:</label>
                             <select class="form-control" name="risiko_jatuh">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">Tidak Berisiko</option>
                                 <option value="2">Risiko Tinggi</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="crt" class="col-form-label">CRT:</label>
                             <select class="form-control" name="crt">
                                 <option value="0">Tidak Tercantum</option>
                                 <option value="1">
                                     < 2 detik</option>
                                 <option value="2">> 2 detik</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="gcs" class="col-form-label">GCS:</label>
                             <input type="gcs" class="form-control" id="gcs" name="gcs" placeholder="Isi 0 Jika Tidak Tercantum" required>
                         </div>
                         <div class="form-group">
                             <label for="diagnosa" class="col-form-label">Diagnosa:</label>
                             <select class="form-control" name="diagnosa">
                                 <option value="0">Stroke Haemoragic</option>
                                 <option value="1">Stroke Non-Haemoragic</option>
                                 <option value="2">Stroke Iskemik</option>
                                 <option value="3">Stroke Sequelae</option>
                             </select>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                             <button type="submit" class="btn btn-secondary">Simpan</button>
                             <?php echo form_close() ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Akhir Modal Tambah -->

     </div>
     <!-- Modal Edit Data -->
     <?php $id_data_stroke_tim_medis = 0;
        foreach ($data_stroke_tim_medis as $dstm) : $id_data_stroke_tim_medis++; ?>

         <div class="modal fade" id="editmodal<?php echo $dstm['id_data_stroke_tim_medis']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Training</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <?php echo form_open_multipart('data_training_tim_medis/proses_edit_data_stroke_tim_medis'); ?>
                         <input type="hidden" name="id_data_stroke_tim_medis" value="<?php echo $dstm['id_data_stroke_tim_medis']; ?>">

                         <div class="form-group">
                             <label for="id_pasien" class="col-form-label">Id Pasien: </label>
                             <input type="id_pasien" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $dstm['id_pasien']; ?>">
                         </div>
                         <div class=" form-group">
                             <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin:</label>
                             <select class="form-control" name="jenis_kelamin">
                                 <option value="1" <?= $dstm['jenis_kelamin'] == 1 ? "selected" : "" ?>>Laki-Laki</option>
                                 <option value="0" <?= $dstm['jenis_kelamin'] == 0 ? "selected" : "" ?>>Perempuan</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="usia" class="col-form-label">Usia:</label>
                             <input type="usia" class="form-control" id="usia" name="usia" value="<?php echo $dstm['usia']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="keadaan_umum" class="col-form-label">Keadaan Umum:</label>
                             <select class="form-control" name="keadaan_umum">
                                 <option value="0" <?= $dstm['keadaan_umum'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['keadaan_umum'] == 1 ? "selected" : "" ?>>Sedang</option>
                                 <option value="2" <?= $dstm['keadaan_umum'] == 2 ? "selected" : "" ?>>Tidak Sadar</option>
                                 <option value="3" <?= $dstm['keadaan_umum'] == 3 ? "selected" : "" ?>>Lemah</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="kesadaran" class="col-form-label">Kesadaran:</label>
                             <select class="form-control" name="kesadaran">
                                 <option value="0" <?= $dstm['kesadaran'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['kesadaran'] == 1 ? "selected" : "" ?>>Samno-Len</option>
                                 <option value="2" <?= $dstm['kesadaran'] == 2 ? "selected" : "" ?>>Sofor</option>
                                 <option value="3" <?= $dstm['kesadaran'] == 3 ? "selected" : "" ?>>CM</option>
                                 <option value="4" <?= $dstm['kesadaran'] == 4 ? "selected" : "" ?>>Apatis</option>
                                 <option value="5" <?= $dstm['kesadaran'] == 5 ? "selected" : "" ?>>Coma</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="tensi_darah" class="col-form-label">Tensi Darah:</label>
                             <input type="tensi_darah" class="form-control" id="tensi_darah" name="tensi_darah" value="<?php echo $dstm['tensi_darah']; ?>">
                         </div>
                         <div class=" form-group">
                             <label for="nadi_permenit" class="col-form-label">Jumlah Denyut Nadi/menit:</label>
                             <input type="nadi_permenit" class="form-control" id="nadi_permenit" name="nadi_permenit" value="<?php echo $dstm['nadi_permenit']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="suara_napas" class="col-form-label">Suara Napas:</label>
                             <select class="form-control" name="suara_napas">
                                 <option value="0" <?= $dstm['suara_napas'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['suara_napas'] == 1 ? "selected" : "" ?>>Normal</option>
                                 <option value="2" <?= $dstm['suara_napas'] == 2 ? "selected" : "" ?>>Tidak Normal</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="suhu_badan" class="col-form-label">Suhu Badan:</label>
                             <input type="suhu_badan" class="form-control" id="suhu_badan" name="suhu_badan" value="<?php echo $dstm['suhu_badan']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="respirasi_permenit" class="col-form-label">Jumlah Napas/menit:</label>
                             <input type="respirasi_permenit" class="form-control" id="respirasi_permenit" name="respirasi_permenit" value="<?php echo $dstm['respirasi_permenit']; ?>">
                         </div>
                         <div class=" form-group">
                             <label for="spo2" class="col-form-label">SPO2:</label>
                             <input type="spo2" class="form-control" id="spo2" name="spo2" value="<?php echo $dstm['spo2']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="perubahan_sensorik" class="col-form-label">Perubahan Sensorik:</label>
                             <select class="form-control" name="perubahan_sensorik">
                                 <option value="0" <?= $dstm['perubahan_sensorik'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['perubahan_sensorik'] == 1 ? "selected" : "" ?>>Tidak Berubah</option>
                                 <option value="2" <?= $dstm['perubahan_sensorik'] == 2 ? "selected" : "" ?>>Berubah</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="perubahan_motorik" class="col-form-label">Perubahan Motorik:</label>
                             <select class="form-control" name="perubahan_motorik">
                                 <option value="0" <?= $dstm['perubahan_motorik'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['perubahan_motorik'] == 1 ? "selected" : "" ?>>Tidak Berubah</option>
                                 <option value="2" <?= $dstm['perubahan_motorik'] == 2 ? "selected" : "" ?>>Berubah</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="irama_napas" class="col-form-label">Irama Napas:</label>
                             <select class="form-control" name="irama_napas">
                                 <option value="0" <?= $dstm['irama_napas'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['irama_napas'] == 1 ? "selected" : "" ?>>Tidak Teratur</option>
                                 <option value="2" <?= $dstm['irama_napas'] == 2 ? "selected" : "" ?>>Teratur</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="bunyi_napas" class="col-form-label">Bunyi Napas:</label>
                             <select class="form-control" name="bunyi_napas">
                                 <option value="0" <?= $dstm['bunyi_napas'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['bunyi_napas'] == 1 ? "selected" : "" ?>>Vasikuler</option>
                                 <option value="2" <?= $dstm['bunyi_napas'] == 2 ? "selected" : "" ?>>Stridor</option>
                                 <option value="3" <?= $dstm['bunyi_napas'] == 3 ? "selected" : "" ?>>Wheezing</option>
                                 <option value="4" <?= $dstm['bunyi_napas'] == 4 ? "selected" : "" ?>>Rondi</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="henti_jantung" class="col-form-label">Henti Jantung:</label>
                             <select class="form-control" name="henti_jantung">
                                 <option value="0" <?= $dstm['henti_jantung'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['henti_jantung'] == 1 ? "selected" : "" ?>>Tidak</option>
                                 <option value="2" <?= $dstm['henti_jantung'] == 2 ? "selected" : "" ?>>Ya</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="nadi_teraba" class="col-form-label">Nadi Teraba:</label>
                             <select class="form-control" name="nadi_teraba">
                                 <option value="0" <?= $dstm['nadi_teraba'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['nadi_teraba'] == 1 ? "selected" : "" ?>>Tidak</option>
                                 <option value="2" <?= $dstm['nadi_teraba'] == 2 ? "selected" : "" ?>>Ya</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="kulit" class="col-form-label">Kondisi Kulit:</label>
                             <select class="form-control" name="kulit">
                                 <option value="0" <?= $dstm['kulit'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['kulit'] == 1 ? "selected" : "" ?>>Lembab</option>
                                 <option value="2" <?= $dstm['kulit'] == 2 ? "selected" : "" ?>>Kering</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="akral" class="col-form-label">AKRAL:</label>
                             <select class="form-control" name="akral">
                                 <option value="0" <?= $dstm['akral'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['akral'] == 1 ? "selected" : "" ?>>Dingin</option>
                                 <option value="2" <?= $dstm['akral'] == 2 ? "selected" : "" ?>>Hangat</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="pendarahan" class="col-form-label">Pendarahan:</label>
                             <select class="form-control" name="pendarahan">
                                 <option value="0" <?= $dstm['pendarahan'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['pendarahan'] == 1 ? "selected" : "" ?>>Tidak Pendarahan</option>
                                 <option value="2" <?= $dstm['pendarahan'] == 2 ? "selected" : "" ?>>Ya</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="turgor" class="col-form-label">Turgor:</label>
                             <select class="form-control" name="turgor">
                                 <option value="0" <?= $dstm['turgor'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['turgor'] == 1 ? "selected" : "" ?>>Tidak Normal</option>
                                 <option value="2" <?= $dstm['turgor'] == 2 ? "selected" : "" ?>>Normal</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="sianosis" class="col-form-label">Sianosis:</label>
                             <select class="form-control" name="sianosis">
                                 <option value="0" <?= $dstm['sianosis'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['sianosis'] == 1 ? "selected" : "" ?>>Tidak</option>
                                 <option value="2" <?= $dstm['sianosis'] == 2 ? "selected" : "" ?>>Ya</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="riwayat_alergi" class="col-form-label">Riwayat Alergi:</label>
                             <select class="form-control" name="riwayat_alergi">
                                 <option value="0" <?= $dstm['riwayat_alergi'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['riwayat_alergi'] == 1 ? "selected" : "" ?>>Tidak Ada</option>
                                 <option value="2" <?= $dstm['riwayat_alergi'] == 2 ? "selected" : "" ?>>Ada</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="medikasi" class="col-form-label">Medikasi:</label>
                             <select class="form-control" name="medikasi">
                                 <option value="0" <?= $dstm['medikasi'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['medikasi'] == 1 ? "selected" : "" ?>>Tidak Ada</option>
                                 <option value="2" <?= $dstm['medikasi'] == 2 ? "selected" : "" ?>>Ada</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="pernah_stroke" class="col-form-label">Riwayat Stroke:</label>
                             <select class="form-control" name="pernah_stroke">
                                 <option value="0" <?= $dstm['pernah_stroke'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['pernah_stroke'] == 1 ? "selected" : "" ?>>Tidak Ada</option>
                                 <option value="2" <?= $dstm['pernah_stroke'] == 2 ? "selected" : "" ?>>Ada</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="refleks_cahaya" class="col-form-label">Refleks Cahaya:</label>
                             <select class="form-control" name="refleks_cahaya">
                                 <option value="0" <?= $dstm['refleks_cahaya'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['refleks_cahaya'] == 1 ? "selected" : "" ?>>Tidak Ada</option>
                                 <option value="2" <?= $dstm['refleks_cahaya'] == 2 ? "selected" : "" ?>>Ada</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="skala_nyeri" class="col-form-label">Skala Nyeri:</label>
                             <select class="form-control" name="skala_nyeri">
                                 <option value="0" <?= $dstm['skala_nyeri'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['skala_nyeri'] == 1 ? "selected" : "" ?>>Berat</option>
                                 <option value="2" <?= $dstm['skala_nyeri'] == 2 ? "selected" : "" ?>>Sedang</option>
                                 <option value="3" <?= $dstm['skala_nyeri'] == 3 ? "selected" : "" ?>>Ringan</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="aktivitas_mobilisasi" class="col-form-label">Aktivitas Mobilisasi:</label>
                             <select class="form-control" name="aktivitas_mobilisasi">
                                 <option value="0" <?= $dstm['aktivitas_mobilisasi'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['aktivitas_mobilisasi'] == 1 ? "selected" : "" ?>>Mandiri</option>
                                 <option value="2" <?= $dstm['aktivitas_mobilisasi'] == 2 ? "selected" : "" ?>>Perlu Bantuan</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="risiko_jatuh" class="col-form-label">Risiko Jatuh:</label>
                             <select class="form-control" name="risiko_jatuh">
                                 <option value="0" <?= $dstm['risiko_jatuh'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['risiko_jatuh'] == 1 ? "selected" : "" ?>>Tidak Berisiko</option>
                                 <option value="2" <?= $dstm['risiko_jatuh'] == 2 ? "selected" : "" ?>>Risiko Tinggi</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="crt" class="col-form-label">CRT:</label>
                             <select class="form-control" name="crt">
                                 <option value="0" <?= $dstm['crt'] == 0 ? "selected" : "" ?>>Tidak Tercantum</option>
                                 <option value="1" <?= $dstm['crt'] == 1 ? "selected" : "" ?>>
                                     < 2 detik</option>
                                 <option value="2" <?= $dstm['crt'] == 2 ? "selected" : "" ?>>> 2 detik</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="gcs" class="col-form-label">GCS:</label>
                             <input type="gcs" class="form-control" id="gcs" name="gcs" value="<?php echo $dstm['gcs']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="diagnosa" class="col-form-label">Diagnosa:</label>
                             <select class="form-control" name="diagnosa">
                                 <option value="0" <?= $dstm['diagnosa'] == 0 ? "selected" : "" ?>>Stroke Haemoragic</option>
                                 <option value="1" <?= $dstm['diagnosa'] == 1 ? "selected" : "" ?>>Stroke Non-Haemoragic</option>
                                 <option value="2" <?= $dstm['diagnosa'] == 2 ? "selected" : "" ?>>Stroke Iskemik</option>
                                 <option value="3" <?= $dstm['diagnosa'] == 3 ? "selected" : "" ?>>Stroke Sequelae</option>
                             </select>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                             <button type="submit" class="btn btn-secondary">Update</button>
                             <?php echo form_close() ?>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Akhir Modal Edit -->

         </div>
     <?php endforeach; ?>
 </div>
 </div>
 </div>