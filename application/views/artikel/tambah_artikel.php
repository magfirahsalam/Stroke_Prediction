<div class="container-fluid">
    <h3> <?= $title; ?></h3>
    <hr>
    <br>

    <form method="post" action="<?= base_url('index_artikel/proses_tambah_artikel'); ?>">
        <div class="form-group row">
            <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="Judul" required="">
            </div>
        </div>
        <div class="form-group row">
            <label for="Isi" class="col-sm-2 col-form-label">Isi</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" name="Isi" required=""></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="tambah" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-danger ">Reset</button>
            </div>
        </div>
    </form>
</div>