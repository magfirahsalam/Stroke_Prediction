<div class="container-fluid">
    <h3> <?= $title; ?></h3>
    <hr>
    <br>
    <form method="post" action="<?= base_url('prediksi_tim_medis/prediksitm'); ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Jenis Kelamin" class="col-form-label">Jenis Kelamin:</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="0">Laki-Laki</option>
                        <option value="1">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Usia" class="col-form-label">Usia:</label>
                    <input type="usia" class="form-control" id="usia" name="usia" placeholder="Usia">
                </div>
                <div class="form-group">
                    <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                    <select class="form-control" name="hipertensi">
                        <option value="0">Ya</option>
                        <option value="1">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Liver" class="col-form-label">Riwayat Liver?</label>
                    <select class="form-control" name="liver">
                        <option value="0">Ya</option>
                        <option value="1">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Status Pernikahan" class="col-form-label">Status Menikah:</label>
                    <select class="form-control" name="status_pernikahan">
                        <option value="0">Sudah Menikah</option>
                        <option value="1">Belum Menikah</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Tipe Pekerjaan" class="col-form-label">Tipe Pekerjaan:</label>
                    <select class="form-control" name="tipe_pekerjaan">
                        <option value="0">Pekerja Swasta</option>
                        <option value="1">Bisnis</option>
                        <option value="2">Pemerintahan</option>
                        <option value="3">Pekerja Anak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Tempat Tinggal" class="col-form-label">Tempat Tinggal:</label>
                    <select class="form-control" name="tempat_tinggal">
                        <option value="0">Perkotaan</option>
                        <option value="1">Pedesaan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Rata Kadar Glukosa" class="col-form-label">Kadar Glukosa:</label>
                    <select class="form-control" name="rata_kadar_glukosa">
                        <option value="0">Glukosa < 130 </option>
                        <option value="1">Glukosa antara 130 sampai 200</option>
                        <option value="2">Glukosa > 200</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                    <select class="form-control" name="index_berat_badan">
                        <option value="0">Index Berat Badan < 18 </option>
                        <option value="1">Index Berat Badan antara 18 sampai 25</option>
                        <option value="2">Index Berat Badan > 25</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                    <select class="form-control" name="status_perokok">
                        <option value="0">Pernah</option>
                        <option value="1">Tidak Pernah</option>
                        <option value="2">Perokok</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tambah" class="col-sm-5 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-secondary">Hasil Prediksi</button>
            </div>
        </div>
    </form>
</div>