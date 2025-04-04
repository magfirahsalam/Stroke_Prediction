 <!-- Begin Page Content -->
 <div class="container-fluid">
     <?= $this->session->flashdata('message'); ?>
     <!-- Page Heading -->
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <Modal Export Excel -->
                 <div class="card">
                     <!-- <div class="card-body">
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
                     </div> -->
                 </div>
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
                                             <td>Tekanan Darah Tinggi</td>
                                             <td>Riwayat Liver</td>
                                             <td>Status Menikah</td>
                                             <td>Tipe Pekerjaan</td>
                                             <td>Tempat Tinggal</td>
                                             <td>Kadar Glukosa</td>
                                             <td>Index Berat Badan</td>
                                             <td>Status Merokok</td>
                                             <td>Keterangan</td>
                                             <td>Aksi</td>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php
                                            $id_data_stroke = 1;
                                            foreach ($data_stroke as $ds) :
                                                $pekerjaan = "";
                                                switch ($ds['tipe_pekerjaan']) {
                                                    case 0:
                                                        $pekerjaan = "Pekerja Swasta";
                                                        break;
                                                    case 1:
                                                        $pekerjaan = "Bisnis";
                                                        break;
                                                    case 2:
                                                        $pekerjaan = "Pemerintahan";
                                                        break;
                                                    case 3:
                                                        $pekerjaan = "Pekerja Anak";
                                                        break;
                                                }
                                                $jk = "";
                                                switch ($ds['jenis_kelamin']) {
                                                    case 0:
                                                        $jk = "Laki-Laki";
                                                        break;
                                                    case 1:
                                                        $jk = "Perempuan";
                                                        break;
                                                }
                                                $hp = "";
                                                switch ($ds['hipertensi']) {
                                                    case 0:
                                                        $hp = "Ya";
                                                        break;
                                                    case 1:
                                                        $hp = "Tidak";
                                                        break;
                                                }
                                                $lv = "";
                                                switch ($ds['liver']) {
                                                    case 0:
                                                        $lv = "Ya";
                                                        break;
                                                    case 1:
                                                        $lv = "Tidak";
                                                        break;
                                                }
                                                $sp = "";
                                                switch ($ds['status_pernikahan']) {
                                                    case 0:
                                                        $sp = "Sudah Menikah";
                                                        break;
                                                    case 1:
                                                        $sp = "Belum Menikah";
                                                        break;
                                                }
                                                $tmpt = "";
                                                switch ($ds['tempat_tinggal']) {
                                                    case 0:
                                                        $tmpt = "Perkotaan";
                                                        break;
                                                    case 1:
                                                        $tmpt = "Pedesaan";
                                                        break;
                                                }
                                                $rkg = "";
                                                switch ($ds['rata_kadar_glukosa']) {
                                                    case 0:
                                                        $rkg = "Glukosa < 130";
                                                        break;
                                                    case 1:
                                                        $rkg = "Glukosa antara 130 sampai 200";
                                                        break;
                                                    case 2:
                                                        $rkg = "Glukosa > 200";
                                                        break;
                                                }
                                                $ibb = "";
                                                switch ($ds['index_berat_badan']) {
                                                    case 0:
                                                        $ibb = "Index Berat Badan < 18 ";
                                                        break;
                                                    case 1:
                                                        $ibb = "Index Berat Badan antara 18 sampai 25";
                                                        break;
                                                    case 2:
                                                        $ibb = "Index Berat Badan > 25";
                                                        break;
                                                }
                                                $sp = "";
                                                switch ($ds['status_perokok']) {
                                                    case 0:
                                                        $sp = "Dulu Pernah Merokok";
                                                        break;
                                                    case 1:
                                                        $sp = "Tidak Pernah";
                                                        break;
                                                    case 2:
                                                        $sp = "Perokok";
                                                        break;
                                                }
                                                $kt = "";
                                                switch ($ds['keterangan']) {
                                                    case 0:
                                                        $kt = "Tidak Berpotensi Stroke";
                                                        break;
                                                    case 1:
                                                        $kt = "Berpotensi Stroke";
                                                        break;
                                                }

                                            ?>
                                             <tr>
                                                 <td><?= $id_data_stroke++; ?></td>
                                                 <td><?= $ds['id_pasien']; ?></td>
                                                 <td><?= $jk ?></td>
                                                 <td><?php echo $ds['usia']; ?></td>
                                                 <td><?= $hp ?></td>
                                                 <td><?= $lv ?></td>
                                                 <td><?= $sp ?></td>
                                                 <td><?= $pekerjaan ?></td>
                                                 <td><?= $tmpt ?></td>
                                                 <td><?= $rkg ?></td>
                                                 <td><?= $ibb ?></td>
                                                 <td><?= $sp ?></td>
                                                 <td><?= $kt ?></td>
                                                 <td>
                                                     <button type="button" class="badge badge-secondary" data-toggle="modal" data-target="#editmodal<?php echo $ds['id_data_stroke']; ?>">
                                                         Edit
                                                     </button>
                                                     <a href="<?= base_url() ?>data/hapus_data_stroke/<?php echo $ds['id_data_stroke']; ?>" class="badge badge-danger">Hapus</a>

                                                 </td>
                                             </tr>
                                         <?php endforeach; ?>
                                     </tbody>
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
                                 <?php echo form_open_multipart('data/proses_tambah_data_stroke'); ?>
                                 <div class="form-group">
                                     <label for="Id Pasien" class="col-form-label">Id Pasien:</label>
                                     <input type="text" class="form-control" name="id_pasien" class="form-control" id="id_pasien" required="">
                                 </div>
                                 <div class="form-group">
                                     <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                                     <select class="form-control" name="jenis_kelamin">
                                         <option value="0">Laki-Laki</option>
                                         <option value="1">Perempuan</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Usia" class="col-form-label">Usia:</label>
                                     <input type="text" class="form-control" name="usia" class="form-control" id="usia" required="">
                                 </div>
                                 <div class="form-group">
                                     <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                     <select class="form-control" name="hipertensi">
                                         <option value="0">Ya</option>
                                         <option value="1">Tidak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                     <select class="form-control" name="liver">
                                         <option value="0">Ya</option>
                                         <option value="1">Tidak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                     <select class="form-control" name="status_pernikahan">
                                         <option value="0">Sudah Menikah</option>
                                         <option value="1">Belum Menikah</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                     <select class="form-control" name="tipe_pekerjaan">
                                         <option value="0">Pekerja Swasta</option>
                                         <option value="1">Bisnis</option>
                                         <option value="2">Pemerintahan</option>
                                         <option value="3">Pekerja Anak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                     <select class="form-control" name="tempat_tinggal">
                                         <option value="0">Perkotaan</option>
                                         <option value="1">Pedesaan</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                     <select class="form-control" name="rata_kadar_glukosa">
                                         <option value="0">Glukosa < 130 </option>
                                         <option value="1">Glukosa antara 130 sampai 200</option>
                                         <option value="2">Glukosa > 200</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                     <select class="form-control" name="index_berat_badan">
                                         <option value="0">Index Berat Badan < 18 </option>
                                         <option value="1">Index Berat Badan antara 18 sampai 25</option>
                                         <option value="2">Index Berat Badan > 25</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                     <select class="form-control" name="status_perokok">
                                         <option value="0">Dulu Pernah</option>
                                         <option value="1">Tidak Pernah</option>
                                         <option value="2">Perokok</option>

                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                     <select class="form-control" name="keterangan">
                                         <option value="1">Berpotensi Stroke</option>
                                         <option value="0">Tidak Berpotensi Stroke</option>
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
                     <!-- Akhir Modal Tambah -->

                 </div>
                 <!-- Modal Edit Data -->
                 <?php $id_data_stroke = 0;
                    foreach ($data_stroke as $ds) : $id_data_stroke++; ?>

                     <div class="modal fade" id="editmodal<?php echo $ds['id_data_stroke']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Training</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <?php echo form_open_multipart('data/proses_edit_data_stroke'); ?>
                                     <input type="hidden" name="id_data_stroke" value="<?php echo $ds['id_data_stroke']; ?>">

                                     <div class="form-group">
                                         <label for="Id Pasien" class="col-form-label">Id Pasien:</label>
                                         <input type="text" class="form-control" name="id_pasien" class="form-control" id="id_pasien" value="<?php echo $ds['id_pasien']; ?>">
                                     </div>
                                     <div class="form-group">
                                         <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                                         <select class="form-control" name="jenis_kelamin">
                                             <option value="0" <?= $ds['jenis_kelamin'] == 0 ? "selected" : "" ?>>Laki-Laki</option>
                                             <option value="1" <?= $ds['jenis_kelamin'] == 1 ? "selected" : "" ?>>Perempuan</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Usia" class="col-form-label">Usia:</label>
                                         <input type="text" class="form-control" name="usia" id="usia" value="<?php echo $ds['usia']; ?>">
                                     </div>
                                     <div class=" form-group">
                                         <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                         <select class="form-control" name="hipertensi">
                                             <option value="0" <?= $ds['hipertensi'] == 0 ? "selected" : "" ?>>Ya</option>
                                             <option value="1" <?= $ds['hipertensi'] == 1 ? "selected" : "" ?>>Tidak</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                         <select class="form-control" name="liver">
                                             <option value="0" <?= $ds['liver'] == 0 ? "selected" : "" ?>>Ya</option>
                                             <option value="1" <?= $ds['liver'] == 1 ? "selected" : "" ?>>Tidak</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                         <select class="form-control" name="status_pernikahan">
                                             <option value="0" <?= $ds['status_pernikahan'] == 0 ? "selected" : "" ?>>Sudah Menikah</option>
                                             <option value="1" <?= $ds['status_pernikahan'] == 0 ? "selected" : "" ?>>Belum Menikah</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                         <select class="form-control" name="tipe_pekerjaan">
                                             <option value="0" <?= $ds['tipe_pekerjaan'] == 0 ? "selected" : "" ?>>Pekerja Swasta</option>
                                             <option value="1" <?= $ds['tipe_pekerjaan'] == 1 ? "selected" : "" ?>>Bisnis</option>
                                             <option value="2" <?= $ds['tipe_pekerjaan'] == 2 ? "selected" : "" ?>>Pemerintahan</option>
                                             <option value="3" <?= $ds['tipe_pekerjaan'] == 3 ? "selected" : "" ?>>Pekerja Anak</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                         <select class="form-control" name="tempat_tinggal">
                                             <option value="0" <?= $ds['tempat_tinggal'] == 0 ? "selected" : "" ?>>Perkotaan</option>
                                             <option value="1" <?= $ds['tempat_tinggal'] == 1 ? "selected" : "" ?>>Pedesaan</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                         <select class="form-control" name="rata_kadar_glukosa">
                                             <option value="0" <?= $ds['rata_kadar_glukosa'] == 0 ? "selected" : "" ?>>Glukosa < 130 </option>
                                             <option value="1" <?= $ds['rata_kadar_glukosa'] == 1 ? "selected" : "" ?>>Glukosa antara 130 sampai 200</option>
                                             <option value="2" <?= $ds['rata_kadar_glukosa'] == 2 ? "selected" : "" ?>>Glukosa > 200</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                         <select class="form-control" name="index_berat_badan">
                                             <option value="0" <?= $ds['index_berat_badan'] == 0 ? "selected" : "" ?>>Index Berat Badan < 18 </option>
                                             <option value="1" <?= $ds['index_berat_badan'] == 1 ? "selected" : "" ?>>Index Berat Badan antara 18 sampai 25</option>
                                             <option value="2" <?= $ds['index_berat_badan'] == 2 ? "selected" : "" ?>>Index Berat Badan > 25</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                         <select class="form-control" name="status_perokok">
                                             <option value="0" <?= $ds['status_perokok'] == 0 ? "selected" : "" ?>>Dulu Pernah</option>
                                             <option value="1" <?= $ds['status_perokok'] == 1 ? "selected" : "" ?>>Tidak Pernah</option>
                                             <option value="2" <?= $ds['status_perokok'] == 2 ? "selected" : "" ?>>Perokok</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                         <select class="form-control" name="keterangan">
                                             <option value="1" <?= $ds['keterangan'] == 1 ? "selected" : "" ?>>Berpotensi Stroke</option>
                                             <option value="0" <?= $ds['keterangan'] == 0 ? "selected" : "" ?>>Tidak Berpotensi Stroke</option>
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