<div class="container pt-5">


    <!--% if $keterangan_pengunjung == 'stroke' %}-->
    <?php if ((bool)$result->keterangan) { ?>
        <div class="alert alert-danger">
            <h1>Anda Berpotensi Terkena Stroke!</h1>
            <hr class="my-1">
            <p>Segera periksa dan konsultasikan ke dokter!</p>
        </div>
    <?php } else { ?>
        <!--{% else %}-->
        <div class="alert alert-success">
            <h1>Anda Tidak Berpotensi Terkena Stroke</h1>
            <hr class="my-1">
            <p>Tetaplah waspada dan jaga kesehatan Anda!</p>
        </div>
    <?php } ?>
    <!--{% endif %}-->

    <div class="form-group">
        <a href="/predik/predik_masyarakat" class="btn btn-success">
            <i class="fa fa-angle-double-left"></i> Kembali
        </a>
    </div>
</div>