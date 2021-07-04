<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-4">
            <div class="m-0 font-weight-bold text-primary">Halaman Artikel

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Artikel
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-justify" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>Id Artikel</td>
                                <td>Judul</td>
                                <td>Isi</td>
                                <td>Penulis</td>
                                <td>Gambar</td>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id_artikel = 1;
                            foreach ($artikel as $art) : ?>
                                <tr>
                                    <td><?php echo $id_artikel++; ?> </td>
                                    <td><?php echo $art['Judul']; ?></td>
                                    <td><?php echo $art['Isi']; ?></td>
                                    <td><?php echo $art['Penulis']; ?></td>

                                    <td><img src="<?php echo base_url() . 'vendor/sbadmin2/img/artikel/' . $art['Gambar'] ?>" width="100"></td>
                                    <td class="text-center" width="160px">
                                        <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $art['Judul']; ?>">
                                            Edit
                                        </button>
                                        <a href="<?= base_url() ?>Index_artikel/hapus_artikel/<?php echo $art['id_artikel']; ?>" class="badge badge-danger" onclick="javascript: return confirm('Anda yakin hapus?')">Hapus</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('index_artikel/proses_tambah_artikel'); ?>
                    <div class="form-group">
                        <label for="Judul" class="col-form-label">Judul:</label>
                        <input type="text" class="form-control" name="Judul" class="form-control" id="Judul" required="">
                    </div>
                    <div class="form-group">
                        <label for="Isi" class="col-form-label">Isi:</label>
                        <textarea class="form-control" name="Isi" id="Isi" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Penulis" class="col-form-label">Penulis:</label>
                        <input type="text" class="form-control" name="Penulis" id="Penulis" required=""></input>
                    </div>
                </div>
                <div class="form-group col-md-8">
                    <label for="Gambar">Gambar:</label>
                    <input type="file" name="Gambar" id="Gambar" class="form-control-sm" size="20" required=""></input>
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

    <!-- Modal Edit Data -->
    <?php $id_artikel = 0;
    foreach ($artikel as $art) : $id_artikel++; ?>

        <div class="modal fade" id="editmodal<?php echo $art['Judul']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Edit Artikel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open_multipart('index_artikel/proses_edit_artikel'); ?>
                        <input type="hidden" name="id_artikel" value="<?php echo $art['id_artikel']; ?>">
                        <div class="form-group">
                            <label for="Judul" class="col-form-label">Judul:</label>
                            <input type="text" class="form-control" name="Judul" id="Judul" value="<?php echo $art['Judul']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Isi" class="col-form-label">Isi:</label>
                            <textarea input type="text" class="form-control" name="Isi" id="Isi" value="<?php echo $art['Isi']; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Penulis" class="col-form-label">Penulis:</label>
                            <input type="text" class="form-control" name="Penulis" id="Penulis" value="<?php echo $art['Penulis']; ?>"></input>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="Gambar">Gambar:</label>
                            <input type="file" name="Gambar" id="Gambar" class="form-control-sm" size="20"></input>
                        </div>
                        <img src="<?php echo base_url() . '/vendor/sbadmin2/img/artikel/' . $art['Gambar']; ?>" width="100">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>