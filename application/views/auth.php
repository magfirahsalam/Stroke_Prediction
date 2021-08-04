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
               <li><a href="#news" class="smoothScroll">Artikel</a></li>
               <li class="appointment-btn"><a href="<?= base_url('login') ?>">Login</a></li>
            </ul>
         </div>
      </div>
   </section>


   <!-- HOME -->
   <section id="home" class="slider" data-stellar-background-ratio="0.3">
      <div class="container">
         <div class="row">

            <div class="owl-carousel owl-theme">
               <div class="item item-first">
                  <div class="caption">
                     <div class="col-md-offset-1 col-md-10">
                        <h3>Cegah Stroke Dari Sekarang!</h3>
                        <h1>Hidup Sehat</h1>
                     </div>
                  </div>
               </div>
               <div class="item item-second">
                  <div class="caption">
                     <div class="col-md-offset-1 col-md-10">
                        <h3>Stroke Penyakit Mematikan!</h3>
                        <h1>Ubah Gaya Hidup Anda</h1>
                        <!-- <a href="</?= base_url('predik_masyarakat') ?>" class="section-btn btn btn-default btn-gray smoothScroll">Mulai Prediksi</a> -->
                     </div>
                  </div>
               </div>

               <div class="item item-third">
                  <div class="caption">
                     <div class="col-md-offset-1 col-md-10">
                        <h3>Hindari Diri Anda Dari Penyakit Stroke!</h3>
                        <h1>Konsumsi Makanan Sehat dan Rajin Berolahraga</h1>
                        <!-- <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Baca Berita</a> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- NEWS -->
   <section id="news" data-stellar-background-ratio="2.5">
      <div class="container">
         <h2>Artikel</h2>
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <?php foreach ($artikel as $ds) : ?>
                  <div class="news-thumb wow fadeInUp" data-wow-delay="0.5s">
                     <a href="Index_artikel/detail_artikel/<?php echo $ds['id_artikel'] ?>">
                        <img src="<?php echo base_url() . 'vendor/sbadmin2/img/artikel/' . $ds['Gambar'] ?>" width="200">
                     </a>
                     <div class="news-info">
                        <h3><a href="<?= base_url() ?>Index_artikel/detail_artikel/<?php echo $ds['id_artikel'] ?>"><?php echo $ds['Judul']; ?></a></h3>
                        <p><?php echo $ds['Isi']; ?></p>
                        <div class=" author">
                           <img src="https://www.pngitem.com/pimgs/m/24-248235_user-profile-avatar-login-account-fa-user-circle.png" class="img-responsive" alt="">
                           <div class="author-info">
                              <h5><?php echo $ds['Penulis']; ?></h5>
                           </div>
                        </div>
                     </div>
                  </div>


                  <!-- <?php
                        foreach ($data as $ds) : ?>
                  <tr>
                     <td><?php echo $id_data_stroke++; ?></td>
                     <td><?php echo $ds['id_pasien']; ?></td>
                     <td><?php echo $ds['jenis_kelamin']; ?></td>
                     <td><?php echo $ds['usia']; ?></td>
                     <td><?php echo $ds['hipertensi']; ?></td>
                     <td><?php echo $ds['liver']; ?></td>
                     <td><?php echo $ds['status_pernikahan']; ?></td>
                     <td><?php echo $ds['tipe_pekerjaan']; ?></td>
                     <td><?php echo $ds['tempat_tinggal']; ?></td>
                     <td><?php echo $ds['rata_kadar_glukosa']; ?></td>
                     <td><?php echo $ds['index_berat_badan']; ?></td>
                     <td><?php echo $ds['status_perokok']; ?></td>
                     <td><?php echo $ds['keterangan']; ?></td>
                     <td>
                        <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $ds['id_data_stroke']; ?>">
                           Edit
                        </button>
                        <a href="<?= base_url() ?>data/hapus_data_stroke/<?php echo $ds['id_data_stroke']; ?>" class="badge badge-danger">Hapus</a>

                     </td>
                  </tr>
                  </tbody>
               <?php endforeach; ?> -->



            </div>
         </div>
      <?php endforeach; ?>
   </section>



   </div>

   </div>
   </div>
   </footer>

   <!-- SCRIPTS -->
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