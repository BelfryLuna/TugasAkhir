<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 06:48:37 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- icofont-css-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/icofont.min.css">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.carousel.min.css">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/aos.css">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/images/favicon2.png" type="image/x-icon">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/toastr/css/toastr.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/flaticon.css">




</head>

<body>

    <!-- Page-wrapper-Start -->
    <div class="page_wrapper">

        <!-- Preloader -->
        <div id="preloader">
            <div id="loader"></div>
        </div>

        <!-- masukan template start -->
        <?= $this->include('layoutuser/navbaruser'); ?>
        <?= $this->renderSection('content'); ?>
        <!-- masukan template end -->

        <!-- News-Letter-Section-Start -->
        <section class="newsletter_section">
            <!-- container start -->
            <div class="container">
                <div class="newsletter_box">
                    <div class="section_title col-sm-10" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                        <!-- h2 -->
                        <h2>Butuh bantuan menjalankan website Sahabat Lambung?</h2>
                        <!-- p -->
                        <p>Tekan tombol bantuan berikut!</p>
                    </div>
                    <form action="<?= base_url('/bantuan'); ?>" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                        <div class="form-group">
                            <button class="btn">Bantuan</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- container end -->
        </section>
        <!-- News-Letter-Section-end -->
        <!-- Footer-Section start -->
        <footer>
            <div class="top_footer" id="contact">
                <!-- animation line -->
                <div class="anim_line dark_bg">
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                    <span><img src="<?= base_url(); ?>/assets/images/anim_line.png" alt="anim_line"></span>
                </div>
                <!-- container start -->
                <div class="container">
                    <!-- row start -->
                    <div class="row">
                        <!-- footer link 1 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="abt_side">
                                <div class="logo"> <img src="<?= base_url(); ?>/images/footerlogo.png" alt="image"></div>
                                <ul>
                                    <li><a href="#">m.sonnyirsan@gmail.com</a></li>
                                </ul>
                                <ul class="social_media">
                                    <li><a target="_blank" href="https://twitter.com/itsmesonnny?t=gF--AwmLSqz7c_-CnhO8eA&s=09"><i class="icofont-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://instagram.com/sonnynno?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><i class="icofont-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- footer link 2 -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="links">
                                <h3>Useful Links</h3>
                                <ul>
                                    <li><a href="<?= base_url('/'); ?>">Home</a></li>
                                    <li><a href="<?= base_url('/info_penyakit'); ?>">Info Penyakit</a></li>
                                    <li><a href="<?= base_url('/diagnosa'); ?>">Diagnosa</a></li>
                                    <li><a href="<?= base_url('/riwayat'); ?>">Riwayat Diagnosa</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- footer link 3 -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="links">
                                <h3>Help & Support</h3>
                                <ul>
                                    <li><a href="<?= base_url('/bantuan'); ?>">Bantuan</a></li>
                                    <li><a href="<?= base_url('/info_pengembang'); ?>">Pengembang</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </div>

            <!-- last footer -->
            <div class="bottom_footer">
                <!-- container start -->
                <div class="container">
                    <!-- row start -->
                    <div class="row">
                        <div class="col-md-6">
                            <p>© Copyrights 2023. All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="developer_text">Developed by <a href="https://instagram.com/sonnynno?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="blank">M. Sonny Irsan Syahputra</a></p>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </div>

            <!-- go top button -->
            <div class="go_top">
                <span><img src="<?= base_url(); ?>/assets/images/go_top.png" alt="image"></span>
            </div>
        </footer>
        <!-- Footer-Section end -->

        <!-- VIDEO MODAL -->
        <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
                        <i class="icofont-close-line-circled"></i>
                    </button>
                    <div class="modal-body">
                        <div id="video-container" class="video-container">
                            <iframe id="youtubevideo" src="#" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="purple_backdrop"></div>

    </div>
    <!-- Page-wrapper-End -->

    <script src="https://kit.fontawesome.com/2b9fa48bbd.js" crossorigin="anonymous"></script>
    <!-- Jquery-js-Link -->
    <script src="<?= base_url(); ?>/assets/js/jquery.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url(); ?>/vendor/toastr/js/toastr.min.js"></script>
    <!-- All init script -->
    <script src="<?= base_url(); ?>/js/plugins-init/toastr-init.js"></script>
    <!-- owl-js-Link -->
    <script src="<?= base_url(); ?>/assets/js/owl.carousel.min.js"></script>
    <!-- bootstrap-js-Link -->
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- aos-js-Link -->
    <script src="<?= base_url(); ?>/assets/js/aos.js"></script>
    <!-- main-js-Link -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

    <!-- Datatable -->
    <script src="<?= base_url(); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/js/plugins-init/datatables.init.js"></script>

  

    <?php if (session()->getFlashdata('logout')) : ?>
        <script>
            toastr.success('<?= session()->getFlashdata('logout'); ?>', 'Logout Berhasil', {
                progressBar: true
            })
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <script>
            toastr.error('<?= session()->getFlashdata('error'); ?>', 'Ups..', {progressBar: true})
        </script>
    <?php endif; ?>

</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 06:50:37 GMT -->

</html>