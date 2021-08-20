<div class="container-fluid">


    <!--% if $keterangan_pengunjung == 'stroke' %}-->
    <?php if ($result->diagnosa == 0) { ?>
        <div class="alert alert">
            <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
            <hr class="my-1">
            <h1>Hasil Diagnosa: Stroke Non-Haemoragic</h1>

            <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?><br>
            <?php echo "jenis_kelamin_tm : " . $temp['jenis_kelamin_tm']; ?><br>
            <?php echo "Usia : " . $temp['usia_tm']; ?><br>
            <?php echo "keadaan_umum_tm : " . $temp['keadaan_umum_tm']; ?><br>
            <?php echo "kesadaran_tm : " . $temp['kesadaran_tm']; ?><br>
            <?php echo "tensi_darah_tm : " . $temp['tensi_darah_tm']; ?><br>
            <?php echo "nadi_permenit_tm : " . $temp['nadi_permenit_tm']; ?><br>
            <?php echo "suara_napas_tm : " . $temp['suara_napas_tm']; ?><br>
            <?php echo "respirasi_permenit_tm : " . $temp['respirasi_permenit_tm']; ?><br>
            <?php echo "spo2_tm : " . $temp['spo2_tm']; ?><br>
            <?php echo "perubahan_sensorik_tm : " . $temp['perubahan_sensorik_tm']; ?><br>
            <?php echo "perubahan_motorik_tm : " . $temp['perubahan_motorik_tm']; ?><br>
            <?php echo "irama_napas_tm : " . $temp['irama_napas_tm']; ?><br>
            <?php echo "bunyi_napas_tm : " . $temp['bunyi_napas_tm']; ?><br>
            <?php echo "henti_jantung_tm : " . $temp['henti_jantung_tm']; ?><br>
            <?php echo "kulit_tm : " . $temp['kulit_tm']; ?><br>
            <?php echo "akral_tm : " . $temp['akral_tm']; ?><br>
            <?php echo "pendarahan_tm : " . $temp['pendarahan_tm']; ?><br>
            <?php echo "turgor_tm : " . $temp['turgor_tm']; ?><br>
            <?php echo "sianosis_tm : " . $temp['sianosis_tm']; ?><br>
            <?php echo "riwayat_alergi_tm : " . $temp['riwayat_alergi_tm']; ?><br>
            <?php echo "medikasi_tm : " . $temp['medikasi_tm']; ?><br>
            <?php echo "pernah_stroke_tm : " . $temp['pernah_stroke_tm']; ?><br>
            <?php echo "refleks_cahaya_tm : " . $temp['refleks_cahaya_tm']; ?><br>
            <?php echo "skala_nyeri_tm : " . $temp['skala_nyeri_tm']; ?><br>
            <?php echo "skala_nyeri_tm : " . $temp['skala_nyeri_tm']; ?><br>
            <?php echo "aktivitas_mobilisasi_tm : " . $temp['aktivitas_mobilisasi_tm']; ?><br>
            <?php echo "risiko_jatuh_tm : " . $temp['risiko_jatuh_tm']; ?><br>
            <?php echo "crt_tm : " . $temp['crt_tm']; ?><br>
            <?php echo "gcs_tm : " . $temp['gcs_tm']; ?><br>

            <hr class="my-1">
            <!-- <p>Segera periksa dan konsultasikan ke dokter!</p> -->
        </div>
    <?php } elseif ($result->diagnosa == 1) { ?>
        <div class="col-xl-12">
            <div class="card-body alert">
                <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
                <hr class="my-1">
                <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?><br>
                <?php echo "jenis_kelamin_tm : " . $temp['jenis_kelamin_tm']; ?><br>
                <?php echo "Usia : " . $temp['usia_tm']; ?><br>
                <?php echo "keadaan_umum_tm : " . $temp['keadaan_umum_tm']; ?><br>
                <?php echo "kesadaran_tm : " . $temp['kesadaran_tm']; ?><br>
                <?php echo "tensi_darah_tm : " . $temp['tensi_darah_tm']; ?><br>
                <?php echo "nadi_permenit_tm : " . $temp['nadi_permenit_tm']; ?><br>
                <?php echo "suara_napas_tm : " . $temp['suara_napas_tm']; ?><br>
                <?php echo "respirasi_permenit_tm : " . $temp['respirasi_permenit_tm']; ?><br>
                <?php echo "spo2_tm : " . $temp['spo2_tm']; ?><br>
                <?php echo "perubahan_sensorik_tm : " . $temp['perubahan_sensorik_tm']; ?><br>
                <?php echo "perubahan_motorik_tm : " . $temp['perubahan_motorik_tm']; ?><br>
                <?php echo "irama_napas_tm : " . $temp['irama_napas_tm']; ?><br>
                <?php echo "bunyi_napas_tm : " . $temp['bunyi_napas_tm']; ?><br>
                <?php echo "henti_jantung_tm : " . $temp['henti_jantung_tm']; ?><br>
                <?php echo "kulit_tm : " . $temp['kulit_tm']; ?><br>
                <?php echo "akral_tm : " . $temp['akral_tm']; ?><br>
                <?php echo "pendarahan_tm : " . $temp['pendarahan_tm']; ?><br>
                <?php echo "turgor_tm : " . $temp['turgor_tm']; ?><br>
                <?php echo "sianosis_tm : " . $temp['sianosis_tm']; ?><br>
                <?php echo "riwayat_alergi_tm : " . $temp['riwayat_alergi_tm']; ?><br>
                <?php echo "medikasi_tm : " . $temp['medikasi_tm']; ?><br>
                <?php echo "pernah_stroke_tm : " . $temp['pernah_stroke_tm']; ?><br>
                <?php echo "refleks_cahaya_tm : " . $temp['refleks_cahaya_tm']; ?><br>
                <?php echo "skala_nyeri_tm : " . $temp['skala_nyeri_tm']; ?><br>
                <?php echo "aktivitas_mobilisasi_tm : " . $temp['aktivitas_mobilisasi_tm']; ?><br>
                <?php echo "risiko_jatuh_tm : " . $temp['risiko_jatuh_tm']; ?><br>
                <?php echo "crt_tm : " . $temp['crt_tm']; ?><br>
                <?php echo "gcs_tm : " . $temp['gcs_tm']; ?><br>

                <br>
                <!-- <p class="card-text">ID Pasien : </?= $ptm['id_pasien_tm']; ?></p> -->
                <h5>Diagnosa : Stroke Non-Haemoragic</h5>
                <hr class="my-1">
                <!-- <p>Tetaplah waspada dan jaga kesehatan Anda!</p> -->
            </div>
        <?php } elseif ($result->diagnosa == 2) { ?>
            <div class="col-xl-12">
                <div class="card-body alert">
                    <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
                    <hr class="my-1">
                    <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?><br>
                    <?php echo "jenis_kelamin_tm : " . $temp['jenis_kelamin_tm']; ?><br>
                    <?php echo "Usia : " . $temp['usia_tm']; ?><br>
                    <?php echo "keadaan_umum_tm : " . $temp['keadaan_umum_tm']; ?><br>
                    <?php echo "kesadaran_tm : " . $temp['kesadaran_tm']; ?><br>
                    <?php echo "tensi_darah_tm : " . $temp['tensi_darah_tm']; ?><br>
                    <?php echo "nadi_permenit_tm : " . $temp['nadi_permenit_tm']; ?><br>
                    <?php echo "suara_napas_tm : " . $temp['suara_napas_tm']; ?><br>
                    <?php echo "respirasi_permenit_tm : " . $temp['respirasi_permenit_tm']; ?><br>
                    <?php echo "spo2_tm : " . $temp['spo2_tm']; ?><br>
                    <?php echo "perubahan_sensorik_tm : " . $temp['perubahan_sensorik_tm']; ?><br>
                    <?php echo "perubahan_motorik_tm : " . $temp['perubahan_motorik_tm']; ?><br>
                    <?php echo "irama_napas_tm : " . $temp['irama_napas_tm']; ?><br>
                    <?php echo "bunyi_napas_tm : " . $temp['bunyi_napas_tm']; ?><br>
                    <?php echo "henti_jantung_tm : " . $temp['henti_jantung_tm']; ?><br>
                    <?php echo "kulit_tm : " . $temp['kulit_tm']; ?><br>
                    <?php echo "akral_tm : " . $temp['akral_tm']; ?><br>
                    <?php echo "pendarahan_tm : " . $temp['pendarahan_tm']; ?><br>
                    <?php echo "turgor_tm : " . $temp['turgor_tm']; ?><br>
                    <?php echo "sianosis_tm : " . $temp['sianosis_tm']; ?><br>
                    <?php echo "riwayat_alergi_tm : " . $temp['riwayat_alergi_tm']; ?><br>
                    <?php echo "medikasi_tm : " . $temp['medikasi_tm']; ?><br>
                    <?php echo "pernah_stroke_tm : " . $temp['pernah_stroke_tm']; ?><br>
                    <?php echo "refleks_cahaya_tm : " . $temp['refleks_cahaya_tm']; ?><br>
                    <?php echo "skala_nyeri_tm : " . $temp['skala_nyeri_tm']; ?><br>
                    <?php echo "aktivitas_mobilisasi_tm : " . $temp['aktivitas_mobilisasi_tm']; ?><br>
                    <?php echo "risiko_jatuh_tm : " . $temp['risiko_jatuh_tm']; ?><br>
                    <?php echo "crt_tm : " . $temp['crt_tm']; ?><br>
                    <?php echo "gcs_tm : " . $temp['gcs_tm']; ?><br>

                    <br>
                    <!-- <p class="card-text">ID Pasien : </?= $ptm['id_pasien_tm']; ?></p> -->
                    <h5>Diagnosa : Stroke Iskemik</h5>
                    <hr class="my-1">
                    <!-- <p>Tetaplah waspada dan jaga kesehatan Anda!</p> -->
                </div>
            <?php } elseif ($result->diagnosa == 3) { ?>
                <div class="col-xl-12">
                    <div class="card-body alert">
                        <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
                        <hr class="my-1">
                        <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?><br>
                        <?php echo "jenis_kelamin_tm : " . $temp['jenis_kelamin_tm']; ?><br>
                        <?php echo "Usia : " . $temp['usia_tm']; ?><br>
                        <?php echo "keadaan_umum_tm : " . $temp['keadaan_umum_tm']; ?><br>
                        <?php echo "kesadaran_tm : " . $temp['kesadaran_tm']; ?><br>
                        <?php echo "tensi_darah_tm : " . $temp['tensi_darah_tm']; ?><br>
                        <?php echo "nadi_permenit_tm : " . $temp['nadi_permenit_tm']; ?><br>
                        <?php echo "suara_napas_tm : " . $temp['suara_napas_tm']; ?><br>
                        <?php echo "respirasi_permenit_tm : " . $temp['respirasi_permenit_tm']; ?><br>
                        <?php echo "spo2_tm : " . $temp['spo2_tm']; ?><br>
                        <?php echo "perubahan_sensorik_tm : " . $temp['perubahan_sensorik_tm']; ?><br>
                        <?php echo "perubahan_motorik_tm : " . $temp['perubahan_motorik_tm']; ?><br>
                        <?php echo "irama_napas_tm : " . $temp['irama_napas_tm']; ?><br>
                        <?php echo "bunyi_napas_tm : " . $temp['bunyi_napas_tm']; ?><br>
                        <?php echo "henti_jantung_tm : " . $temp['henti_jantung_tm']; ?><br>
                        <?php echo "kulit_tm : " . $temp['kulit_tm']; ?><br>
                        <?php echo "akral_tm : " . $temp['akral_tm']; ?><br>
                        <?php echo "pendarahan_tm : " . $temp['pendarahan_tm']; ?><br>
                        <?php echo "turgor_tm : " . $temp['turgor_tm']; ?><br>
                        <?php echo "sianosis_tm : " . $temp['sianosis_tm']; ?><br>
                        <?php echo "riwayat_alergi_tm : " . $temp['riwayat_alergi_tm']; ?><br>
                        <?php echo "medikasi_tm : " . $temp['medikasi_tm']; ?><br>
                        <?php echo "pernah_stroke_tm : " . $temp['pernah_stroke_tm']; ?><br>
                        <?php echo "refleks_cahaya_tm : " . $temp['refleks_cahaya_tm']; ?><br>
                        <?php echo "skala_nyeri_tm : " . $temp['skala_nyeri_tm']; ?><br>
                        <?php echo "aktivitas_mobilisasi_tm : " . $temp['aktivitas_mobilisasi_tm']; ?><br>
                        <?php echo "risiko_jatuh_tm : " . $temp['risiko_jatuh_tm']; ?><br>
                        <?php echo "crt_tm : " . $temp['crt_tm']; ?><br>
                        <?php echo "gcs_tm : " . $temp['gcs_tm']; ?><br>

                        <br>
                        <h5>Diagnosa : Stroke Sequelae</h5>
                        <hr class="my-1">
                    </div>
                <?php } elseif ($result->diagnosa == 4) { ?>
                    <div class="col-xl-12">
                        <div class="card-body alert">
                            <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
                            <hr class="my-1">
                            <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?><br>
                            <?php echo "jenis_kelamin_tm : " . $temp['jenis_kelamin_tm']; ?><br>
                            <?php echo "Usia : " . $temp['usia_tm']; ?><br>
                            <?php echo "keadaan_umum_tm : " . $temp['keadaan_umum_tm']; ?><br>
                            <?php echo "kesadaran_tm : " . $temp['kesadaran_tm']; ?><br>
                            <?php echo "tensi_darah_tm : " . $temp['tensi_darah_tm']; ?><br>
                            <?php echo "nadi_permenit_tm : " . $temp['nadi_permenit_tm']; ?><br>
                            <?php echo "suara_napas_tm : " . $temp['suara_napas_tm']; ?><br>
                            <?php echo "respirasi_permenit_tm : " . $temp['respirasi_permenit_tm']; ?><br>
                            <?php echo "spo2_tm : " . $temp['spo2_tm']; ?><br>
                            <?php echo "perubahan_sensorik_tm : " . $temp['perubahan_sensorik_tm']; ?><br>
                            <?php echo "perubahan_motorik_tm : " . $temp['perubahan_motorik_tm']; ?><br>
                            <?php echo "irama_napas_tm : " . $temp['irama_napas_tm']; ?><br>
                            <?php echo "bunyi_napas_tm : " . $temp['bunyi_napas_tm']; ?><br>
                            <?php echo "henti_jantung_tm : " . $temp['henti_jantung_tm']; ?><br>
                            <?php echo "kulit_tm : " . $temp['kulit_tm']; ?><br>
                            <?php echo "akral_tm : " . $temp['akral_tm']; ?><br>
                            <?php echo "pendarahan_tm : " . $temp['pendarahan_tm']; ?><br>
                            <?php echo "turgor_tm : " . $temp['turgor_tm']; ?><br>
                            <?php echo "sianosis_tm : " . $temp['sianosis_tm']; ?><br>
                            <?php echo "riwayat_alergi_tm : " . $temp['riwayat_alergi_tm']; ?><br>
                            <?php echo "medikasi_tm : " . $temp['medikasi_tm']; ?><br>
                            <?php echo "pernah_stroke_tm : " . $temp['pernah_stroke_tm']; ?><br>
                            <?php echo "refleks_cahaya_tm : " . $temp['refleks_cahaya_tm']; ?><br>
                            <?php echo "skala_nyeri_tm : " . $temp['skala_nyeri_tm']; ?><br>
                            <?php echo "aktivitas_mobilisasi_tm : " . $temp['aktivitas_mobilisasi_tm']; ?><br>
                            <?php echo "risiko_jatuh_tm : " . $temp['risiko_jatuh_tm']; ?><br>
                            <?php echo "crt_tm : " . $temp['crt_tm']; ?><br>
                            <?php echo "gcs_tm : " . $temp['gcs_tm']; ?><br>

                            <br>
                            <h5>Diagnosa: Stroke</h5>
                            <hr class="my-1">
                        </div>
                    <?php } ?>
                    <!--{% endif %}-->

                    <div class="form-group">
                        <a href="<?= base_url('prediksi_tim_medis/prediksitm'); ?>" class=" btn btn-secondary">
                            <!--<input class="fa fa-angle-double-left"></input> --> Kembali
                        </a>
                    </div>
                    </div>