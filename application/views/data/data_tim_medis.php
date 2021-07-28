 <!-- Begin Page Content -->
 <div class="container-fluid">
     <?= $this->session->flashdata('message'); ?>
     <div class="card shadow mb-4">
         <div class="card-header py-4">
             <div class="m-0 font-weight-bold text-secondary"><?= $title; ?> Admin

                 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                     Tambah Data Tim Medis
                 </button>
             </div>
             <div class="card-body">
                 <div class="table-responsive">
                     <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                             <tr>
                                 <td>No</td>
                                 <td>Id Tim Medis</td>
                                 <td>Nama Tim Medis</td>
                                 <td>Email</td>
                                 <td>Aksi</td>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                foreach ($data_tim_medis as $dtm) : ?>
                                 <tr>
                                     <td><?php echo $no++; ?></td>
                                     <td><?php echo $dtm['id_tim_medis']; ?></td>
                                     <td><?php echo $dtm['nama_tim_medis']; ?></td>
                                     <td><?php echo $dtm['email']; ?></td>
                                     <td>
                                         <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodaltimmedis<?php echo $dtm['id_tim_medis']; ?>">
                                             Edit
                                         </button>
                                         <a href="<?= base_url() ?>data_tim_medis/hapus_data_tim_medis/<?php echo $dtm['id_tim_medis']; ?>" class="badge badge-danger">Hapus</a>

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
                     <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Tim Medis</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <?php echo form_open_multipart('data_tim_medis/proses_tambah_data_tim_medis'); ?>
                     <div class="form-group">
                         <label for="if_tim_medis" class="col-form-label">Id Tim Medis:</label>
                         <input type="text" class="form-control" name="id_tim_medis" class="form-control" id="id_tim_medis" required="">
                     </div>
                     <div class="form-group">
                         <label for="nama_tim_medis" class="col-form-label">Nama Tim Medis:</label>
                         <input type="text" class="form-control" name="nama_tim_medis" class="form-control" id="id_tim_medis" required="">
                     </div>
                     <div class="form-group">
                         <label for="email" class="col-form-label">Email:</label>
                         <input type="text" class="form-control" name="email" class="form-control" id="email" required="">
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
     <?php $id_tim_medis = 0;
        foreach ($data_tim_medis as $dtm) : $id_tim_medis++; ?>
         <div class="modal fade" id="editmodaltimmedis<?php echo $dtm['id_tim_medis']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Tim Medis</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <?php echo form_open_multipart('data_tim_medis/proses_edit_data_tim_medis'); ?>
                         <!-- <input type="hidden" name="id_tim_medis" value="</?php echo $dtm['id_tim_medis']; ?>"> -->
                         <div class="form-group">
                             <label for="id tim medis" class="col-form-label">Id Tim Medis:</label>
                             <input type="text" name="id_tim_medis" class="form-control" id="id_tim_medis" value="<?php echo $dtm['id_tim_medis']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="id tim medis" class="col-form-label">Nama Tim Medis:</label>
                             <input type="text" name="id_tim_medis" class="form-control" id="id_tim_medis" value="<?php echo $dtm['nama_tim_medis']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="Email" class="col-form-label">Email:</label>
                             <input type="text" class="form-control" name="email" id="email" value="<?php echo $dtm['email']; ?>">
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