 <!-- Begin Page Content -->
 <div class="container-fluid">
     <?= $this->session->flashdata('message'); ?>
     <!-- Page Heading -->
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <!-- Modal Export Excel -->
             <!-- <div class="card">
                 <div class="card-body">
                     </?php echo form_open_multipart('data/index'); ?>
                     <h5 class="card-title">Import dari Excel</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Pilih Excel</h6>
                     <p class="card-text">
                         Apabila Anda memiliki data yang banyak, Anda dapat mengimport data tersebut. Data yang akan diimport harus berasal dari Excel. </p>
                     <!--  <form action="" method="post" name="importdata" id="importdata"> -->
             <!--   <div class="form-row">
                         <input type="file" class="form-control-file" name="importdata" id="importdata" accept=".xls,.xlsx, .csv">
                     </div>
                     <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                     </?php echo form_close(); ?>
                 </div>
             </div> -->

             <div class="card shadow mb-4">
                 <div class="card-header py-4">
                     <div class="m-0 font-weight-bold text-secondary"><?= $title; ?>
                         <!-- 
                         <!-- Button trigger modal -->
                         <!-- <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                             Tambah Data Prediksi Tim Medis
                         </button> -->
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                     <tr>
                                         <td>Id Prediksi</td>
                                         <td>Id Pasien</td>
                                         <td>Jenis Kelamin</td>
                                         <td>Usia</td>
                                         <td>Keadaan Umum</td>
                                         <td>Kesadaran</td>
                                         <td>Tensi Darah</td>
                                         <td>Nadi Permenit</td>
                                         <td>Suara Napas</td>
                                         <td>Suhu Badan</td>
                                         <td>Respirasi Permenit</td>
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
                                         <td>Hasil Diagnosa</td>
                                         <td>Dibuat Pada</td>
                                         <td>Aksi</td>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $id_prediksi_tim_medis = 1;
                                        foreach ($prediksi_tim_medis as $pdktm) :
                                            $jktm = "";
                                            switch ($pdktm['jenis_kelamin_tm']) {
                                                case 0:
                                                    $jktm = "Perempuan";
                                                    break;
                                                case 1:
                                                    $jktm = "Laki-laki";
                                                    break;
                                            }
                                            $kutm = "";
                                            switch ($pdktm['keadaan_umum_tm']) {
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
                                            switch ($pdktm['suara_napas_tm']) {
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
                                            switch ($pdktm['kesadaran_tm']) {
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
                                            switch ($pdktm['perubahan_sensorik_tm']) {
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
                                            switch ($pdktm['perubahan_motorik_tm']) {
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
                                            switch ($pdktm['irama_napas_tm']) {
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
                                            switch ($pdktm['bunyi_napas_tm']) {
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
                                            switch ($pdktm['henti_jantung_tm']) {
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
                                            switch ($pdktm['nadi_teraba_tm']) {
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
                                            switch ($pdktm['kulit_tm']) {
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
                                            switch ($pdktm['akral_tm']) {
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
                                            switch ($pdktm['pendarahan_tm']) {
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
                                            switch ($pdktm['turgor_tm']) {
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
                                            switch ($pdktm['sianosis_tm']) {
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
                                            switch ($pdktm['riwayat_alergi_tm']) {
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
                                            switch ($pdktm['medikasi_tm']) {
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
                                            switch ($pdktm['pernah_stroke_tm']) {
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
                                            switch ($pdktm['refleks_cahaya_tm']) {
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
                                            switch ($pdktm['skala_nyeri_tm']) {
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
                                            switch ($pdktm['aktivitas_mobilisasi_tm']) {
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
                                            switch ($pdktm['risiko_jatuh_tm']) {
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
                                            switch ($pdktm['crt_tm']) {
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
                                            switch ($pdktm['crt_tm']) {
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
                                             <td><?php echo $id_prediksi_tim_medis++; ?></td>
                                             <td><?php echo $pdktm['id_pasien_tm']; ?></td>
                                             <td><?= $jktm ?></td>
                                             <td><?php echo $pdktm['usia_tm']; ?></td>
                                             <td><?= $kutm ?></td>
                                             <td><?= $kstm ?></td>
                                             <td><?php echo $pdktm['tensi_darah_tm']; ?></td>
                                             <td><?php echo $pdktm['nadi_permenit_tm']; ?></td>
                                             <td><?= $sntm ?></td>
                                             <td><?php echo $pdktm['suhu_badan_tm']; ?></td>
                                             <td><?php echo $pdktm['respirasi_permenit_tm']; ?></td>
                                             <td><?php echo $pdktm['spo2_tm']; ?></td>
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
                                             <td><?php echo $pdktm['gcs_tm']; ?></td>
                                             <td><?= $dtm ?></td>
                                             <td><?php echo $pdktm['dibuat_pada']; ?></td>
                                             <td>
                                                 <!-- <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $pdktm['id_prediksi_tim_medis']; ?>">
                                                     Edit
                                                 </button> -->
                                                 <a href="<?= base_url() ?>prediksi_tim_medis/hapus_data_prediksitm/<?php echo $pdktm['id_prediksi_tim_medis']; ?>" class="badge badge-danger">Hapus</a>
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
                             <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Prediksi Tim Medis</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <?php echo form_open_multipart('prediksi_tim_medis/proses_tambah_data_prediksitm'); ?>
                             <div class="form-group">
                                 <label for="Id Pasien" class="col-form-label">Id Pasien:</label>
                                 <input type="text" class="form-control" name="id_pasien_tim_medis" class="form-control" id="id_pasien_tim_medis" required="">
                             </div>
                             <div class="form-group">
                                 <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                                 <select class="form-control" name="jenis_kelamin_tm">
                                     <option value="0">Laki-Laki</option>
                                     <option value="1">Perempuan</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Usia" class="col-form-label">Usia:</label>
                                 <input type="usia" class="form-control" id="usia" name="usia_tm" placeholder="Usia">
                             </div>
                             <div class="form-group">
                                 <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                 <select class="form-control" name="hipertensi_tm">
                                     <option value=" 1">Tidak</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                 <select class="form-control" name="liver_tm">
                                     <option value="0">Ya</option>
                                     <option value="1">Tidak</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                 <select class="form-control" name="status_pernikahan_tm">
                                     <option value=" 1">Belum Menikah</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                 <select class="form-control" name="tipe_pekerjaan_tm">
                                     <option value="0">Pekerja Swasta</option>
                                     <option value="1">Bisnis</option>
                                     <option value="2">Pemerintahan</option>
                                     <option value="3">Pekerja Anak</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                 <select class="form-control" name="tempat_tinggal_tm">
                                     <option value="0">Perkotaan</option>
                                     <option value="1">Pedesaan</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                 <select class="form-control" name="rata_kadar_glukosa_tm">
                                     <option value="0">Glukosa < 130 </option>
                                     <option value="1">Glukosa antara 130 sampai 200</option>
                                     <option value="2">Glukosa > 200</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                 <select class="form-control" name="index_bb_tm">
                                     <option value="0">Index Berat Badan < 18 </option>
                                     <option value="1">Index Berat Badan antara 18 sampai 25</option>
                                     <option value="2">Index Berat Badan > 25</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                 <select class="form-control" name="status_perokok_tm">
                                     <option value="0">Dulu Pernah</option>
                                     <option value="1">Tidak Pernah</option>
                                     <option value="2">Perokok</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                 <select class="form-control" name="keterangan_tm">
                                     <option value="1">Stroke</option>
                                     <option value="0">Tidak Stroke</option>
                                 </select>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                 <button type="submit" class="btn btn-primary">Simpan</button>
                                 <?php echo form_close() ?>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Akhir Modal Tambah -->

             </div>
             <!-- Modal Edit Data -->
             <?php $id_prediksi_tim_medis = 0;
                foreach ($prediksi_tim_medis as $pdktm) : $id_prediksi_tim_medis++; ?>

                 <div class="modal fade" id="editmodal<?php echo $pdktm['id_prediksi_tim_medis']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Stroke</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <?php echo form_open_multipart('prediksi_tim_medis/proses_edit_data_prediksitm'); ?>
                                 <input type="hidden" name="id_prediksi_tim_medis" value="<?php echo $pdktm['id_prediksi_tim_medis']; ?>">

                                 <div class="form-group">
                                     <label for="Id Pasien" class="col-form-label">Id Pasien:</label>
                                     <input type="text" class="form-control" name="id_pasien_tm" class="form-control" id="id_pasien_tm" value="<?php echo $pdktm['id_pasien_tm']; ?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                                     <select class="form-control" name="jenis_kelamin_tm" value="<?php echo $pdktm['jenis_kelamin_tm']; ?>">
                                         <option value="0" <?= $pdktm['jenis_kelamin_tm'] == 0 ? "selected" : "" ?>>Laki-Laki</option>
                                         <option value="1" <?= $pdktm['jenis_kelamin_tm'] == 1 ? "selected" : "" ?>>Perempuan</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Usia" class="col-form-label">Usia:</label>
                                     <input type="number" class="form-control" name="usia_tm" value="<?php echo $pdktm['usia_tm']; ?>">

                                 </div>
                                 <div class="form-group">
                                     <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                     <select class="form-control" name="hipertensi_tm" value="<?php echo $pdktm['hipertensi_tm']; ?>">
                                         <option value="0" <?= $pdktm['hipertensi_tm'] == 0 ? "selected" : "" ?>>Ya</option>
                                         <option value="1" <?= $pdktm['hipertensi_tm'] == 1 ? "selected" : "" ?>>Tidak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                     <select class="form-control" name="liver_tm" value="<?php echo $pdktm['liver_tm']; ?>">
                                         <option value="0" <?= $pdktm['liver_tm'] == 0 ? "selected" : "" ?>>Ya</option>
                                         <option value="1" <?= $pdktm['liver_tm'] == 1 ? "selected" : "" ?>>Tidak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                     <select class="form-control" name="status_pernikahan_tm" value="<?php echo $pdktm['status_pernikahan_tm']; ?>">
                                         <option value="0" <?= $pdktm['status_pernikahan_tm'] == 0 ? "selected" : "" ?>>Sudah Menikah</option>
                                         <option value="1" <?= $pdktm['status_pernikahan_tm'] == 1 ? "selected" : "" ?>>Belum Menikah</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                     <select class="form-control" name="tipe_pekerjaan_tm" value="<?php echo $pdktm['tipe_pekerjaan_tm']; ?>">
                                         <option value="0" <?= $pdktm['tipe_pekerjaan_tm'] == 0 ? "selected" : "" ?>>Pekerja Swasta</option>
                                         <option value="1" <?= $pdktm['tipe_pekerjaan_tm'] == 1 ? "selected" : "" ?>>Bisnis</option>
                                         <option value="2" <?= $pdktm['tipe_pekerjaan_tm'] == 2 ? "selected" : "" ?>>Pemerintahan</option>
                                         <option value="3" <?= $pdktm['tipe_pekerjaan_tm'] == 3 ? "selected" : "" ?>>Pekerja Anak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                     <select class="form-control" name="tempat_tinggal_tm" value="<?php echo $pdktm['tempat_tinggal_tm']; ?>">
                                         <option value="0" <?= $pdktm['tempat_tinggal_tm'] == 0 ? "selected" : "" ?>>Perkotaan</option>
                                         <option value="1" <?= $pdktm['tempat_tinggal_tm'] == 1 ? "selected" : "" ?>>Pedesaan</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                     <select class="form-control" name="rata_kadar_glukosa_tm" value="<?php echo $pdk['rata_kadar_glukosa_tm']; ?>">
                                         <option value="0" <?= $pdktm['rata_kadar_glukosa_tm'] == 0 ? "selected" : "" ?>>Glukosa < 130 </option>
                                         <option value="1" <?= $pdktm['rata_kadar_glukosa_tm'] == 1 ? "selected" : "" ?>>Glukosa antara 130 sampai 200</option>
                                         <option value="2" <?= $pdktm['rata_kadar_glukosa_tm'] == 2 ? "selected" : "" ?>>Glukosa > 200</option>
                                     </select>
                                 </div>

                                 <div class="form-group">
                                     <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                     <select class="form-control" name="index_bb_tm" value="<?php echo $pdktm['index_bb_tm']; ?>">
                                         <option value="0" <?= $pdktm['index_bb_tm'] == 0 ? "selected" : "" ?>>Index Berat Badan < 18 </option>
                                         <option value="1" <?= $pdktm['index_bb_tm'] == 1 ? "selected" : "" ?>>Index Berat Badan antara 18 sampai 25</option>
                                         <option value="2" <?= $pdktm['index_bb_tm'] == 2 ? "selected" : "" ?>>Index Berat Badan > 25</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                     <select class="form-control" name="status_perokok_tm" value="<?php echo $pdktm['status_perokok_tm']; ?>">
                                         <option value="0" <?= $pdktm['status_perokok_tm'] == 0 ? "selected" : "" ?>>Dulu Pernah</option>
                                         <option value="1" <?= $pdktm['status_perokok_tm'] == 1 ? "selected" : "" ?>>Tidak Pernah</option>
                                         <option value="2" <?= $pdktm['status_perokok_tm'] == 2 ? "selected" : "" ?>>Perokok</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                     <select class="form-control" name="keterangan_tm" value="<?php echo $pdktm['keterangan_tm']; ?>">
                                         <option value="1" <?= $pdktm['keterangan_tm'] == 0 ? "selected" : "" ?>>Stroke</option>
                                         <option value="0" <?= $pdktm['keterangan_tm'] == 1 ? "selected" : "" ?>>Tidak Stroke</option>
                                     </select>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                     <button type="submit" class="btn btn-primary">Update</button>
                                     <?php echo form_close() ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- Akhir Modal Edit -->
                 </div>
         </div>
     <?php endforeach; ?>
     </div>
 </div>