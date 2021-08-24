<div class="container-fluid">


    <!--% if $keterangan_pengunjung == 'stroke' %}-->
    <?php if ($result->diagnosa == 0) { ?>
        <div class="alert alert">
            <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
            <hr class="my-1">

            <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?><br>
            <?php
            if ($temp['jenis_kelamin_tm'] == '0') {
                echo "Jenis Kelamin : Perempuan";
            } else {
                echo "Jenis Kelamin : Laki-Laki";
            }
            // echo "jenis_kelamin_tm : " . $temp['jenis_kelamin_tm']; 
            ?><br>
            <?php echo "Usia : " . $temp['usia_tm']; ?><br>
            <?php
            if ($temp['keadaan_umum_tm'] == '0') {
                echo "Keadaan Umum : Tidak Tercantum";
            } elseif ($temp['keadaan_umum_tm'] == '1') {
                echo "Keadaan Umum : Sedang";
            } elseif ($temp['keadaan_umum_tm'] == '2') {
                echo "Keadaan Umum : Tidak Sadar";
            } else {
                echo "Keadaan Umum : Lemah";
            }
            ?><br>
            <?php
            if ($temp['kesadaran_tm'] == '0') {
                echo "Kesadaran : Tidak Tercantum";
            } elseif ($temp['kesadaran_tm'] == '1') {
                echo "Kesadaran Umum : Samno-Len";
            } elseif ($temp['kesadaran_tm'] == '2') {
                echo "Kesadaran : Sofor";
            } elseif ($temp['kesadaran_tm'] == '3') {
                echo "Kesadaran : CM";
            } elseif ($temp['kesadaran_tm'] == '4') {
                echo "Kesadaran : Apatis";
            } else {
                echo "Kesadaran : Coma";
            }
            ?><br>
            <?php echo "Tensi Darah : " . $temp['tensi_darah_tm']; ?><br>
            <?php echo "Nadi Permenit : " . $temp['nadi_permenit_tm']; ?><br>
            <?php
            if ($temp['suara_napas_tm'] == '0') {
                echo "Suara Napas : Tidak Tercantum";
            } elseif ($temp['suara_napas_tm'] == '1') {
                echo "Suara Napas : Normal";
            } else {
                echo "Suara Napas : Tidak Normal";
            }
            ?><br>
            <?php echo "Respirasi Permenit : " . $temp['respirasi_permenit_tm']; ?><br>
            <?php echo "SPO2 : " . $temp['spo2_tm']; ?><br>
            <?php
            if ($temp['perubahan_sensorik_tm'] == '0') {
                echo "Perubahan Sensorik : Tidak Tercantum";
            } elseif ($temp['perubahan_sensorik_tm'] == '1') {
                echo "Perubahan Sensorik : Tidak Berubah";
            } else {
                echo "Perubahan Sensorik : Berubah";
            }
            ?><br>
            <?php
            if ($temp['perubahan_motorik_tm'] == '0') {
                echo "Perubahan Motorik : Tidak Tercantum";
            } elseif ($temp['perubahan_motorik_tm'] == '1') {
                echo "Perubahan Motorik : Tidak Berubah";
            } else {
                echo "Perubahan Motorik : Berubah";
            }
            ?><br>
            <?php
            if ($temp['irama_napas_tm'] == '0') {
                echo "Irama Napas : Tidak Tercantum";
            } elseif ($temp['irama_napas_tm'] == '1') {
                echo "Irama Napas : Tidak Teratur";
            } else {
                echo "Irama Napas : Teratur";
            }
            ?><br>
            <?php
            if ($temp['bunyi_napas_tm'] == '0') {
                echo "Bunyi Napas : Tidak Tercantum";
            } elseif ($temp['bunyi_napas_tm'] == '1') {
                echo "Bunyi Napas : Vasikuler";
            } elseif ($temp['bunyi_napas_tm'] == '2') {
                echo "Bunyi Napas : Stridor";
            } elseif ($temp['bunyi_napas_tm'] == '3') {
                echo "Bunyi Napas : Wheezing";
            } else {
                echo "Bunyi Napas : Rondi";
            }
            ?><br>
            <?php
            if ($temp['henti_jantung_tm'] == '0') {
                echo "Henti Jantung : Tidak Tercantum";
            } elseif ($temp['henti_jantung_tm'] == '1') {
                echo "Henti Jantung : Tidak";
            } else {
                echo "Henti Jantung : Ya";
            }
            ?><br>
            <?php
            if ($temp['kulit_tm'] == '0') {
                echo "Kulit : Tidak Tercantum";
            } elseif ($temp['kulit_tm'] == '1') {
                echo "Kulit : Lembab";
            } else {
                echo "Kulit : Kering";
            }
            ?><br>
            <?php
            if ($temp['akral_tm'] == '0') {
                echo "Akral : Tidak Tercantum";
            } elseif ($temp['akral_tm'] == '1') {
                echo "Akral : Dingin";
            } else {
                echo "Akral : Hangat";
            }
            ?><br>
            <?php
            if ($temp['pendarahan_tm'] == '0') {
                echo "Pendarahan : Tidak Tercantum";
            } elseif ($temp['pendarahan_tm'] == '1') {
                echo "Pendarahan : Tidak ";
            } else {
                echo "Pendarahan : Ya";
            }
            ?><br>
            <?php
            if ($temp['turgor_tm'] == '0') {
                echo "Turgor : Tidak Tercantum";
            } elseif ($temp['turgor_tm'] == '1') {
                echo "Turgor : Tidak Normal ";
            } else {
                echo "Turgor : Normal";
            }
            ?><br>
            <?php
            if ($temp['sianosis_tm'] == '0') {
                echo "Sianosis : Tidak Tercantum";
            } elseif ($temp['sianosis_tm'] == '1') {
                echo "Sianosis : Tidak";
            } else {
                echo "Sianosis : Normal";
            }
            ?><br>
            <?php
            if ($temp['riwayat_alergi_tm'] == '0') {
                echo "Riwayat Alergi : Tidak Tercantum";
            } elseif ($temp['riwayat_alergi_tm'] == '1') {
                echo "Riwayat Alergi : Tidak Ada";
            } else {
                echo "Riwayat Alergi : Ada";
            }
            ?><br>
            <?php
            if ($temp['medikasi_tm'] == '0') {
                echo "Medikasi : Tidak Tercantum";
            } elseif ($temp['medikasi_tm'] == '1') {
                echo "Medikasi : Tidak Ada";
            } else {
                echo "Medikasi: Ada";
            }
            ?><br>
            <?php
            if ($temp['pernah_stroke_tm'] == '0') {
                echo "Pernah Stroke : Tidak Tercantum";
            } elseif ($temp['pernah_stroke_tm'] == '1') {
                echo "Pernah Stroke : Tidak Pernah";
            } else {
                echo "Pernah Stroke : Pernah";
            }
            ?><br>
            <?php
            if ($temp['refleks_cahaya_tm'] == '0') {
                echo "Refleks Cahaya : Tidak Tercantum";
            } elseif ($temp['refleks_cahaya_tm'] == '1') {
                echo "Refleks Cahaya : Tidak Ada";
            } else {
                echo "Refleks Cahaya : Ada";
            }
            ?><br>
            <?php
            if ($temp['skala_nyeri_tm'] == '0') {
                echo "Skala Nyeri : Tidak Tercantum";
            } elseif ($temp['skala_nyeri_tm'] == '1') {
                echo "Skala Nyeri : Berat";
            } elseif ($temp['skala_nyeri_tm'] == '2') {
                echo "Skala Nyeri : Sedang";
            } else {
                echo "Skala Nyeri : Ringan";
            }
            ?><br>
            <?php
            if ($temp['aktivitas_mobilisasi_tm'] == '0') {
                echo "Aktivitas Mobilisasi : Tidak Tercantum";
            } elseif ($temp['aktivitas_mobilisasi_tm'] == '1') {
                echo "Aktivitas Mobilisasi : Mandiri";
            } else {
                echo "Aktivitas Mobilisasi : Perlu Dibantu";
            }
            ?><br>
            <?php
            if ($temp['risiko_jatuh_tm'] == '0') {
                echo "Risiko Jatuh : Tidak Tercantum";
            } elseif ($temp['risiko_jatuh_tm'] == '1') {
                echo "Risiko Jatuh : Tidak Berisiko";
            } else {
                echo "Risiko Jatuh : Risiko Tinggi";
            }
            ?><br>
            <?php
            if ($temp['crt_tm'] == '0') {
                echo "CRT : Tidak Tercantum";
            } elseif ($temp['crt_tm'] == '1') {
                echo "CRT : < 2 Detik";
            } else {
                echo "CRT : > 2 Detik";
            }
            ?><br>
            <?php echo "gcs_tm : " . $temp['gcs_tm']; ?><br>
            <hr class="my-1">
            <h6>Hasil Diagnosa: Stroke Haemoragic</h6>
            <hr class="my-1">
            <!-- <p>Segera periksa dan konsultasikan ke dokter!</p> -->
        </div>
    <?php } elseif ($result->diagnosa == 1) { ?>
        <div class="col-xl-12">
            <div class="card-body alert">
                <h5 class="card-title">Hasil Prediksi Pasien Stroke</h5>
                <hr class="my-1">
                <?php echo "Id Pasien : " . $temp['id_pasien_tm']; ?><br>
                <?php
                if ($temp['jenis_kelamin_tm'] == '0') {
                    echo "Jenis Kelamin : Perempuan";
                } else {
                    echo "Jenis Kelamin : Laki-Laki";
                }
                // echo "jenis_kelamin_tm : " . $temp['jenis_kelamin_tm']; 
                ?><br>
                <?php echo "Usia : " . $temp['usia_tm']; ?><br>
                <?php
                if ($temp['keadaan_umum_tm'] == '0') {
                    echo "Keadaan Umum : Tidak Tercantum";
                } elseif ($temp['keadaan_umum_tm'] == '1') {
                    echo "Keadaan Umum : Sedang";
                } elseif ($temp['keadaan_umum_tm'] == '2') {
                    echo "Keadaan Umum : Tidak Sadar";
                } else {
                    echo "Keadaan Umum : Lemah";
                }
                ?><br>
                <?php
                if ($temp['kesadaran_tm'] == '0') {
                    echo "Kesadaran : Tidak Tercantum";
                } elseif ($temp['kesadaran_tm'] == '1') {
                    echo "Kesadaran Umum : Samno-Len";
                } elseif ($temp['kesadaran_tm'] == '2') {
                    echo "Kesadaran : Sofor";
                } elseif ($temp['kesadaran_tm'] == '3') {
                    echo "Kesadaran : CM";
                } elseif ($temp['kesadaran_tm'] == '4') {
                    echo "Kesadaran : Apatis";
                } else {
                    echo "Kesadaran : Coma";
                }
                ?><br>
                <?php echo "Tensi Darah : " . $temp['tensi_darah_tm']; ?><br>
                <?php echo "Nadi Permenit : " . $temp['nadi_permenit_tm']; ?><br>
                <?php
                if ($temp['suara_napas_tm'] == '0') {
                    echo "Suara Napas : Tidak Tercantum";
                } elseif ($temp['suara_napas_tm'] == '1') {
                    echo "Suara Napas : Normal";
                } else {
                    echo "Suara Napas : Tidak Normal";
                }
                ?><br>
                <?php echo "Respirasi Permenit : " . $temp['respirasi_permenit_tm']; ?><br>
                <?php echo "SPO2 : " . $temp['spo2_tm']; ?><br>
                <?php
                if ($temp['perubahan_sensorik_tm'] == '0') {
                    echo "Perubahan Sensorik : Tidak Tercantum";
                } elseif ($temp['perubahan_sensorik_tm'] == '1') {
                    echo "Perubahan Sensorik : Tidak Berubah";
                } else {
                    echo "Perubahan Sensorik : Berubah";
                }
                ?><br>
                <?php
                if ($temp['perubahan_motorik_tm'] == '0') {
                    echo "Perubahan Motorik : Tidak Tercantum";
                } elseif ($temp['perubahan_motorik_tm'] == '1') {
                    echo "Perubahan Motorik : Tidak Berubah";
                } else {
                    echo "Perubahan Motorik : Berubah";
                }
                ?><br>
                <?php
                if ($temp['irama_napas_tm'] == '0') {
                    echo "Irama Napas : Tidak Tercantum";
                } elseif ($temp['irama_napas_tm'] == '1') {
                    echo "Irama Napas : Tidak Teratur";
                } else {
                    echo "Irama Napas : Teratur";
                }
                ?><br>
                <?php
                if ($temp['bunyi_napas_tm'] == '0') {
                    echo "Bunyi Napas : Tidak Tercantum";
                } elseif ($temp['bunyi_napas_tm'] == '1') {
                    echo "Bunyi Napas : Vasikuler";
                } elseif ($temp['bunyi_napas_tm'] == '2') {
                    echo "Bunyi Napas : Stridor";
                } elseif ($temp['bunyi_napas_tm'] == '3') {
                    echo "Bunyi Napas : Wheezing";
                } else {
                    echo "Bunyi Napas : Rondi";
                }
                ?><br>
                <?php
                if ($temp['henti_jantung_tm'] == '0') {
                    echo "Henti Jantung : Tidak Tercantum";
                } elseif ($temp['henti_jantung_tm'] == '1') {
                    echo "Henti Jantung : Tidak";
                } else {
                    echo "Henti Jantung : Ya";
                }
                ?><br>
                <?php
                if ($temp['kulit_tm'] == '0') {
                    echo "Kulit : Tidak Tercantum";
                } elseif ($temp['kulit_tm'] == '1') {
                    echo "Kulit : Lembab";
                } else {
                    echo "Kulit : Kering";
                }
                ?><br>
                <?php
                if ($temp['akral_tm'] == '0') {
                    echo "Akral : Tidak Tercantum";
                } elseif ($temp['akral_tm'] == '1') {
                    echo "Akral : Dingin";
                } else {
                    echo "Akral : Hangat";
                }
                ?><br>
                <?php
                if ($temp['pendarahan_tm'] == '0') {
                    echo "Pendarahan : Tidak Tercantum";
                } elseif ($temp['pendarahan_tm'] == '1') {
                    echo "Pendarahan : Tidak ";
                } else {
                    echo "Pendarahan : Ya";
                }
                ?><br>
                <?php
                if ($temp['turgor_tm'] == '0') {
                    echo "Turgor : Tidak Tercantum";
                } elseif ($temp['turgor_tm'] == '1') {
                    echo "Turgor : Tidak Normal ";
                } else {
                    echo "Turgor : Normal";
                }
                ?><br>
                <?php
                if ($temp['sianosis_tm'] == '0') {
                    echo "Sianosis : Tidak Tercantum";
                } elseif ($temp['sianosis_tm'] == '1') {
                    echo "Sianosis : Tidak";
                } else {
                    echo "Sianosis : Normal";
                }
                ?><br>
                <?php
                if ($temp['riwayat_alergi_tm'] == '0') {
                    echo "Riwayat Alergi : Tidak Tercantum";
                } elseif ($temp['riwayat_alergi_tm'] == '1') {
                    echo "Riwayat Alergi : Tidak Ada";
                } else {
                    echo "Riwayat Alergi : Ada";
                }
                ?><br>
                <?php
                if ($temp['medikasi_tm'] == '0') {
                    echo "Medikasi : Tidak Tercantum";
                } elseif ($temp['medikasi_tm'] == '1') {
                    echo "Medikasi : Tidak Ada";
                } else {
                    echo "Medikasi: Ada";
                }
                ?><br>
                <?php
                if ($temp['pernah_stroke_tm'] == '0') {
                    echo "Pernah Stroke : Tidak Tercantum";
                } elseif ($temp['pernah_stroke_tm'] == '1') {
                    echo "Pernah Stroke : Tidak Pernah";
                } else {
                    echo "Pernah Stroke : Pernah";
                }
                ?><br>
                <?php
                if ($temp['refleks_cahaya_tm'] == '0') {
                    echo "Refleks Cahaya : Tidak Tercantum";
                } elseif ($temp['refleks_cahaya_tm'] == '1') {
                    echo "Refleks Cahaya : Tidak Ada";
                } else {
                    echo "Refleks Cahaya : Ada";
                }
                ?><br>
                <?php
                if ($temp['skala_nyeri_tm'] == '0') {
                    echo "Skala Nyeri : Tidak Tercantum";
                } elseif ($temp['skala_nyeri_tm'] == '1') {
                    echo "Skala Nyeri : Berat";
                } elseif ($temp['skala_nyeri_tm'] == '2') {
                    echo "Skala Nyeri : Sedang";
                } else {
                    echo "Skala Nyeri : Ringan";
                }
                ?><br>
                <?php
                if ($temp['aktivitas_mobilisasi_tm'] == '0') {
                    echo "Aktivitas Mobilisasi : Tidak Tercantum";
                } elseif ($temp['aktivitas_mobilisasi_tm'] == '1') {
                    echo "Aktivitas Mobilisasi : Mandiri";
                } else {
                    echo "Aktivitas Mobilisasi : Perlu Dibantu";
                }
                ?><br>
                <?php
                if ($temp['risiko_jatuh_tm'] == '0') {
                    echo "Risiko Jatuh : Tidak Tercantum";
                } elseif ($temp['risiko_jatuh_tm'] == '1') {
                    echo "Risiko Jatuh : Tidak Berisiko";
                } else {
                    echo "Risiko Jatuh : Risiko Tinggi";
                }
                ?><br>
                <?php
                if ($temp['crt_tm'] == '0') {
                    echo "CRT : Tidak Tercantum";
                } elseif ($temp['crt_tm'] == '1') {
                    echo "CRT : < 2 Detik";
                } else {
                    echo "CRT : > 2 Detik";
                }
                ?><br>
                <?php echo "gcs_tm : " . $temp['gcs_tm']; ?><br>
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