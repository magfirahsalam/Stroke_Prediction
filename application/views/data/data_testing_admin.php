 <!-- Begin Page Content -->
 <div class="container-fluid">
     <?= $this->session->flashdata('message'); ?>
     <!-- Page Heading -->
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <Modal Export Excel -->
                 <div class="card">
                     <div class="card-body">
                         <?php echo form_open_multipart('import_data/import_data'); ?>
                         <?php if (!empty($this->session->flashdata('status'))) { ?>
                             <div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
                         <?php } ?>
                         <h5 class="card-title">Import dari Excel</h5>
                         <h6 class="card-subtitle mb-2 text-muted">Pilih Excel</h6>
                         <p class="card-text">
                             Apabila Anda memiliki data yang banyak, Anda dapat mengimport data tersebut. Data yang akan diimport harus berasal dari Excel. </p>
                         <form action="<?= base_url('import_data/import_data'); ?>" method="post" enctype="multipart/form-data">
                             <div class="form-row">
                                 <input type="file" class="form-control-file" name="importdata" id="importdata" accept=".xls,.xlsx, .csv">
                             </div>
                             <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                             <?php echo form_close(); ?>
                     </div>
                 </div>

                 <div class="card shadow mb-4">
                     <div class="card-header py-4">
                         <div class="m-0 font-weight-bold text-primary"><?= $title; ?> Admin

                             <!-- Button trigger modal -->
                             <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                                 Tambah Data Testing
                             </button>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                                     <thead>
                                         <tr>
                                             <td>Id Data Testing Stroke</td>
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
                                            $id_data_testing_stroke = 1;
                                            foreach ($data_testing_stroke as $dts) : ?>
                                             <tr>
                                                 <td><?php echo $id_data_testing_stroke++; ?></td>
                                                 <td><?php echo $dts['id_pasien_testing']; ?></td>
                                                 <td><?php echo $dts['jenis_kelamin_testing']; ?></td>
                                                 <td><?php echo $dts['usia_testing']; ?></td>
                                                 <td><?php echo $dts['hipertensi_testing']; ?></td>
                                                 <td><?php echo $dts['liver_testing']; ?></td>
                                                 <td><?php echo $dts['status_pernikahan_testing']; ?></td>
                                                 <td><?php echo $dts['tipe_pekerjaan_testing']; ?></td>
                                                 <td><?php echo $dts['tempat_tinggal_testing']; ?></td>
                                                 <td><?php echo $dts['rata_kadar_glukosa_testing']; ?></td>
                                                 <td><?php echo $dts['index_berat_badan_testing']; ?></td>
                                                 <td><?php echo $dts['status_perokok_testing']; ?></td>
                                                 <td><?php echo $dts['keterangan_testing']; ?></td>
                                                 <td>
                                                     <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodaltesting<?php echo $dts['id_data_testing_stroke']; ?>">
                                                         Edit
                                                     </button>
                                                     <a href="<?= base_url() ?>data_testing_admin/hapus_data_testing_stroke/<?php echo $dts['id_data_testing_stroke']; ?>" class="badge badge-danger">Hapus</a>

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
                                 <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Testing Stroke</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <?php echo form_open_multipart('data_testing_admin/proses_tambah_data_testing_stroke'); ?>
                                 <div class="form-group">
                                     <label for="Id Pasien" class="col-form-label">Id Pasien:</label>
                                     <input type="text" class="form-control" name="id_pasien_testing" class="form-control" id="id_pasien_testing" required="">
                                 </div>
                                 <div class="form-group">
                                     <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                                     <select class="form-control" name="jenis_kelamin_testing">
                                         <option value="0">Laki-Laki</option>
                                         <option value="1">Perempuan</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Usia" class="col-form-label">Usia:</label>
                                     <select class="form-control" name="usia_testing">
                                         <option value="0">Usia Di Bawah 30 Tahun</option>
                                         <option value="1">Usia antara 31 s/d 60</option>
                                         <option value="2">Usia Di Atas 60</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                     <select class="form-control" name="hipertensi_testing">
                                         <option value="0">Ya</option>
                                         <option value="1">Tidak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                     <select class="form-control" name="liver_testing">
                                         <option value="0">Ya</option>
                                         <option value="1">Tidak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                     <select class="form-control" name="status_pernikahan_testing">
                                         <option value="0">Sudah Menikah</option>
                                         <option value="1">Belum Menikah</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                     <select class="form-control" name="tipe_pekerjaan_testing">
                                         <option value="0">Pekerja Swasta</option>
                                         <option value="1">Bisnis</option>
                                         <option value="2">Pemerintahan</option>
                                         <option value="3">Pekerja Anak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                     <select class="form-control" name="tempat_tinggal_testing">
                                         <option value="0">Perkotaan</option>
                                         <option value="1">Pedesaan</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                     <select class="form-control" name="rata_kadar_glukosa_testing">
                                         <option value="0">Glukosa < 130 </option>
                                         <option value="1">Glukosa antara 130 sampai 200</option>
                                         <option value="2">Glukosa > 200</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                     <select class="form-control" name="index_berat_badan_testing">
                                         <option value="0">Index Berat Badan < 18 </option>
                                         <option value="1">Index Berat Badan antara 18 sampai 25</option>
                                         <option value="2">Index Berat Badan > 25</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                     <select class="form-control" name="status_perokok_testing">
                                         <option value="0">Dulu Pernah</option>
                                         <option value="1">Tidak Pernah</option>
                                         <option value="2">Perokok</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                     <select class="form-control" name="keterangan_testing">
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
                 <?php $id_data_testing_stroke = 0;
                    foreach ($data_testing_stroke as $dts) : $id_data_testing_stroke++; ?>

                     <div class="modal fade" id="editmodaltesting<?php echo $dts['id_data_testing_stroke']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Testing Stroke</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <?php echo form_open_multipart('data_testing_admin/proses_edit_data_testing_stroke'); ?>
                                     <input type="hidden" name="id_data_testing_stroke" value="<?php echo $dts['id_data_testing_stroke']; ?>">

                                     <div class="form-group">
                                         <label for="Id Pasien" class="col-form-label">Id Pasien:</label>
                                         <input type="text" class="form-control" name="id_pasien_testing" class="form-control" id="id_pasien_testing" value="<?php echo $dts['id_pasien_testing']; ?>">
                                     </div>
                                     <div class="form-group">
                                         <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                                         <select class="form-control" name="jenis_kelamin_testing">
                                             <option value="0">Laki-Laki</option>
                                             <option value="1">Perempuan</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Usia" class="col-form-label">Usia:</label>
                                         <select class="form-control" name="usia_testing">
                                             <option value="0">Usia Di Bawah 30 Tahun</option>
                                             <option value="1">Usia antara 31 s/d 60</option>
                                             <option value="2">Usia Di Atas 60</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                         <select class="form-control" name="hipertensi_testing">
                                             <option value="0">Ya</option>
                                             <option value="1">Tidak</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                         <select class="form-control" name="liver_testing">
                                             <option value="0">Ya</option>
                                             <option value="1">Tidak</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                         <select class="form-control" name="status_pernikahan_testing">
                                             <option value="0">Sudah Menikah</option>
                                             <option value="1">Belum Menikah</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                         <select class="form-control" name="tipe_pekerjaan_testing">
                                             <option value="0">Pekerja Swasta</option>
                                             <option value="1">Bisnis</option>
                                             <option value="2">Pemerintahan</option>
                                             <option value="3">Pekerja Anak</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                         <select class="form-control" name="tempat_tinggal_testing">
                                             <option value="0">Perkotaan</option>
                                             <option value="1">Pedesaan</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                         <select class="form-control" name="rata_kadar_glukosa_testing">
                                             <option value="0">Glukosa < 130 </option>
                                             <option value="1">Glukosa antara 130 sampai 200</option>
                                             <option value="2">Glukosa > 200</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                         <select class="form-control" name="index_berat_badan_testing">
                                             <option value="0">Index Berat Badan < 18 </option>
                                             <option value="1">Index Berat Badan antara 18 sampai 25</option>
                                             <option value="2">Index Berat Badan > 25</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                         <select class="form-control" name="status_perokok_testing">
                                             <option value="0">Dulu Pernah</option>
                                             <option value="1">Tidak Pernah</option>
                                             <option value="2">Perokok</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                         <select class="form-control" name="keterangan_testing">
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
                     <?php endforeach; ?>
                     </div>
         </div>
     </div>
 </div>