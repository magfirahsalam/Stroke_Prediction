<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Hasil Prediksi Stroke</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <link href="{{ url_for('static', filename='css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/tooplate-style.css">
</head>

<body>

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
                <a href="<?= base_url('auth') ?>" class="navbar-brand"><i></i>Prediksi Stroke</a>
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

    <div class="container pt-5">


        <!--% if $keterangan_pengunjung == 'stroke' %}-->
        <?php if ((bool)$result->keterangan) { ?>
            <div class="alert alert-danger">
                <h1>Anda Berpotensi Terkena Stroke!</h1>
                <hr class="my-1">
                <p>Segera periksa dan konsultasikan ke dokter!</p>
                <p>ATUR POLA MAKAN DAN UBAH GAYA HIDUP ANDA</p>
            </div>
        <?php } else { ?>
            <!--{% else %}-->
            <div class="alert alert-success">
                <h1>Anda Tidak Berpotensi Terkena Stroke</h1>
                <hr class="my-1">
                <p>Tetaplah waspada dan terus jaga kesehatan Anda!</p>
            </div>
        <?php } ?>
        <!--{% endif %}-->

        <div class="form-group">
            <a href="/predik/predik_masyarakat" class="btn btn-success">
                <i class="fa fa-angle-double-left"></i> Kembali
            </a>
        </div>
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


</body>

</html>