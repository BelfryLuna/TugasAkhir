<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no" />
    <title><?= $title; ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/images/favicon2.png" />
    <!-- Data Tabel -->
    <link href="<?= base_url(); ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="<?= base_url(); ?>/vendor/nestable2/css/jquery.nestable.min.css" rel="stylesheet">

    <!-- Summernote -->
    <link href="<?= base_url(); ?>/vendor/summernote/summernote.css" rel="stylesheet">


    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/toastr/css/toastr.min.css">
    <!-- kalender -->
    <link href="<?= base_url(); ?>/vendor/fullcalendar/css/main.min.css" rel="stylesheet">
    <!-- chart grafik -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/chartist/css/chartist.min.css" />
    <link href="<?= base_url(); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- sweet alert 2 -->
    <link href="<?= base_url(); ?>/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/select2/css/select2.min.css">
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet" />

    <style>
        .containerck {
            width: 100%;
            max-width: 100%;
            margin-right: auto;

        }
    </style>

</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/dashboard" class="brand-logo">
                <img class="ml-3 mr-1" src="<?= base_url(); ?>/images/favicon2.png" alt="" style="width: 25%;">
                <img src="<?= base_url(); ?>/images/header1.png" alt="" style="width: 50%;">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header/Navbar start
        ***********************************-->

        <!--**********************************
            Header/Navbar end 
        ***********************************-->
        <!-- dipindahkan ke layout Navbar -->
        <!--**********************************
            Sidebar start
        ***********************************-->
        <!-- Dipindahkan ke layout sidebar -->
        <!--**********************************
            Sidebar end
        ***********************************-->


        <!--**********************************
            Content body start
        ***********************************-->
        <!-- konten dipindahkan ke file masing-masing -->
        <!--**********************************
            Content body end
        ***********************************-->

        <!-- masukan template start -->
        <?= $this->include('layout/navbar'); ?>
        <?= $this->include('layout/sidebar'); ?>
        <?= $this->renderSection('content'); ?>
        <!-- masukan template end -->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>
                    Copyright © Developed by
                    <a href="#" target="_blank">M. Sonny Irsan Syahputra</a> 2023
                </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="<?= base_url(); ?>/../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/global/global.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url(); ?>/js/plugins-init/select2-init.js"></script>

    <!-- ck editor -->
    <script src="<?= base_url(); ?>/vendor/ckeditor/ckeditor.js"></script>
    
        <!-- Summernote -->
    <script src="<?= base_url(); ?>/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="<?= base_url(); ?>/js/plugins-init/summernote-init.js"></script>

    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error)
            });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error)
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor3'))
            .catch(error => {
                console.error(error)
            });
    </script>
    <!-- Chart piety plugin files -->
    <script src="<?= base_url(); ?>/vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="<?= base_url(); ?>/vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="<?= base_url(); ?>/js/dashboard/dashboard-1.js"></script>
    <!-- Data Tabel -->
    <script src="<?= base_url(); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/js/plugins-init/datatables.init.js"></script>
    <!-- Jquery Validation -->
    <script src="<?= base_url(); ?>/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Nestable -->
    <script src="<?= base_url(); ?>/vendor/nestable2/js/jquery.nestable.min.js"></script>
    <script src="<?= base_url(); ?>/js/plugins-init/nestable-init.js"></script>

    <!-- Form validate init -->
    <script src="<?= base_url(); ?>/js/plugins-init/jquery.validate-init.js"></script>


    <!-- Toastr -->
    <script src="<?= base_url(); ?>/vendor/toastr/js/toastr.min.js"></script>

    <!-- All init script -->
    <script src="<?= base_url(); ?>/js/plugins-init/toastr-init.js"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="<?= base_url(); ?>/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/js/plugins-init/chartjs-init.js"></script>

    <!-- sweet alert 2 -->
    <script src="<?= base_url(); ?>/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="<?= base_url(); ?>/js/plugins-init/sweetalert.init.js"></script>
    
    <!-- kalender -->
    <script src="<?= base_url(); ?>/vendor/fullcalendar/js/main.min.js"></script>
	<script src="<?= base_url(); ?>/js/plugins-init/fullcalendar-init.js"></script>

    <!-- Dashboard 1 -->
    <script src="<?= base_url(); ?>/js/dashboard/portofolio.js"></script>

    <script src="<?= base_url(); ?>/js/dashboard/my-wallet.js"></script>
    <script src="<?= base_url(); ?>/vendor/swiper/js/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="<?= base_url(); ?>/js/custom.min.js"></script>
    <script src="<?= base_url(); ?>/js/deznav-init.js"></script>
    <script src="<?= base_url(); ?>/js/demo.js"></script>
    <script src="<?= base_url(); ?>/js/styleSwitcher.js"></script>




    <!-- sweet alert -->
    <?php if (session()->getFlashdata('error')) : ?>
        <script>
            toastr.error('<?= session()->getFlashdata('error'); ?>', 'Ups..', {progressBar: true})
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            toastr.success('<?= session()->getFlashdata('success'); ?>', 'Berhasil', {progressBar: true})
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('empty')) : ?>
        <script>
            toastr.info('<?= session()->getFlashdata('empty'); ?>', 'Hmm..', {progressBar: true})
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('logout')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '<?= session()->getFlashdata('logout'); ?>',
            })
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('login')) : ?>
        <script>
            toastr.success('<?= session()->getFlashdata('login'); ?>', 'Login Berhasil', {progressBar: true})
        </script>
    <?php endif; ?>

</body>

</html>