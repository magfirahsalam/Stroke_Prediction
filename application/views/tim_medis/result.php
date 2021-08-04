<div class="container-fluid">


    <!--% if $keterangan_pengunjung == 'stroke' %}-->
    <?php if ((bool)$result->keterangan) { ?>
        <div class="alert alert">
            <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
            <hr class="my-1">
            <h1>Stroke</h1>
            <hr class="my-1">
            <!-- <p>Segera periksa dan konsultasikan ke dokter!</p> -->
        </div>
    <?php } else { ?>
        <!--{% else %}-->
        <div class="col-xl-12">
            <div class="card-body alert">
                <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
                <hr class="my-1">
                <!-- <p class="card-text">ID Pasien : </?= $ptm['id_pasien_tm']; ?></p> -->
                <h6>Tidak Stroke</h6>
                <hr class="my-1">
                <!-- <p>Tetaplah waspada dan jaga kesehatan Anda!</p> -->
            </div>
        <?php } ?>
        <!--{% endif %}-->

        <div class="form-group">
            <a href="<?= base_url('prediksi_tim_medis/prediksitm'); ?>" class=" btn btn-secondary">
                <!--<input class="fa fa-angle-double-left"></input> --> Kembali
            </a>
        </div>
        </div>