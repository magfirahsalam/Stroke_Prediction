<!DOCTYPE html>
<html lang="en">

<head>

    <title>Prediksi Stroke</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>

    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="auth" class="navbar-brand"><i></i>Prediksi Stroke</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="auth" class="smoothScroll">Beranda</a></li>
                    <li><a href="<?= base_url('predik_masyarakat') ?>" class="smoothScroll">Mulai Prediksi</a></li>
                    <li class="appointment-btn"><a href="<?= base_url('login') ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Form Prediksi Stroke</h5>
                </div>

                <div class="col-md-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-help" style="float: right">
                        <i class="fa fa-question"></i> Bantuan
                    </button>
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
                        <div class="modal-body">

                            <ol>
                                <li>User masuk ke aplikasi web.</li>
                                <li>Pada halaman awal tekan button “Mulai Prediksi” atau klik menu “Prediksi” pada bagian menu bar.</li>
                                <li>Isi form yang ada di halaman tersebut.</li>
                                <li>Form Jenis Kelamin. Anda langsung dapat memilih opsi yang tersedia</li>
                                <li>Form Usia. Anda bisa langsung memasukkan data usia sesuai keperluan prediksi. Jenis inputan adalah bilangan asli (contoh : 12, 26, 47).</li>
                                <li>Form Tekanan Darah Tinggi. Anda langsung dapat memilih opsi yang tersedia sesuai dengan apakah Anda memiliki tekanan arah yang tinggi atau tidak.</li>
                                <li>Form Riwayat Liver. Anda langsung dapat memilih opsi yang tersedia sesuai dengan apakah Anda menderita penyakit liver atau tidak.</li>
                                <li>Form Status Menikah. Anda langsung dapat memilih opsi yang tersedia sesuai dengan apakah Anda sudah menikah atau belum menikah.</li>
                                <li>Form Tipe Pekerjaan Anda langsung dapat memilih opsi yang tersedia sesuai dengan apakah Anda pekerja swasta, pebisnis, bekera di pemerintahan, atau pekerja anak.</li>
                                <li>Form Tempat Tinggal. Anda langsung dapat memilih opsi yang tersedia sesuai dengan apakah Anda tinggal di perkotaan atau pedesaan.</li>
                                <li>Form Kadar Glukosa. Anda langsung dapat memilih opsi yang tersedia sesuai dengan kadar glukosa Anda.</li>
                                <li>Form Index Berat Badan. Anda langsung dapat memilih opsi yang tersedia sesuai dengan index berat badan Anda.</li>
                                <li>Form Status Merokok. Anda langsung dapat memilih opsi yang tersedia sesuai dengan kondisi Anda.</li>
                                <li>Setelah mengisi form tersebut user dapat melihat hasilnya dengan menekan button "Lakukan Prediksi".</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-3">
            <br>
            <form method="post" action="<?= base_url('predik_masyarakat/prediksi_pengunjung'); ?>">

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
                            <input type="number" min="1" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="tinggi_badan" class="col-form-label">Tinggi Badan:</label>
                            <input onchange="hitungbmi()" type="number" min="1" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Masukkan Tinggi Badan Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="berat_badan" class="col-form-label">Berat Badan:</label>
                            <input onchange="hitungbmi()" type="berat_badan" class="form-control" id="berat_badan" name="berat_badan" placeholder="Masukkan Berat Badan Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="Index Berat Badan" class="col-form-label">Index Berat Badan:</label>
                            <select class="form-control" name="index_berat_badan" id="index_berat_badan" aria-label="readonly input example" readonly>
                                <option selected>Anda Tidak Perlu Klik, Sudah Terisi Otomatis</option>
                                <option value="0">Index Berat Badan < 18 </option>
                                <option value="1">Index Berat Badan antara 18 sampai 25</option>
                                <option value="2">Index Berat Badan > 25</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Hipertensi" class="col-form-label">Tekanan Darah Anda Tinggi?</label>
                            <select class="form-control" name="hipertensi">
                                <option value="0">Ya</option>
                                <option value="1">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                            <label for="Status Perokok" class="col-form-label">Status Merokok</label>
                            <select class="form-control" name="status_perokok">
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