<div class="container-fluid">
    <h3> <?= $title; ?></h3>
    <hr>
    <br>

    <form method="post" action="<?= base_url('index_artikel/proses_edit_artikel'); ?>">
        <input type="hidden" name="id_artikel" value="<?php echo $artikel['id_artikel'] ?>">
        <div class="form-group row">
            <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="Judul" value="<?php echo $artikel['Judul']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="Isi" class="col-sm-2 col-form-label">Isi</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="Isi" value="<?php echo $artikel['Isi']; ?>"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="Penulis" class="col-sm-2 col-form-label">Penulis</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="Penulis" value="<?php echo $artikel['Penulis']; ?>"></input>
            </div>
        </div>
        <div class="form-group row">
            <label for="Penulis" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-8">
                <div class="col-sm-3">
                    <img src="<?php echo base_url('/vendor/sbadmin2/img/artikel/') . $artikel['Gambar']; ?>" class="img-thumbnail">
                </div>
                <div class="col-sm-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="form-group row">
    <label for="tambah" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Ubah</button>
        <button type="reset" class="btn btn-danger ">Reset</button>
    </div>
</div>
</form>
</div>