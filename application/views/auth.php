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
               <li><a href="#news" class="smoothScroll">Berita</a></li>
               <li class="appointment-btn"><a href="<?= base_url('login') ?>">Login</a></li>
            </ul>
         </div>
      </div>
   </section>


   <!-- HOME -->
   <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container">
         <div class="row">

            <div class="owl-carousel owl-theme">
               <div class="item item-first">
                  <div class="caption">
                     <div class="col-md-offset-1 col-md-10">
                        <h3>Cegah Stroke Dari Sekarang!</h3>
                        <h1>Hidup Sehat</h1>
                        <a href="#team" class="section-btn btn btn-default smoothScroll">Cari Tempat Berobat</a>
                     </div>
                  </div>
               </div>

               <div class="item item-second">
                  <div class="caption">
                     <div class="col-md-offset-1 col-md-10">
                        <h3>Stroke Penyakit Mematikan!</h3>
                        <h1>Ubah Gaya Hidup Anda</h1>
                        <a href="<?= base_url('predik_masyarakat') ?>" class="section-btn btn btn-default btn-gray smoothScroll">Mulai Prediksi</a>
                     </div>
                  </div>
               </div>

               <div class="item item-third">
                  <div class="caption">
                     <div class="col-md-offset-1 col-md-10">
                        <h3>Hindari Diri Anda Dari Penyakit Stroke!</h3>
                        <h1>Konsumsi Makanan Sehat dan Rajin Berolahraga</h1>
                        <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Baca Berita</a>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>


   <!-- ABOUT -->
   <!-- <section id="about">
      <div class="container">
         <div class="row">

            <div class="col-md-6 col-sm-6">
               <div class="about-info">
                  <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth Center</h2>
                  <div class="wow fadeInUp" data-wow-delay="0.8s">
                     <p>Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit volutpat venenatis.</p>
                     <p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam a tempus vehicula.</p>
                  </div>
                  <figure class="profile wow fadeInUp" data-wow-delay="1s">
                     <img src="images/author-image.jpg" class="img-responsive" alt="">
                     <figcaption>
                        <h3>Dr. Neil Jackson</h3>
                        <p>General Principal</p>
                     </figcaption>
                  </figure>
               </div>
            </div>

         </div>
      </div>
   </section>


   <!-- TEAM -->
   <!--<section id="team" data-stellar-background-ratio="1">
      <div class="container">
         <div class="row">

            <div class="col-md-6 col-sm-6">
               <div class="about-info">
                  <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
               </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6">
               <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                  <img src="images/team-image1.jpg" class="img-responsive" alt="">

                  <div class="team-info">
                     <h3>Nate Baston</h3>
                     <p>General Principal</p>
                     <div class="team-contact-info">
                        <p><i class="fa fa-phone"></i> 010-020-0120</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                     </div>
                     <ul class="social-icon">
                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                     </ul>
                  </div>

               </div>
            </div>

            <div class="col-md-4 col-sm-6">
               <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                  <img src="images/team-image2.jpg" class="img-responsive" alt="">

                  <div class="team-info">
                     <h3>Jason Stewart</h3>
                     <p>Pregnancy</p>
                     <div class="team-contact-info">
                        <p><i class="fa fa-phone"></i> 010-070-0170</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a></p>
                     </div>
                     <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook-square"></a></li>
                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                        <li><a href="#" class="fa fa-flickr"></a></li>
                     </ul>
                  </div>

               </div>
            </div>

            <div class="col-md-4 col-sm-6">
               <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                  <img src="images/team-image3.jpg" class="img-responsive" alt="">

                  <div class="team-info">
                     <h3>Miasha Nakahara</h3>
                     <p>Cardiology</p>
                     <div class="team-contact-info">
                        <p><i class="fa fa-phone"></i> 010-040-0140</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
                     </div>
                     <ul class="social-icon">
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                     </ul>
                  </div>

               </div>
            </div>

         </div>
      </div>
   </section>


   <!-- NEWS -->
   <section id="news" data-stellar-background-ratio="2.5">
      <div class="container">
         <h1>Artikel</h1>
         <?php foreach ($artikel as $ds) : ?>
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                     <a href="Index_artikel/detail_artikel/<?php echo $ds['id_artikel'] ?>">
                        <img src="<?php echo base_url() . 'vendor/sbadmin2/img/artikel/' . $ds['Gambar'] ?>" width="500">
                     </a>
                     <div class="news-info">
                        <h3>Judul : <a href="<?= base_url() ?>Index_artikel/detail_artikel/<?php echo $ds['id_artikel'] ?>"><?php echo $ds['Judul']; ?></a></h3>
                        <p>Isi : <?php echo $ds['Isi']; ?></p>
                        <div class=" author">
                           <img src="https://www.pngitem.com/pimgs/m/24-248235_user-profile-avatar-login-account-fa-user-circle.png" class="img-responsive" alt="">
                           <div class="author-info">
                              <h5>Author : <?php echo $ds['Penulis']; ?></h5>

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


   <!-- MAKE AN APPOINTMENT -->
   <!--  <section id="appointment" data-stellar-background-ratio="3">
      <div class="container">
         <div class="row">

            <div class="col-md-6 col-sm-6">
               <img src="images/appointment-image.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
               <!-- CONTACT FORM HERE -->
   <!-- <form id="appointment-form" role="form" method="post" action="#">

                  <!-- SECTION TITLE -->
   <!-- <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                     <h2>Make an appointment</h2>
                  </div>

                  <div class="wow fadeInUp" data-wow-delay="0.8s">
                     <div class="col-md-6 col-sm-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                     </div>

                     <div class="col-md-6 col-sm-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                     </div>

                     <div class="col-md-6 col-sm-6">
                        <label for="date">Select Date</label>
                        <input type="date" name="date" value="" class="form-control">
                     </div>

                     <div class="col-md-6 col-sm-6">
                        <label for="select">Select Department</label>
                        <select class="form-control">
                           <option>General Health</option>
                           <option>Cardiology</option>
                           <option>Dental</option>
                           <option>Medical Research</option>
                        </select>
                     </div>

                     <div class="col-md-12 col-sm-12">
                        <label for="telephone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                        <label for="Message">Additional Message</label>
                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                     </div>
                  </div>
               </form>
            </div>

         </div>
      </div>
   </section>


   GOOGLE MAP
         <section id="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4967608643656!2d108.31968901462244!3d-6.329620095419319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb957ef43ab4d%3A0x2436dd8079b0217a!2sIndramayu%20Regency%20Regional%20General%20Hospital!5e0!3m2!1sen!2sid!4v1622643244455!5m2!1sen!2sid" width="1700" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </section>


         <!-- FOOTER -->
   <!-- <footer data-stellar-background-ratio="5">
      <div class="container">
         <div class="row">

            <div class="col-md-4 col-sm-4">
               <div class="footer-thumb">
                  <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                  <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                  <div class="contact-info">
                     <p><i class="fa fa-phone"></i> 010-070-0170</p>
                     <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                  </div>
               </div>
            </div>

            <div class="col-md-4 col-sm-4">
               <div class="footer-thumb">
                  <h4 class="wow fadeInUp" data-wow-delay="0.4s">Berita</h4>
                  <div class="latest-stories">
                     <div class="stories-image">
                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                     </div>
                     <div class="stories-info">
                        <a href="#">
                           <h5>Amazing Technology</h5>
                        </a>
                        <span>March 08, 2018</span>
                     </div>
                  </div>

                  <div class="latest-stories">
                     <div class="stories-image">
                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                     </div>
                     <div class="stories-info">
                        <a href="#">
                           <h5>New Healing Process</h5>
                        </a>
                        <span>February 20, 2018</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-4 col-sm-4">
               <div class="footer-thumb">
                  <div class="opening-hours">
                     <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                     <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                     <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                     <p>Sunday <span>Closed</span></p>
                  </div>

                  <ul class="social-icon">
                     <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                     <li><a href="#" class="fa fa-twitter"></a></li>
                     <li><a href="#" class="fa fa-instagram"></a></li>
                  </ul>
               </div>
            </div>
-->
   <!-- <div class="col-md-12 col-sm-12 border-top">
            <div class="col-md-4 col-sm-6">
               <div class="copyright-text">
                  <p>Copyright &copy; Polindra 2021</p>
               </div>
            </div> -->
   <!-- <div class="col-md-2 col-sm-2 text-align-center">
               <div class="angle-up-btn">
                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
               </div>
            </div> -->
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