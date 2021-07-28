<!DOCTYPE html>
<html lang="en">

<head>

    <title>Halaman Berita</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/care/css/magnific-popup.css">

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
                <a href="<?= base_url('auth') ?>" class="navbar-brand"><i></i>Prediksi Stroke</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url('auth') ?>" class="smoothScroll">Beranda</a></li>
                    <li><a href="<?= base_url('predik_masyarakat') ?>" class="smoothScroll">Mulai Prediksi</a></li>
                    <li><a href="#news" class="smoothScroll">Artikel</a></li>
                    <li class="appointment-btn"><a href="<?= base_url('login') ?>">Login</a></li>
                </ul>
            </div>

        </div>
    </section>


    <!-- NEWS DETAIL -->
    <section id="news-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">

                    <!-- NEWS THUMB -->
                    <div class="news-detail-thumb">
                        <div class="news-image">
                            <img src="<?php echo base_url() . 'vendor/sbadmin2/img/artikel/' . $artikel['Gambar'] ?>" class="img-responsive" alt="">
                        </div>
                        <h3><?php echo $artikel['Judul']; ?></a></h3>
                        <p><?php echo $artikel['Isi']; ?></a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="news-sidebar">
                        <div class="news-author">
                            <h4>About the author</h4>
                            <p><?php echo $artikel['Penulis']; ?></p>
                        </div>

                        <div class="recent-post">
                            <h4>Recent Posts</h4>

                            <div class="media">
                                <div class="media-object pull-left">
                                    <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Introducing a new healing process</a></h4>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-object pull-left">
                                    <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">About Amazing Technology</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </?php endforeach; ?> -->
            </div>
        </div>
    </section>
    <!-- SCRIPTS -->
    <script src="<?= base_url() ?>assets/care/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets/care/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/care/js/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>assets/care/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>assets/care/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/care/js/magnific-popup-options.js"></script>
    <script src="<?= base_url() ?>assets/care/js/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/care/js/smoothscroll.js"></script>
    <script src="<?= base_url() ?>assets/care/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/care/js/custom.js"></script>

</body>

</html>