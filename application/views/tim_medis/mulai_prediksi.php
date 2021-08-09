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
                        <label for="id_pasien_tm" class="col-form-label">Id Pasien: </label>
                        <input type="id_pasien_tm" class="form-control" id="id_pasien_tm" name="id_pasien_tm" placeholder="Masukkan id Pasien Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                        <select class="form-control" name="jenis_kelamin_tm">
                            <option value="0">Laki-Laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Usia" class="col-form-label">Usia:</label>
                        <input type="usia" class="form-control" id="usia" name="usia_tm" placeholder="Masukkan Usia Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="tinggi_badan" class="col-form-label">Tinggi Badan:</label>
                        <input onchange="hitungbmi()" type="tinggi_badan" class="form-control" id="tinggi_badan" name="tinggi_badan_tm" placeholder="Masukkan Tinggi Badan Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="berat_badan" class="col-form-label">Berat Badan:</label>
                        <input onchange="hitungbmi()" type="berat_badan" class="form-control" id="berat_badan" name="berat_badan_tm" placeholder="Masukkan Berat Badan Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                        <select class="form-control" name="index_bb_tm" id="index_berat_badan" aria-label="readonly input example" readonly>
                            <option selected>Anda Tidak Perlu Klik, Sudah Terisi Otomatis</option>
                            <option value="0">Index Berat Badan < 18 </option>
                            <option value="1">Index Berat Badan antara 18 sampai 25</option>
                            <option value="2">Index Berat Badan > 25</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                        <select class="form-control" name="hipertensi_tm">
                            <option value="0">Ya</option>
                            <option value="1">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                        <select class="form-control" name="liver_tm">
                            <option value="0">Ya</option>
                            <option value="1">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                        <select class="form-control" name="status_pernikahan_tm">
                            <option value="0">Sudah Menikah</option>
                            <option value="1">Belum Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                        <select class="form-control" name="tipe_pekerjaan_tm">
                            <option value="0">Pekerja Swasta</option>
                            <option value="1">Bisnis</option>
                            <option value="2">Pemerintahan</option>
                            <option value="3">Pekerja Anak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                        <select class="form-control" name="tempat_tinggal_tm">
                            <option value="0">Perkotaan</option>
                            <option value="1">Pedesaan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                        <select class="form-control" name="rata_kadar_glukosa_tm">
                            <option value="0">Glukosa < 130 </option>
                            <option value="1">Glukosa antara 130 sampai 200</option>
                            <option value="2">Glukosa > 200</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                        <select class="form-control" name="status_perokok_tm">
                            <option value="0">Pernah</option>
                            <option value="1">Tidak Pernah</option>
                            <option value="2">Perokok</option>
                        </select>
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