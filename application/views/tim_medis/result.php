<div class="container-fluid">


    <!--% if $keterangan_pengunjung == 'stroke' %}-->
    <?php if ((bool)$result->keterangan) { ?>
        <div class="alert alert">
            <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
            <hr class="my-1">
            <h1>Hasil: Stroke</h1>

            <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?>
            <br>
            <?php echo "Usia Pasien : " . $temp['usia_tm']; ?>
            <br>
            <?php echo "Berat Badan Pasien : " . $temp['berat_badan_tm']; ?>
            <br>
            <?php echo "Tinggi Badan Pasien : " . $temp['tinggi_badan_tm']; ?>

            <hr class="my-1">
            <!-- <p>Segera periksa dan konsultasikan ke dokter!</p> -->
        </div>
    <?php } else { ?>
        <!--{% else %}-->
        <div class="col-xl-12">
            </?php foreach ($prediksi_tim_medis as $ptm) : ?>
            <div class="card-body alert">
                <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
                <hr class="my-1">
                <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?>
                <br>
                <?php echo "Usia Pasien : " . $temp['usia_tm']; ?>
                <br>
                <?php echo "Berat Badan Pasien : " . $temp['berat_badan_tm']; ?>
                <br>
                <?php echo "Tinggi Badan Pasien : " . $temp['tinggi_badan_tm']; ?>


                <br>
                <!-- <p class="card-text">ID Pasien : </?= $ptm['id_pasien_tm']; ?></p> -->
                <h3>Hasil : Tidak Stroke</h3>
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