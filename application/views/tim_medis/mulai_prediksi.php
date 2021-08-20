<div class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>

            <div class="col-md-6">
                <!-- Button trigger modal -->

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-help" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Panduan Pengisian Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <form method="post" action="<?= base_url('prediksi_tim_medis/prediksi_tm'); ?>">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id_pasien" class="col-form-label">Id Pasien: </label>
                        <input type="id_pasien" class="form-control" id="id_pasien" name="id_pasien" placeholder="Masukkan Id Pasien" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin:</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="1">Laki-Laki</option>
                            <option value="0">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usia" class="col-form-label">Usia:</label>
                        <input type="usia" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia" required>
                    </div>
                    <div class="form-group">
                        <label for="keadaan_umum" class="col-form-label">Keadaan Umum:</label>
                        <select class="form-control" name="keadaan_umum">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Sedang</option>
                            <option value="2">Tidak Sadar</option>
                            <option value="3">Lemah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kesadaran" class="col-form-label">Kesadaran:</label>
                        <select class="form-control" name="kesadaran">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Samno-Len</option>
                            <option value="2">Sofor</option>
                            <option value="3">CM</option>
                            <option value="4">Apatis</option>
                            <option value="4">Coma</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tensi_darah" class="col-form-label">Tensi Darah:</label>
                        <input type="tensi_darah" class="form-control" id="tensi_darah" name="tensi_darah" placeholder="Masukkan Tensi Darah" required>
                    </div>
                    <div class="form-group">
                        <label for="nadi_permenit" class="col-form-label">Jumlah Denyut Nadi/menit:</label>
                        <input type="nadi_permenit" class="form-control" id="nadi_permenit" name="nadi_permenit" placeholder="Masukkan Jumlah Denyut Nadi Permenit" required>
                    </div>
                    <div class="form-group">
                        <label for="suara_napas" class="col-form-label">Suara Napas:</label>
                        <select class="form-control" name="suara_napas">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Normal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="suhu_badan" class="col-form-label">Suhu Badan:</label>
                        <input type="suhu_badan" class="form-control" id="suhu_badan" name="suhu_badan" placeholder="Masukkan Suhu Badan" required>
                    </div>
                    <div class="form-group">
                        <label for="respirasi_permenit" class="col-form-label">Jumlah Napas/menit:</label>
                        <input type="respirasi_permenit" class="form-control" id="respirasi_permenit" name="respirasi_permenit" placeholder="Masukkan Jumlah Napas Permenit" required>
                    </div>
                    <div class="form-group">
                        <label for="spo2" class="col-form-label">SPO2:</label>
                        <input type="spo2" class="form-control" id="spo2" name="spo2" placeholder="Masukkan SPO2" required>
                    </div>
                    <div class="form-group">
                        <label for="perubahan_sensorik" class="col-form-label">Perubahan Sensorik:</label>
                        <select class="form-control" name="perubahan_sensorik">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Berubah</option>
                            <option value="2">Berubah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="perubahan_motorik" class="col-form-label">Perubahan Motorik:</label>
                        <select class="form-control" name="perubahan_motorik">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Berubah</option>
                            <option value="2">Berubah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="irama_napas" class="col-form-label">Irama Napas:</label>
                        <select class="form-control" name="irama_napas">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Teratur</option>
                            <option value="2">Teratur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bunyi_napas" class="col-form-label">Bunyi Napas:</label>
                        <select class="form-control" name="bunyi_napas">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Vasikuler</option>
                            <option value="2">Stridor</option>
                            <option value="2">Wheezing</option>
                            <option value="2">Rondi</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="henti_jantung" class="col-form-label">Henti Jantung:</label>
                        <select class="form-control" name="henti_jantung">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak</option>
                            <option value="2">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nadi_teraba" class="col-form-label">Nadi Teraba:</label>
                        <select class="form-control" name="nadi_teraba">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak</option>
                            <option value="2">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kulit" class="col-form-label">Kondisi Kulit:</label>
                        <select class="form-control" name="kulit">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Lembab</option>
                            <option value="2">Kering</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="akral" class="col-form-label">AKRAL:</label>
                        <select class="form-control" name="akral">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Dingin</option>
                            <option value="2">Hangat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pendarahan" class="col-form-label">Pendarahan:</label>
                        <select class="form-control" name="pendarahan">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Pendarahan</option>
                            <option value="2">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="turgor" class="col-form-label">Turgor:</label>
                        <select class="form-control" name="turgor">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Normal</option>
                            <option value="2">Normal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sianosis" class="col-form-label">Sianosis:</label>
                        <select class="form-control" name="sianosis">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak</option>
                            <option value="2">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="riwayat_alergi" class="col-form-label">Riwayat Alergi:</label>
                        <select class="form-control" name="riwayat_alergi">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Ada</option>
                            <option value="2">Ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medikasi" class="col-form-label">Medikasi:</label>
                        <select class="form-control" name="medikasi">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Ada</option>
                            <option value="2">Ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pernah_stroke" class="col-form-label">Riwayat Stroke:</label>
                        <select class="form-control" name="pernah_stroke">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Ada</option>
                            <option value="2">Ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="refleks_cahaya" class="col-form-label">Refleks Cahaya:</label>
                        <select class="form-control" name="refleks_cahaya">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Ada</option>
                            <option value="2">Ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="skala_nyeri" class="col-form-label">Skala Nyeri:</label>
                        <select class="form-control" name="skala_nyeri">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Berat</option>
                            <option value="2">Sedang</option>
                            <option value="3">Ringan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="aktivitas_mobilisasi" class="col-form-label">Aktivitas Mobilisasi:</label>
                        <select class="form-control" name="aktivitas_mobilisasi">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Mandiri</option>
                            <option value="2">Perlu Bantuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="risiko_jatuh" class="col-form-label">Risiko Jatuh:</label>
                        <select class="form-control" name="risiko_jatuh">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Berisiko</option>
                            <option value="2">Risiko Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="crt" class="col-form-label">CRT:</label>
                        <select class="form-control" name="crt">
                            <option value="0">Tidak Tercantum</option>
                            <option value="1">Tidak Berisiko</option>
                            <option value="2">Risiko Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gcs" class="col-form-label">GCS:</label>
                        <input type="gcs" class="form-control" id="gcs" name="gcs" placeholder="Masukkan GCS" required>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-success" style="float:left">Lakukan Prediksi</button>
            </div>
        </form>
    </div>
</div>

</body>

<div class="container-fluid bg-dark text-white mt-5" style="padding: 20px 0;">
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="<?= base_url() ?>assets/care/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/care/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/care/js/jquery.sticky.js"></script>
<script src="<?= base_url() ?>assets/care/js/jquery.stellar.min.js"></script>
<script src="<?= base_url() ?>assets/care/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/care//js/smoothscroll.js"></script>
<script src="<?= base_url() ?>assets/care/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/care/js/custom.js"></script>

<script>
    function hitungbmi() {
        let tinggi_badan = $("#tinggi_badan").val()
        let berat_badan = $("#berat_badan").val()
        //let index_berat_badan = $("#index_berat_badan").val()
        let penyebut = parseFloat((tinggi_badan / 100) * (tinggi_badan / 100))
        let bmi = parseFloat(berat_badan / penyebut)
        let index_berat_badan = 2
        if (bmi > 0 && bmi <= 18) {
            index_berat_badan = 0;
        } else if (bmi > 18 && bmi <= 25) {
            index_berat_badan = 1;
        }
        // } else {
        //     index_berat_badan = 2;
        // }
        // alert(index_berat_badan)
        $("#index_berat_badan").val(index_berat_badan)

    }
</script>

</body>

</html>