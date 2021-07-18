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
                             Tambah Data
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
                                        $id_data_stroke_tim_medis = 1;
                                        foreach ($data_stroke_tim_medis as $dstm) : ?>
                                         <tr>
                                             <td><?php echo $id_data_stroke_tim_medis++; ?></td>
                                             <td><?php echo $dstm['id_pasien']; ?></td>
                                             <td><?php echo $dstm['jenis_kelamin']; ?></td>
                                             <td><?php echo $dstm['usia']; ?></td>
                                             <td><?php echo $dstm['hipertensi']; ?></td>
                                             <td><?php echo $dstm['liver']; ?></td>
                                             <td><?php echo $dstm['status_pernikahan']; ?></td>
                                             <td><?php echo $dstm['tipe_pekerjaan']; ?></td>
                                             <td><?php echo $dstm['tempat_tinggal']; ?></td>
                                             <td><?php echo $dstm['rata_kadar_glukosa']; ?></td>
                                             <td><?php echo $dstm['index_berat_badan']; ?></td>
                                             <td><?php echo $dstm['status_perokok']; ?></td>
                                             <td><?php echo $dstm['keterangan']; ?></td>
                                             <td>
                                                 <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $dstm['id_data_stroke_tim_medis']; ?>">
                                                     Edit
                                                 </button>
                                                 <a href="<?= base_url() ?>data_stroke_tim_medis/hapus_data_stroke_tim_medis/<?php echo $dstm['id_data_stroke_tim_medis']; ?>" class="badge badge-danger">Hapus</a>

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
                             <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Stroke</h5>
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
                                     <option value="Laki-Laki">Laki-Laki</option>
                                     <option value="Perempuan">Perempuan</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Usia" class="col-form-label">Usia:</label>
                                 <select class="form-control" name="usia">
                                     <option value="Muda">Usia Di Bawah 30 Tahun</option>
                                     <option value="Usia Lanjut">Usia antara 31 s/d 60</option>
                                     <option value="Paruh Baya">Usia Di Atas 60</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                 <select class="form-control" name="hipertensi">
                                     <option value="Ya">Ya</option>
                                     <option value="Tidak">Tidak</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                 <select class="form-control" name="liver">
                                     <option value="Ya">Ya</option>
                                     <option value="Tidak">Tidak</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                 <select class="form-control" name="status_pernikahan">
                                     <option value="Sudah Menikah">Sudah Menikah</option>
                                     <option value="Belum Menikah">Belum Menikah</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                 <select class="form-control" name="tipe_pekerjaan">
                                     <option value="Pekerja Swasta">Pekerja Swasta</option>
                                     <option value="Bisnis">Bisnis</option>
                                     <option value="Pemerintahan">Pemerintahan</option>
                                     <option value="Pekerja Anak">Pekerja Anak</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                 <select class="form-control" name="tempat_tinggal">
                                     <option value="Perkotaan">Perkotaan</option>
                                     <option value="Pedesaan">Pedesaan</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                 <select class="form-control" name="rata_kadar_glukosa">
                                     <option value="Rendah">Glukosa < 130 </option>
                                     <option value="Normal">Glukosa antara 130 sampai 200</option>
                                     <option value="Tinggi">Glukosa > 200</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                 <select class="form-control" name="index_berat_badan">
                                     <option value="Rendah">Index Berat Badan < 18 </option>
                                     <option value="Normal">Index Berat Badan antara 18 sampai 25</option>
                                     <option value="Tinggi">Index Berat Badan > 25</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                 <select class="form-control" name="status_perokok">
                                     <option value="Dulu Pernah">Dulu Pernah</option>
                                     <option value="Tidak Pernah">Tidak Pernah</option>
                                     <option value="Perokok">Perokok</option>
                                     <option value="Tidak Diketahui">Tidak Diketahui</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                 <select class="form-control" name="keterangan">
                                     <option value="Stroke">Stroke</option>
                                     <option value="Tidak troke">Tidak Stroke</option>
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
             <?php $id_data_stroke_tim_medis = 0;
                foreach ($data_stroke_tim_medis as $dstm) : $id_data_stroke_tim_medis++; ?>

                 <div class="modal fade" id="editmodal<?php echo $ds['id_data_stroke']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Stroke</h5>
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
                                         <option value="Laki-Laki">Laki-Laki</option>
                                         <option value="Perempuan">Perempuan</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Usia" class="col-form-label">Usia:</label>
                                     <select class="form-control" name="usia">
                                         <option value="Muda">Usia Di Bawah 30 Tahun</option>
                                         <option value="Usia Lanjut">Usia antara 31 s/d 60</option>
                                         <option value="Tua">Usia Di Atas 60</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                                     <select class="form-control" name="hipertensi">
                                         <option value="Ya">Ya</option>
                                         <option value="Tidak">Tidak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                                     <select class="form-control" name="liver">
                                         <option value="Ya">Ya</option>
                                         <option value="Tidak">Tidak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                                     <select class="form-control" name="status_pernikahan">
                                         <option value="Sudah Menikah">Sudah Menikah</option>
                                         <option value="Belum Menikah">Belum Menikah</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                                     <select class="form-control" name="tipe_pekerjaan">
                                         <option value="Pekerja Swasta">Pekerja Swasta</option>
                                         <option value="Bisnis">Bisnis</option>
                                         <option value="Pemerintahan">Pemerintahan</option>
                                         <option value="Pekerja Anak">Pekerja Anak</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                                     <select class="form-control" name="tempat_tinggal">
                                         <option value="Perkotaan">Perkotaan</option>
                                         <option value="Pedesaan">Pedesaan</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                                     <select class="form-control" name="rata_kadar_glukosa">
                                         <option value="Rendah">Glukosa < 130 </option>
                                         <option value="Normal">Glukosa antara 130 sampai 200</option>
                                         <option value="Tinggi">Glukosa > 200</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                                     <select class="form-control" name="index_berat_badan">
                                         <option value="Rendah">Index Berat Badan < 18 </option>
                                         <option value="Normal">Index Berat Badan antara 18 sampai 25</option>
                                         <option value="Tinggi">Index Berat Badan > 25</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                                     <select class="form-control" name="status_perokok">
                                         <option value="Dulu Pernah">Dulu Pernah</option>
                                         <option value="Tidak Pernah">Tidak Pernah</option>
                                         <option value="Perokok">Perokok</option>
                                         <option value="Tidak Diketahui">Tidak Diketahui</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="Keterangan" class="col-form-label">Keterangan:</label>
                                     <select class="form-control" name="keterangan">
                                         <option value="Stroke">Stroke</option>
                                         <option value="Tidak Stroke">Tidak Stroke</option>
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