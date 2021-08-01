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

                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                             Tambah Data Prediksi Tim Medis
                         </button>
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
                                         <td>Tekanan Darah Tinggi</td>
                                         <td>Riwayat Liver</td>
                                         <td>Status Menikah</td>
                                         <td>Tipe Pekerjaan</td>
                                         <td>Tempat Tinggal</td>
                                         <td>Kadar Glukosa</td>
                                         <td>Index Berat Badan</td>
                                         <td>Status Merokok</td>
                                         <td>Hasil Prediksi</td>
                                         <td>Dibuat Pada</td>
                                         <td>Aksi</td>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $id_prediksi_tim_medis = 1;
                                        foreach ($prediksi_tim_medis as $pdktm) : ?>
                                         <tr>
                                             <td><?php echo $id_prediksi_tim_medis++; ?></td>
                                             <td><?php echo $pdktm['id_pasien_tm']; ?></td>
                                             <td><?php echo $pdktm['jenis_kelamin_tm']; ?></td>
                                             <td><?php echo $pdktm['usia_tm']; ?></td>
                                             <td><?php echo $pdktm['hipertensi_tm']; ?></td>
                                             <td><?php echo $pdktm['liver_tm']; ?></td>
                                             <td><?php echo $pdktm['status_pernikahan_tm']; ?></td>
                                             <td><?php echo $pdktm['tipe_pekerjaan_tm']; ?></td>
                                             <td><?php echo $pdktm['tempat_tinggal_tm']; ?></td>
                                             <td><?php echo $pdktm['rata_kadar_glukosa_tm']; ?></td>
                                             <td><?php echo $pdktm['index_bb_tm']; ?></td>
                                             <td><?php echo $pdktm['status_perokok_tm']; ?></td>
                                             <td><?php echo $pdktm['keterangan_tm']; ?></td>
                                             <td><?php echo $pdktm['dibuat_pada']; ?></td>
                                             <td>
                                                 <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $pdk['id_prediksi']; ?>">
                                                     Edit
                                                 </button>
                                                 <a href="<?= base_url() ?>prediksi_tim_medis/hapus_data_prediksim/<?php echo $pdk['id_prediksi']; ?>" class="badge badge-danger">Hapus</a>
                                                 <!--<button type="button" a href="</?= base_url() ?>predik_masyarakat/jadi_data_training/</?php echo $pdk['id_prediksi']; ?>" class="badge badge-warning">Jadi Data Training</button>

                                             </td>
                                         </tr>
                                 </tbody>
                             <?php endforeach; ?>
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
                                                                     <input type="text" class="form-control" name="id_pasien" class="form-control" id="id_pasien" required="">
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
                                                                     <select class="form-control" name="index_bb_pengunjung">
                                                                         <option value="0">Index Berat Badan < 18 </option>
                                                                         <option value="1">Index Berat Badan antara 18 sampai 25</option>
                                                                         <option value="2">Index Berat Badan > 25</option>
                                                                     </select>
                                                                 </div>
                                                                 <div class="form-group">
                                                                     <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                                                     <select class="form-control" name="status_perokok_pengunjung">
                                                                         <option value="0">Dulu Pernah</option>
                                                                         <option value="1">Tidak Pernah</option>
                                                                         <option value="2">Perokok</option>
                                                                     </select>
                                                                 </div>
                                                                 <div class="form-group">
                                                                     <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                                                     <select class="form-control" name="keterangan_pengunjung">
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

                                                     <div class="modal fade" id="editmodal<?php echo $pdk['id_prediksi']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                         <div class="modal-dialog" role="document">
                                                             <div class="modal-content">
                                                                 <div class="modal-header">
                                                                     <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Stroke</h5>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                         <span aria-hidden="true">&times;</span>
                                                                     </button>
                                                                 </div>
                                                                 <div class="modal-body">
                                                                     <?php echo form_open_multipart('predik_masyarakat/proses_edit_data_prediksim'); ?>
                                                                     <input type="hidden" name="id_prediksi" value="<?php echo $pdk['id_prediksi']; ?>">

                                                                     <!-- <div class="form-group">
                                     <label for="Id Pasien" class="col-form-label">Id Pasien:</label>
                                     <input type="text" class="form-control" name="id_prediksi" class="form-control" id="id_prediksi" value="</?php echo $pdk['id_prediksi']; ?>">
                                 </div> -->
                                                                     <div class="form-group">
                                                                         <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                                                                         <select class="form-control" name="jenis_kelamin" value="<?php echo $pdk['jenis_kelamin_pengunjung']; ?>">
                                                                             <option value="0">Laki-Laki</option>
                                                                             <option value="1">Perempuan</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Usia" class="col-form-label">Usia:</label>
                                                                         <select class="form-control" name="usia" input type="number" value="<?php echo $pdk['usia_pengunjung']; ?>">
                                                                             <option value="0">Usia Di Bawah 30 Tahun</option>
                                                                             <option value="1">Usia antara 31 s/d 60</option>
                                                                             <option value="2">Usia Di Atas 60</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                                                         <select class="form-control" name="hipertensi" value="<?php echo $pdk['hipertensi_pengunjung']; ?>">
                                                                             <option value="0">Ya</option>
                                                                             <option value="1">Tidak</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                                                         <select class="form-control" name="liver" value="<?php echo $pdk['liver_pengunjung']; ?>">
                                                                             <option value="0">Ya</option>
                                                                             <option value="1">Tidak</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                                                         <select class="form-control" name="status_pernikahan" value="<?php echo $pdk['status_pernikahan_pengunjung']; ?>">
                                                                             <option value="0">Sudah Menikah</option>
                                                                             <option value="1">Belum Menikah</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                                                         <select class="form-control" name="tipe_pekerjaan" value="<?php echo $pdk['tipe_pekerjaan_pengunjung']; ?>">
                                                                             <option value="0">Pekerja Swasta</option>
                                                                             <option value="1">Bisnis</option>
                                                                             <option value="2">Pemerintahan</option>
                                                                             <option value="3">Pekerja Anak</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                                                         <select class="form-control" name="tempat_tinggal" value="<?php echo $pdk['tempat_tinggal_pengunjung']; ?>">
                                                                             <option value="0">Perkotaan</option>
                                                                             <option value="1">Pedesaan</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                                                         <select class="form-control" name="rata_kadar_glukosa" value="<?php echo $pdk['rata_kadar_glukosa_pengunjung']; ?>">
                                                                             <option value="0">Glukosa < 130 </option>
                                                                             <option value="1">Glukosa antara 130 sampai 200</option>
                                                                             <option value="2">Glukosa > 200</option>
                                                                         </select>
                                                                     </div>

                                                                     <div class="form-group">
                                                                         <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                                                         <select class="form-control" name="index_berat_badan" value="<?php echo $pdk['index_bb_pengunjung']; ?>">
                                                                             <option value="0">Index Berat Badan < 18 </option>
                                                                             <option value="1">Index Berat Badan antara 18 sampai 25</option>
                                                                             <option value="2">Index Berat Badan > 25</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                                                         <select class="form-control" name="status_perokok" value="<?php echo $pdk['status_perokok_pengunjung']; ?>">
                                                                             <option value="0">Dulu Pernah</option>
                                                                             <option value="1">Tidak Pernah</option>
                                                                             <option value="2">Perokok</option>
                                                                         </select>
                                                                     </div>
                                                                     <div class="form-group">
                                                                         <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                                                         <select class="form-control" name="keterangan" value="<?php echo $pdk['keterangan_pengunjung']; ?>">
                                                                             <option value="1">Stroke</option>
                                                                             <option value="0">Tidak Stroke</option>
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